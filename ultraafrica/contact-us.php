<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $page = 'Contact Us';
        include_once './includes/headerLinks.php';
        ?> 

        <style>

            .main_header_3 .header_menu .navbar.navbar-expand-lg #navbar_supported ul li a:hover, .main_header_3 .header_menu .navbar.navbar-expand-lg #navbar_supported ul li a:focus, .main_header_3 .header_menu .navbar.navbar-expand-lg #navbar_supported ul li a.active {
                color: #333399;
            }
            .navbar.navbar-expand-lg .navbar-nav li a:before {
                content: "";
                position: absolute;
                bottom: 25px;
                left: 0;
                background: #333399;
                height: 1px;
                width: 0px;
            }
            .main_header_area .header_top .header_top_inner a {
                color: #ffdc02;
                padding-right: 30px;
                font: 400 15px/1 "Poppins", sans-serif;
            }
            .main_header_3 .header_menu .navbar.navbar-expand-lg #navbar_supported ul li.dropdown .dropdown-menu a:hover, .main_header_3 .header_menu .navbar.navbar-expand-lg #navbar_supported ul li.dropdown .dropdown-menu a:focus {
                color: #ffdc02;
            }
            .main_slider_area ul li .slider_text_box .first_text span {
                color: #fbdc00;
            }
            .main_slider_area ul li .slider_text_box .slider_button .slider_btn {
                font: 600 18px/52px "Poppins", sans-serif !important;
                color: #fff;
                background: #272a89;
                text-align: center !important;
                border-radius: 30px;
                width: 225px;
                display: block;
                -webkit-transition: all 300ms linear 0s !important;
                -o-transition: all 300ms linear 0s !important;
                transition: all 300ms linear 0s !important;
            }
            .get_btn {
                background: #272a89;
            }
            .about_content a:hover, .about_content a:focus {
                background: #ffdc09;
                color: #fff;
            }
            .what_wedo_area .what_wedo_inner .what_wedo_carousel .items a {
                background: #272a89;
            }
            .chooseus_area .chooseus_row .choose_img h2 {
                color: #fff;
                background: #ffd800;
            }
            .contact_area_2 {
                background: #141540;
            }
            .contact_area .request_area .request .request_content {
                position: absolute;
                bottom: 85px;
                left: 0;
                background: #ffdc02;
                padding: 15px 45px 22px;
            }
            .main_header_area .header_top .header_top_inner a i {
                color: #ffdc09;
                font-size: 15px;
                padding-right: 10px;
            }
            body > section.what_wedo_area > div > div.row.what_wedo_inner.m-0 > div > div.owl-stage-outer > div > div > div > a:nth-child(2) {
                position: absolute;
                background: rgba(39, 42, 137, 0.86);
                left: 0;
                right: 0;
                margin: auto;
                top: 0;
                bottom: 0;
                display: flex;
                align-items: center;
                align-content: center;
                justify-content: space-around;
                text-align: center;
                font: 600 21px/30px "Poppins", sans-serif;
                border: 2px solid #fbdd00;
            }
            body > section.what_wedo_area > div > div.row.what_wedo_inner.m-0 > div > div.owl-stage-outer > div > div > div > a:nth-child(2):hover {
                color: #ffdc02;
            }
            .what_wedo_area .what_wedo_inner .what_wedo_carousel .items .img img {
                height: 200px;
            }
            .navbar.navbar-expand-lg .navbar-nav li a {
                padding: 0;
                color: #fff;
                margin-right: 30px;
                margin-left: 5px;
            }
            .chooseus_area .chooseus_row .choose_content .media .media-body a {
                font: 500 17px/1 "Poppins", sans-serif;
                color: #9ac339;
            }
            .dropdown-menu{
                min-width: 300px !important;
            }
        </style>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <!--================Header Area =================-->
        <?php
        include_once './includes/header.php';
        ?>
        <!--================Header Area =================-->


        <!--================Banner Area =================-->  
        <div class="banner_area">
            <h2>Contact us</h2>
            <a href="#">Home <span>> Contact us</span></a>
        </div>
        <!--================End Banner Area =================-->  

        <!--================Contact us Area =================--> 
        <section class="contact_us_area">
            <div class="container">
                <div class="row contact_us_row">
                    <div class="col-lg-7 getin_touch">
                        <div class="left_tittle">
                            <h2>Get in touch with us</h2>
                        </div> 
                        <form class="row from_main" action="php/contact.php" method="post" id="phpcontactform" novalidate="novalidate"> 
                            <div class="form-group col-lg-6">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Username">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email address*">
                            </div>
                            <div class="form-group col-12">   
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject*"> 
                            </div>
                            <div class="form-group col-12">
                                <textarea class="form-control" id="message" name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group m-0 col-12">
                                <button class="find_btn btn" id="js-contact-btn" type="button">Send message</button> 
                                <div id="js-contact-result" data-success-msg="Form submitted successfully." data-error-msg="Messages Successfully"></div>
                            </div>
                        </form> 
                    </div> 
                    <div class="col-lg-5 map_area">  
                        <div id="mapBox" class="mapBox" 
                             data-lat="-1.264966" 
                             data-lon="36.808102" 
                             data-zoom="18" 
                             data-marker="./images/map-marker.png" 
                             data-info="Design Center, Tausi Road off Muthithi Road,Nairobi, Kenya"
                             data-mlat="-1.264966"
                             data-mlon="36.808102">
                        </div>
                    </div>
                </div>
                <div class="row meet_area">
                    <div class="col-lg-4 col-md-6 meet">
                        <i class="flaticon-maps-and-flags"></i>
                        <h3>Meet us</h3>
                        <h6>Design Center, Tausi Road off muthithi Road, <br>Nairobi, Kenya</h6>
                    </div>
                    <div class="col-lg-4 col-md-6 meet">
                        <i class="flaticon-smartphone-call"></i>
                        <h3>Call us</h3>
                        <h6>Mobile : +254 722650541 <br>Phone : +254(0)20 2007770/2/3</h6>
                    </div>
                    <div class="col-lg-4 col-md-6 meet">
                        <i class="flaticon-note"></i>
                        <h3>Call us</h3>
                        <h6>info@ultraafrica.com <br>training@ultraafrica.com</h6>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Contact us Area =================-->  



        <!--================Footer Area =================--> 
        <?php
        include_once './includes/footer.php';
        ?>
        <!--================End Footer Area =================--> 

        <!--================Search Box Area =================-->
        <div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
            <div class="search_box_inner">
                <h3>Search</h3>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
                    </span>
                </div>
            </div>
        </div>
        <!--================End Search Box Area =================-->

        <!--================End Footer Area =================-->
        
           <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        <?php
        include_once './includes/scripts.php';
        ?>
    </body>
</html>