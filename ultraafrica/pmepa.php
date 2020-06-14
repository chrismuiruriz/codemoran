<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $page = 'PMEPA';
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
            .download-image img{
                width: 50%;
            }
            .banner_area h4{
                text-transform: uppercase;
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
            <h4>MasterClass in Project Management for Executive Personal Assistants (3 days)</h4>
            <a href="index.php">Home <span>>  Courses  > MCPMEPA</span></a>
        </div>
        <!--================End Banner Area =================-->  

        <!--================Nutrition Plan Area =================--> 
        <section class="nutrition_plan_area">
            <div class="container">
                <div class="row nutrition_plan_inner nutrition2">
                    <div id="content_1">
                        <div class="col-lg-9 nutrition_right_sidebar float-md-right">
                            <div class="row nutrition_row">
                                <div class="col nutrition_img">
                                    <img class="img-fluid" src="img/pmepa-Main-Page-Banner.jpg" alt=""> 
                                </div> 
                                <div class="col-12 program_details">
                                    <h2>Course Overview</h2>
                                    <p>The modern Executive Personal Assistant undertakes a multitude of complex tasks from organizing conferences and exhibitions to working closely with key business projects whilst operating as the eyes and ears of their boss in monitoring and controlling critical business projects.</p>
                                    <p>Executive Personal Assistants also find themselves having to consolidate project status reports across multiple unrelated projects into a concise framework for Executive reporting and decision making.</p>
                                    <p>This MasterClass has been designed by an ex-Big 4 management consultant with over 30 years of international project management experience across multiple industries and deals with many of these issues and provides a framework to increase personal abilities and management skills in any project environment as well as providing Executive Personal Assistants with the knowledge and tool kits to enable them to manage their own projects as well as contributing to other internal projects within their organization.</p>
                                    <p><strong>Project Management for Executive Personal Assistants</strong> will teach delegates techniques for project planning, project governance and control;identifying, dealing and communicating with Stakeholders; techniques for identifying and mitigating project risks and issues and managing project quality. TheMasterClass will also guide delegates through the complexities of Personality Profiling and how this can be used toenhance awareness to communicate and manage more effectively.</p>
                                    <p>This MasterClassis a highly interactive learning experience, taught by seasoned Project Management professionals and the Class learning materials are supported by topical and very challenging Exercises which are carried out in Teams.</p>
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
                    </div>

                    <div id="content_2">
                        <div class="col-lg-9 nutrition_right_sidebar float-md-right">
                            <div class="row nutrition_row">
                                <div class="col-md-12" id="course-content-heading">
                                    <h2>Course Contents</h2>
                                </div>
                                <div class="col-md-6">
                                    <div id="course-overview-divs">
                                        <p><strong>Section 1 – Introductions</strong></p>
                                        <ul>
                                            <li>Introductions</li>
                                            <li>Expectations</li>
                                            <li>Ground rules</li>
                                            <li>Management Styles</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Section 2 – Project Management Basics</strong></p>
                                        <ul>
                                            <li>What is a project</li>
                                            <li>Why do projects go wrong</li>
                                            <li>Overview of Key Project Management Skills</li>
                                            <li>Setting Project Goals and Objectives</li>
                                            <li>Project Charters</li>
                                            <li>Project Initiation Documents</li>
                                            <li>Project Life Cycles</li>
                                            <li>Balancing Scope ,Time, Cost and Quality</li>
                                            <li>Understanding key project roles</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Section 3 – Planning and Estimating A Project</strong></p>
                                        <ul>
                                            <li>Principles of Planning</li>
                                            <li>Work Breakdown Structures</li>
                                            <li>Estimating and Scheduling</li>
                                            <li>Gantt Charts and Critical Paths</li>
                                            <li>Steps to Milestones</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Section 4 – Communication and Stakeholder Management</strong></p>
                                        <ul>
                                            <li>Stakeholder Identification</li>
                                            <li>Stakeholder categorisation</li>
                                            <li>Developing a Communication Plan</li>
                                            <li>Negotiation and influencing Techniques</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Section 5 – Project Risk Management</strong></p>
                                        <ul>
                                            <li>Identifying Project Risks</li>
                                            <li>Categorising Project Risks</li>
                                            <li>Probability and impact Assessment</li>
                                            <li>Risk Response Development</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="course-overview-divs">
                                        <p><strong>Section 6 – Project Quality Management</strong></p>
                                        <ul>
                                            <li>Defining Quality Standards</li>
                                            <li>Quality Acceptance Criteria</li>
                                            <li>The Quality Plan</li>
                                        </ul>  
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Section 7 – Project Governance</strong></p>
                                        <ul>
                                            <li>Project Steering Groups</li>
                                            <li>Monitoring and Control</li>
                                            <li>Change Management</li>
                                            <li>Project Status Reporting </li>
                                            <li>One pager Executive Summaries</li>
                                            <li>Project Status Reporting Templates</li>
                                            <li>Consolidating project status reports</li>
                                            <li>Project Governance Templates</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Section 7 – Running Effective Project Meetings</strong></p>
                                        <ul>
                                            <li>Meeting Terms of Reference</li>
                                            <li>Ensuring Attendance</li>
                                            <li>Effective Action Logs</li>
                                            <li>Meeting Audit Scoring</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Section 8 – Project Assurance Checklist</strong></p>
                                        <ul>
                                            <li>Purpose of the Project Assurance checklist</li>
                                            <li>How the Project Assurance Checklist works</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Supplementsand Toolkits</strong></p>
                                        <ul>
                                            <li>Personality Profiling </li>
                                            <li>Effective meeting templates and tools</li>
                                            <li>Project Assurance Audit Checklists</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>The MasterClass will include a series of group exercises and a personality profile with a high level of delegate interaction</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="content_3">
                        <div class="col-lg-9 nutrition_right_sidebar float-md-right">
                            <div class="row nutrition_row">
                                <div class="col benefit_nutritions_content">
                                    <h2>Benefits of Attending</h2>
                                    <ul class="benefit_list">
                                        <li>Appreciate the importance and benefits of accurate project management</li>
                                        <li>Master the art of efficient project delivery</li>
                                        <li>Understand project governance and control</li>
                                        <li>Use project management as a key business driver</li>
                                        <li>Understand major international project management standards</li>
                                        <li>Successfully determine the appropriate management solutions for your projects</li>
                                        <li>Develop a comprehensive tool-kit for successful project management that you can use immediately </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div id="content_4">
                        <div class="col-lg-9 nutrition_right_sidebar float-md-right">
                            <div class="row nutrition_row">
                                <div class="col benefit_nutritions_content">
                                    <h3>Who Should Attend?</h3>
                                    <ul class="benefit_list">
                                        <li>Executive Personal Assistants</li>
                                        <li>Executive Secretaries</li>
                                        <li>Executive Assistants</li>
                                        <li>Personal Assistants</li>
                                        <li>Personal Secretaries</li>
                                        <li>Office Managers</li>
                                        <li>Administration Managers</li>
                                        <li>Management Secretaries</li>
                                        <li>Senior Assistants</li>
                                        <li>Executive Personal Secretaries</li>
                                    </ul>
                                    <p>PLUS anyone else responsible for the support of the senior management and executives</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="content_5">
                        <div class="col-lg-9 nutrition_right_sidebar float-md-right">
                            <div class="row nutrition_row">
                                <div class="col benefit_nutritions_content">
                                    <div class="col-md-12">
                                        <h2>Trainers</h2>
                                    </div>
                                    <div class="col-md-12">
                                        <h6>Meet your training course director: Richard Arnott<br><br></h6>
                                        <img src="img/arnott.jpg" class="pull-left img-responsive">
                                        <p>
                                            Richard is an accomplished Programme Director and Big 4 Management Consultant with over 25 years global project and programme management experience within the Financial Services, Utilities, Logistics and Infrastructure sectors.
                                        </p>
                                        <p>Richard is a member of the Project Management Institute (PMI) and specialises in project management, business transformation and change management.</p>
                                        <p>Richard is co-Author and founder of many of the Business Management Training Group’s courses and MasterClasses including this PM4EA and also the internationally renowned Advanced Certificate for the Executive (Personal) Assistant ACEA&#8482;/ ACEPA&#8482; course which has received critical acclaim from all delegates.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="content_6" class="download-image">
                        <div class="col-lg-9 nutrition_right_sidebar float-md-right">
                            <div class="row nutrition_row">
                                <div class="col benefit_nutritions_content">
                                    <h2>Download our Brochure</h2>
                                    <a href="docs/BMTG_MasterClass_in_Project_Management_for_Executive_Personal_Assistants.pdf" target="_blank">
                                        <img src=img/downloadpdf.png" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 nutrition_left_sidebar float-md-right">
                        <ul class="plan_menu">
                            <li class="overview"><a title="content_1" class="active" id="#overview">Overview</a></li>
                            <li class="coursecontent"><a id="#coursecontent" title="content_2">Course Contents</a></li>
                            <li class="benefits"><a id="#benefits" title="content_3" >Benefits of Attending</a></li>
                            <li class="whoattends"><a id="#whoattends" title="content_4">Who Should Attend</a></li>
                            <li class="trainers"><a id="#trainers" title="content_5">Trainers</a></li>
                            <li class="FAQs"><a id="#FAQs" title="content_7">Download Brochure</a></li>
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
        include_once './includes/courses-js.php';
        ?>
        
    </body>
</html>