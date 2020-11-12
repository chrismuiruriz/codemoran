/* Dom7 */
var $$ = Dom7;

$mainUrl = "http://myschoolchart.com/unileverbe/rest/";

/* Theme */
var theme = 'auto';
if (document.location.search.indexOf('theme=') >= 0) {
    theme = document.location.search.split('theme=')[1].split('&')[0];
}

var app = new Framework7({
    theme: "md",
    init: false,
    cache: false,
    view: {
        pushState: true
    },
    root: "#app",
    name: "SOLViT",
    id: "co.ke.solvit",
    panel: {
        swipe: 'right'
    },
    routes: routes
});

var $$ = app.$;
/* make sure the app only runs on mobile devices */
if (app.device.desktop) {
    app.dialog.alert("We've detected you are using a desktop device to view this app, for the best user experience, kindly view it on your smartphone., ", null);
}

/* main view */
var mainView = app.view.create(".view-main");

/* pageInit is only called once */
app.on('pageInit', function (e) {
    var pageName = e.name;
    if (pageName !== "login") {
        if (!localStorage.userPhone) {
            mainView.router.load({url: "./pages/login-page.html", ignoreCache: true, reload: true});
        } else if (pageName === "home") {
            setUpHomePage();
        }
    }
});

app.on("pageBeforeIn", function (e) {
    $(".panel-right").removeClass("opacity-none");
    $(".panel-backdrop").removeClass("opacity-none");
    var pageName = e.name;
    if (pageName === "login") {
        if (localStorage.userPhone) {
            mainView.router.load({url: "./pages/login-page.html", ignoreCache: true, reload: true});
        }
        setUpFirebaseLogin();
    } else if (pageName === "home") {
        setUpHomePage();
    } else if (pageName === "user-details") {
        setUpDetailsPage(e);
    } else if (pageName === "profile-page") {
        $("[data-profileData='name']").html(localStorage.fullName);
        $("[data-profileData='phone']").html(localStorage.userPhone);
        $("[data-profileData='email']").html(localStorage.userEmail);
        $("[data-profileData='group']").html("Group #" + localStorage.userGroup);
    }
});


/* setup firebase */
function setUpFirebaseLogin() {
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('login-verify-phone-btn', {
        'size': 'invisible',
        'callback': function (response) {
            // reCAPTCHA solved, allow signInWithPhoneNumber.
        }
    });
}

/*send code to user phone*/
$("body").on("click", "#login-verify-phone-btn", function (e) {
    e.preventDefault();
    var userInput = $("#login-phone-input").val();

    if (userInput === "") {
        return;
    }

    app.dialog.preloader('Sending code...');
    var phoneNumber = userInput;
    var appVerifier = window.recaptchaVerifier;
    firebase.auth().signInWithPhoneNumber(phoneNumber, appVerifier)
            .then(function (confirmationResult) {
                app.dialog.close();
                window.confirmationResult = confirmationResult;
                $("#phone-form").hide();
                $("#code-form").show();
                $("[data-modal='user-phone']").html(userInput);
            }).catch(function (error) {
        app.dialog.close();
        console.log("Login Error", error);
    });
});

/*verify user code*/
$("body").on("click", "#login-verify-code-btn", function (e) {
    e.preventDefault();
    var userInput = $("#login-code-input").val();
    var userPhone = $("#login-phone-input").val();

    if (userInput === "") {
        app.dialog.alert("Phone Number cannot be empty!", null);
        return;
    }
    app.dialog.preloader('Verifying...');
    var code = userInput;
    confirmationResult.confirm(code).then(function (result) {
        app.dialog.close();
        console.log("Results", result);
        app.dialog.alert("Code Verified", null, function () {
            setTimeout(function () {
                onAccountVerified(userPhone);
            }, 1000);
        });
    }).catch(function (error) {
        app.dialog.close();
        app.dialog.alert("error " + error + " Try Again!", null);
        console.log("Error", error);
    });
});

/* on account rerified */
function onAccountVerified(userPhone) {
    firebase.database().ref('users/').child(userPhone).once('value', function (snapshot) {
        if (snapshot.exists()) {
            console.log("User Data", snapshot);
            /* set userPhone local storage & go to homepage */
            localStorage.userPhone = userPhone;
            localStorage.userFirstName = snapshot.val().user_first_name;
            localStorage.userLastName = snapshot.val().user_last_name;
            localStorage.userEmail = snapshot.val().user_email;
            mainView.router.load({url: "index.html", ignoreCache: true, reload: true});
        } else {
            /* go to user details */
            var d_url = "./pages/user-details.html?userphone=" + userPhone + "";
            mainView.router.load({url: d_url, ignoreCache: true, reload: true});
        }
    });
}

/* save user profile */
$("body").on("click", "#create-profile-btn", function () {
    var userFirstName = $("#first-name-input").val();
    var userLastName = $("#last-name-input").val();
    var userEmailAddress = $("#email-input").val();
    var userPhone = $("#userPhone").val();

    if (userPhone === "") {
        return;
    }
    if (userFirstName === "") {
        app.dialog.alert("First Name is required!", null);
        return;
    }
    if (userLastName === "") {
        app.dialog.alert("Last Name is required!", null);
        return;
    }

    firebase.database().ref('users/' + userPhone).set({
        user_phone: userPhone,
        user_first_name: userFirstName,
        user_last_name: userLastName,
        user_email: userEmailAddress
    }).then(function () {
        app.dialog.alert("Profile Created", null, function () {
            setTimeout(function () {
                localStorage.userPhone = userPhone;
                localStorage.userFirstName = userFirstName;
                localStorage.userLastName = userLastName;
                localStorage.userEmail = userEmailAddress;
                mainView.router.load({url: "index.html", ignoreCache: true, reload: true});
            }, 1000);
        });
    }).catch(function (error) {
        app.dialog.alert("Error " + error + ". Try Again", null);
    });
});

/* setup user details page */
var setUpDetailsPage = function (pageData) {
    if ($.isEmptyObject(pageData.route.params)) {
        var queryParams = pageData.route.query;
    } else {
        var queryParams = pageData.route.params;
    }
    var userPhone = queryParams.userphone;
    $("#userPhone").val(userPhone);
};

/* set up home page */
var setUpHomePage = function () {

};

/* onLogin btn clicked */
$("body").on("click", "#loginBtn", function (e) {
    e.preventDefault();

    var $username = $("#loginUsername").val();
    var $password = $("#loginPassword").val();

    if ($username === null || $password === "") {
        app.dialog.alert("All fields are mandatory!", null);
        return;
    }

    //localStorage.login = 1;
    app.dialog.preloader('Loading...');

    var loginApi = $mainUrl + 'login.php';
    app.request.post(loginApi, {username: $username, password: $password, appid: '123'}, function (response, status, xhr) {
        console.log("Response: ", response);
        app.dialog.close();
        if (response.status === "SUCCESS") {
            var userData = response.data;
            console.log("User data: ", userData.userid);
            /* login successful */
            localStorage.userId = userData.userid;
            localStorage.fullName = userData.names;
            localStorage.userPhone = userData.phone;
            localStorage.userEmail = userData.email;
            localStorage.userGroup = userData.group;
            localStorage.login = 1;
            app.dialog.alert("Login successful", function () {
                mainView.router.load({url: "./index.html", ignoreCache: true, reload: true});
            });
        } else {
            app.dialog.alert("Your username or password is incorrect. Try Again!", null);
        }
    }, function (xhr, status) {
        app.dialog.close();
        console.log("Error" + xhr);
        app.dialog.alert("Connection Error! Check your internet connection and try again.!", null);
    }, "json");

    //app.dialog.close();
    //mainView.router.load({url: "./index.html", ignoreCache: true, reload: true});
});

/* update profile name */
$$('#main-panel').on('panel:open', function () {
    if (localStorage.userFirstName) {
        $("[data-modal='panelUserFullName']").html(localStorage.userFirstName + " " + localStorage.userLastName);
    }
});

/* initialize framework7 */
app.init();
