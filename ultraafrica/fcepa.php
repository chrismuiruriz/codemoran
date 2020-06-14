<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $page = 'FCEPA';
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
            <h4>Foundation Certificate for the Executive Personal Assistant (FCEPA™)</h4>
            <a href="index.php">Home <span>>  Courses  > AFCEPA</span></a>
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
                                    <img class="img-fluid" src="img/fcepa-Main-Page-Banner.jpg" alt=""> 
                                </div> 
                                <div class="col-12 program_details">
                                    <h2>Course Overview</h2>
                                    <p>
                                        The role of the Executive Assistant is growing exponentially. From humble beginning the Executive Assistant is normally university qualified and required to perform demanding roles on behalf of their boss such as preparing executive reports, make presentations, attending and even making contributions during executive board meetings.
                                    </p>
                                    <p>
                                        Executive Assistants now have a highly visible and demanding role in blue chip corporations and government organisations.
                                    </p>
                                    <p>
                                        This demanding role makes it imperative that the Executive Assistant has sufficient knowledge and understanding of the key fundamentals of Strategic Thinking, Project Management, Corporate Finance and Reporting, Leadership, HR, Procurement and Information Technology.
                                    </p>
                                    <p>
                                        Being well trained Executive Assistant is therefore a source of security, prosperity and power!
                                    </p>
                                    <p>
                                        The Foundation Certificate for the Executive Assistant starts to build this knowledge by introducing the key business skills required to be an effective PA.
                                    </p>
                                    <p>
                                        On completion of this three day training course you will receive your certificate which has been fully accredited by Qualifi, an official UK Government recognised awarding body.
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
                    </div>

                    <div id="content_2">
                        <div class="col-lg-9 nutrition_right_sidebar float-md-right">
                            <div class="row nutrition_row">
                                <div class="col-md-12" id="course-content-heading">
                                    <h2>Course Contents</h2>
                                </div>
                                <div class="col-md-6">
                                    <div id="course-overview-divs">
                                        <p><strong>Aligning Operations to Strategy</strong></p>
                                        <ul>
                                            <li>Corporate Vision and Mission</li>
                                            <li>How operations delivers the strategy</li>
                                            <li>Cascading objectives</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Exploring Linkages Between Strategy, Projects and Operations</strong></p>
                                        <ul>
                                            <li>Strategy clarification</li>
                                            <li>Identifying structures, governance, systems and people capabilities</li>
                                            <li>Project alignment with strategy and organizational goals</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Basics of Project Management</strong></p>
                                        <ul>
                                            <li>What is a project?</li>
                                            <li>Planning tools, Project risks</li>
                                            <li>Monitoring and Controlling</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>People Management &amp; Leadership</strong></p>
                                        <ul>
                                            <li>Identify your leadership profile and explore how you can use this knowledge to create your own future</li>
                                            <li>Assess your leadership competencies and learn how you can develop your strengths</li>
                                            <li>Identify those additional skills and tools that can make you a better leader</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Effective Communication</strong></p>
                                        <ul>
                                            <li>Develop your ability to influence and communicate with others</li>
                                            <li>Understanding communication</li>
                                            <li>Diversity, assumptions and stereotypes</li>
                                            <li>Listening skills</li>
                                            <li>Verbal and non-verbal communication</li>
                                        </ul>

                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Other Essential Management Skills</strong></p>
                                        <ul>
                                            <li>Stakeholder Management</li>
                                            <li>Risk Management</li>
                                            <li>Managing Quality</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="course-overview-divs">
                                        <p><strong>Presentation &amp; Report Writing Skills</strong></p>
                                        <ul>
                                            <li>Effective Meetings</li>
                                            <li>Planning Presentations</li>
                                            <li>Overcoming Nervousness</li>
                                            <li>Report Writing</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Problem Solving</strong></p>
                                        <ul>
                                            <li>Differentiate and define various types of problems</li>
                                            <li>Determine the appropriate problem solving technique</li>
                                            <li>Root Cause Analysis</li>
                                            <li>Evaluate solutions and apply creative thinking techniques to problem solving</li>
                                            <li>Determine the decision objective</li>
                                            <li>Develop selection criteria &amp; evaluate alternatives</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Business Etiquette, Protocol & Diplomacy</strong></p>
                                        <ul>
                                            <li>Cultural Awareness</li>
                                            <li>Understanding cross-cultural differences and awareness</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Using technology in the 21st century</strong></p>
                                        <ul>
                                            <li>Telephone courtesies</li>
                                            <li>Cell phone etiquette</li>
                                            <li>Email protocols</li>
                                            <li>Use of social media</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>FCEPA&#8482; Examination *</strong></p>
                                        <p><strong>1 Personality Profiling Test</strong></p>
                                        <p><em>* Only those who successfully complete the examination and participate effectively in the course case studies will receive the Foundation Certificate for the Executive Personal Assistant FCEPA&#8482;</em></p>
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
                                        <li>Gain an accredited Certificate  approved by a UK regulated body –the Foundation Certificatefor the Executive Personal Assistant (FCEPA&#8482;)</li>
                                        <li>Use FCEPA&#8482; on your business card and on your resume</li>
                                        <li>The FCEPA&#8482;  shows that you have completed International qualifications and that you have the skills and experience to manage effectively on a national, regional and global level.</li>
                                        <li>The FCEPA&#8482; certificate will be received approximately one month following the close of the training course and will be issued jointly by Qualifi and BMTG.</li>
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
                                        <p>Richard specialises in project management, business transformation and change management and is co-Author and founder of many of the Business Management Training Group’s certified courses. Richard is responsible for the management and delivery of all BMTG non Project Management training.</p>
                                        <p>Richard is the lead author of the FCEPA&#8482; course which has received critical acclaim from all delegates.</p>
                                    </div>
                                    <hr/>
                                    <div class="col-md-12">
                                        <h6>Meet your training course director: Stephen Wylie <br><br></h6>
                                        <img src="img/wylie.jpg" class="pull-left img-responsive">
                                        <p>
                                            Stephen is based in Asia and has over 25 years experience in Programme and Project Management, Business Analysis, Strategic Planning, E-Commerce Strategy and Applications, IT, Bancassurance, BPR and CRM and is an internationally experienced public speaker and presenter.
                                        </p>
                                        <p>Stephen has worked in senior management positions with a number of companies, and as a former 'Big 4' Management Consultant, has advised many of the biggest international organisations at Executive level.</p>
                                        <p>Stephen is a Director of several companies in Asia.</p>
                                        <p>Stephen specialises in Project Management training and Insurance training and is the author and co-author of many of the BMTG Ltd accredited programs.</p>
                                        <p>Stephen is a founding Director of Business Management Training Group Limited and sits on the Business Management Training Council.</p>
                                    </div>
                                    <hr/>
                                    <div class="col-md-12">
                                        <h6>Meet your training course director: Ian Shiple<br><br></h6>
                                        <img src="img/shipley.jpg" class="pull-left img-responsive">
                                        <p>
                                            Ian is a highly accomplished, passionate, visionary, and results driven Executive who has spent more than 20 years at a senior level within the service sectors in UK FTSE 100 and FTSE 250 companies.
                                        </p>
                                        <p>The common factor throughout Ian’s career has been a passion around service excellence and delivering results through highly motivated teams.</p>
                                        <p>Ian has been responsible for delivering major turn-around and business transformation through creating a culture where people feel comfortable to make decisions, take ownership and make it happen.</p>
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
                                    <a href="docs/BMTG_FCEPA_Web_Brochure.pdf" target="_blank">
                                        <img src="img/downloadpdf.png" class="img-responsive">
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