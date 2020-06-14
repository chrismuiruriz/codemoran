<!DOCTYPE html>
<html lang="en">
    <head>
        
        <?php
        $page = 'About Us';
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
            <h2>About us</h2>
            <a href="#">Home <span>> About us</span></a>
        </div>
        <!--================End Banner Area =================-->  

        <!--================Best fitness  Area =================-->  
        <section class="best_fitness_area">
            <div class="container">
                <div class="row best_fitness_row">
                    <div class="col-lg-4">
                        <div class="fitness_img" style="height: auto;">
                            <img src="img/about-training.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8 fitness_content">
                        <div class="left_tittle p-0">
                            <h2>Ultra Africa Limited</h2>
                            <p>Ultra Africa Limited provides professionals with the business information and human expertise they need to continuously develop their skills in their respective professions.</p>
                            <p>We enable professionals in the financial and risk, tax and accounting, compliance, human resources, information and technology, security, intellectual property, science, marketing, procurement and supply, project management and soft skills to make the most of their careers by continuous development through certified trainings, conferences, summits and master-classes.</p>
                        </div>
                    </div>
                    <div class="col-md-6 misssion_content">
                        <div class="left_tittle">
                            <h2>Our misssion</h2>
                        </div>
                        <p>We creates success through strategic and intentional change. We help leaders identify, develop, and leverage the tools and talents they and their teams need to succeed.</p>
                        <p>We aim to be the most sought after and effective people and organizational development firm in Kenya by providing exceptional strategic, individualized, and growth-oriented coaching, training, and consulting services in an engaging and collaborative environment.</p>
                    </div>
                    <div class="col-md-6 misssion_img">
                        <img src="img/about-us-mission.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!--================End Best fitness  Area =================-->  


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
        <?php
        include_once './includes/scripts.php';
        ?>
    </body>
</html>