<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $page = 'Executive Courses';
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

            .banner_area {
                background: url("http://codemoran.co.ke/ultraafrica/img/executiveTransparencyCourse.png") no-repeat scroll center center;
            }
            .course-highlight{
                padding-top:20px !important;
            }
            .plan_menu li a.active{
                background-color: #333399 !important;
                border-color: #4242b19c !important;
            }
            .plan_menu li a:hover{
                background-color: #333399 !important;
                border-color: #4242b19c !important;
            }
            .banner_area a{
                color:#fff !important;
            }
            .banner_area h4{
                color:#fff !important;
            }
            #download-bronchure{
                background-color: #333399;
                color: #fff;
                padding: 13px;
            }
            .register-course{
                margin-top: 15px;
            }

            .contact-row{
                display: flex;
            }
            .contact-row .form-group{
                flex: 1;
                margin-right: 5px;
            }
            .contact-row .form-group input{
                width: 100%;
                border: none;
                outline: none;
                border: 1px solid grey;
                padding: 7px 5px;
            }
            .contact-row .form-group input :hover{
                border: none;
                outline: none;
            }
            #register-button{
                border: none;
                outline: none;
                background-color: #333399;
                color: #fff;
                padding: 5px;
            }
            .nutrition_plan_area .nutrition_plan_inner .nutrition_left_sidebar {
                margin-top: 0px;
            }
            #content_2{
                display: none;
            }
            #content_3{
                display: none;
            }
            #content_4{
                display: none;
            }
            #content_5{
                display:none;
            }
            #content_6{
                display:none;
            }
            #content_5 h2{
                padding-bottom: 15px;
            }
            #content_5 img{
                width:100px;
                height:117px;
            }
            .panel-heading .accordion-toggle:after {
                /* symbol for "opening" panels */
                font-family: 'Glyphicons Halflings';  /* essential for enabling glyphicon */
                content: "\e114";    /* adjust as needed, taken from bootstrap.css */
                float: right;        /* adjust as needed */
                color: grey;         /* adjust as needed */
            }
            .panel-heading .accordion-toggle.collapsed:after {
                /* symbol for "collapsed" panels */
                content: "\e080";    /* adjust as needed, taken from bootstrap.css */
            }
            #content_2 p{
                margin: 10px 0px;
            }
            #content_2 .col-md-6{
                padding: 0px 10px 0px 1px;
            }
            #content_3 h2{
                padding-bottom: 12px;
            }
            #course-content-heading{
                margin: 0px;
                text-align: center;
                padding: 10px 10px;
                border: 1px solid grey;
                border-radius: 3px;
            }
            #course-overview-divs{
                padding: 0px 10px 10px;
                border-radius: 5px;
                box-shadow: 2px 1px 5px grey;
            }
            .panel-default{
                box-shadow: 0px 0px 5px grey;
                padding: 10px;
                border-radius: 3px;
                margin-bottom: 10px;
            }
            .panel-default a{
                color:#000;
                font-size: 18px;
            }
            .plan_menu li{
                cursor: pointer;
            }
            @media only screen and (max-width: 600px) {
                .register-course form{
                    width:100%;
                }
            }
            .service_row .body_mind .media:hover, .service_row .body_mind .media:focus {
                background: none !important;
            }
            .service_row .body_mind .media {
                cursor: pointer;
                text-align: center;    
                border: 3px solid #000;
                border-radius: 25px;
            }
            .banner_area h2 {
                font: 600 44px/1 "Poppins", sans-serif;
            }
            .service_row .body_mind .media:before {
                border-radius: 22px;
                background: rgba(40, 89, 3, 0.04);
            }
            .service_row .body_mind .media:hover .media-body h4, .service_row .body_mind .media:hover .media-body p, .service_row .body_mind .media:hover .media-body a, .service_row .body_mind .media:focus .media-body h4, .service_row .body_mind .media:focus .media-body p, .service_row .body_mind .media:focus .media-body a {
                color: #322F91;
                line-height: 1.4;
            }
            .service_row .body_mind .media .media-body h4 {
                color: #322F91;
                line-height: 1.4;
            }
            .service_row .body_mind .media {
                min-height:  157px;
                display: flex;
                justify-content: center;
                align-items: center;
                align-content: center;
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
            <h2>Executive Assistant Courses</h2>
            <a href="#">Home > <span>Executive Assistant Courses</span></a>
        </div>
        <!--================End Banner Area =================-->  

        <!--================Our Services Area =================--> 
        <section class="services_area">
            <div class="container">
                <div class="row service_row">
                    <div class="col-lg-4 col-md-6 body_mind">
                        <a href="acea.php">
                            <div class="media"> 
                                <div class="media-body">
                                    <h4>Advanced Certificate for the Executive Assistant: ACEA< (5 days)</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 body_mind">
                        <a href="fcepa.php">
                            <div class="media"> 
                                <div class="media-body">
                                    <h4>Foundation Certificate for the Executive Personal Assistant (FCEPA™) (3 days)</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 body_mind">
                        <a href="pmepa.php">
                            <div class="media"> 
                                <div class="media-body">
                                    <h4>MasterClass in Project Management for Executive Personal Assistants (3 days)</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Our Services Area =================-->


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