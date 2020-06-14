<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $page = 'Course';
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
                background: url("./img/executiveTransparencyCourse.png") no-repeat scroll center center;
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
                margin-top: 20px;
            }
            @media only screen and (max-width: 600px) {
                .register-course form{
                    width:100%;
                }
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
            <h4>ADVANCED CERTIFICATE FOR THE EXECUTIVE ASSISTANT (ACEA™)</h4>
            <a href="index.php">Home <span>>  Courses  > ACEA</span></a>
        </div>
        <!--================End Banner Area =================-->  

        <!--================Nutrition Plan Area =================--> 
        <section class="nutrition_plan_area">
            <div class="container">
                <div class="row nutrition_plan_inner nutrition2">
                    <div class="col-lg-9 nutrition_right_sidebar float-md-right">
                        <div class="row nutrition_row">
                            <div class="col nutrition_img">
                                <img class="img-fluid" src="img/ACEA-Main-Page-Banner.jpg" alt=""> 
                            </div> 
                            <div class="col-12 program_details">
                                <h2>Course Details</h2>

                                <p>The Advanced Certificate for the Executive Assistant: ACEA™ (formerly known as the Advanced Certificate for the Executive Personal Assistant (ACEPA™) is a world-leading intensive and interactive 5-day executive level training programme, that equips current and aspiring Executive Assistants with the skills and knowledge they need to become true “Business Partners”.</p>
                                <p>
                                    The role of the Executive Assistant is on a journey and the responsibilities of this highly demanding and visible role continue to grow exponentially. To succeed in their role in modern times it is now imperative that Executive Assistants have a deep understating of ‘the business’ and their Executives’ role & responsibilities. Organisations are looking for Assistants that possess ‘Executive Level’ business acumen and skills now more than ever. Uniquely delivered from an Executive led perspective the ACEA™ programme focuses on delivering a fundamental conceptual understanding of business and organisations as well as practical skills
                                </p>
                            </div> 
                            <div class="col-12 benefit_nutritions_content">
                                <h3>The course focuses on:</h3>
                            </div>
                            <div class="col benefit_nutritions_content">

                                <ul class="benefit_list">
                                    <li>Strategic Thinking</li>
                                    <li>Corporate Visions & Missions</li>
                                    <li>Understanding the linkages between Strategy, Projects & Operations</li>
                                    <li>Governing & Managing Projects</li>
                                    <li>Communication Skills</li>
                                    <li>Emotional Intelligence</li>
                                    <li>Leadership skills including Influencing, Negotiation and Conflict Management</li>
                                </ul>
                            </div> 
                            <div class="col benefit_nutritions_content">
                                <ul class="benefit_list">
                                    <li>Change Management and Problem Solving</li>
                                    <li>Risk Management and Corporate Governance</li>
                                    <li>Ethics & Corporate Social Responsibility</li>
                                    <li>Understanding the role of Financial and Management Accounting</li>
                                    <li>Developing Productivity and Time Management techniques</li>
                                    <li>and much more</li>
                                </ul>
                            </div>
                            <div class="col-12 course-highlight">
                                <p>
                                    Over 1,000 Executive Assistants have now participated in this globally recognised and ground-breaking ACEA™ programme which is delivered in both Public and In-House/On-Site formats as requested.
                                </p>
                            </div>

                            <div class="col-12 register-course">
                                <form>
                                    <div class="contact-row">
                                        <div class="form-group">
                                            <input type="text" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="contact-row">
                                        <div class="form-group">
                                            <input type="text" placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Company">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button id="register-button">
                                            REGISTER COURSE
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <div class="col-12 course-highlight">
                                <a href="javascript:void(0)" id="download-bronchure">DOWNLOAD BROCHURE AND ARTICLES</a>
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-3 nutrition_left_sidebar float-md-right">
                        <ul class="plan_menu">
                            <li><a href="javascript:void(0)" class="active">Overview</a></li>
                            <li><a href="javascript:void(0)">Benefits of attending</a></li>
                            <li><a href="javascript:void(0)" >Who should attend</a></li>
                            <li><a href="javascript:void(0)">Your trainer</a></li>
                            <li><a href="javascript:void(0)">Accreditation benefits</a></li>
                            <li><a href="javascript:void(0)">Other ACEA cources & locations</a></li>
                        </ul>
                        <a href="javascript:void(0)"><img src="img/nutrition-left-sidebar.jpg" alt=""></a>
                        <a href="javascript:void(0)" class="contact_info p_t"><i class="fa fa-phone"></i>+254(0)20 2007770/2/3</a>
                        <a href="javascript:void(0)" class="contact_info"><i class="fa fa-paper-plane"></i>info@ultraafrica.com</a>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Nutrition Plan Area =================--> 


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