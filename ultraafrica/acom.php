<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $page = 'ACOM';
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
            <h4>Advanced Certificate in Operational Management (ACOM™)</h4>
            <a href="index.php">Home <span>>  Courses  > ACOM</span></a>
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
                                    <img class="img-fluid" src="img/acom-Main-Page-Banner.jpg" alt=""> 
                                </div> 
                                <div class="col-12 program_details">
                                    <h2>Course Details</h2>
                                    <p>
                                        Operational Management and Leadership is about getting the most out of your teams and delivering exceptional results. With the ever increasing budgetary demands on all organisations, be it the private or public sector, staff productivity and discretional effort is becoming ever more critical. This paradoxically at a time when customer and stakeholder expectations and demands are ever increasing as service excellence becomes the differentiator between the success of your business and its competitors. If in the public sector, why should those paying for yourservice similarly not expect this to be world class?
                                    </p>
                                    <p>Whilst organisations often say people are their greatest assets, unengaged,demotivated and underperforming teams can also be their greatest liability; remember YOU are only as good and successful as the team you have around you.  The true measure of the value of any business leader and manager is performance.</p>
                                    <p>This course will identify the key drivers in delivering exceptional operational performance by looking at vision and mission statements, strategic objectives cascading into team and individual objectives, and the identification, transparency and effectiveness of business measurements that in turn link to their performance and how they are appraised.</p>
                                    <p>In summary, it’s about delivering “Results through People” by ensuring complete engagement of your teams that in turn delivers and responds to the increasing demands of service excellence and your bottom line.</p>
                                    <p>On completion of this five day training course you will receive your certificate which has been fully accredited by Qualifi, an official UK Government recognised awarding body.</p>
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
                                        <p><strong>Aligning Operations to Organizational Strategy</strong></p>
                                        <ul>
                                            <li>Corporate Vision and Mission</li>
                                            <li>The setting of organizational / departmental objectives</li>
                                            <li>Cascading objectives</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Operational Performance Management</strong></p>
                                        <ul>
                                            <li>Measures of operational success</li>
                                            <li>Other drivers</li>
                                            <li>Linkage to objective setting</li>
                                            <li>The Circle of Success</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Budgeting</strong></p>
                                        <ul>
                                            <li>To budget or not?</li>
                                            <li>Principles of budgeting</li>
                                            <li>Explore direct and in-direct costs</li>
                                            <li>Use in driving forecasting</li>
                                            <li>Tracking variances</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Leadership</strong></p>
                                        <ul>
                                            <li>Leading v’s managing</li>
                                            <li>Identifying the difference and where you sit</li>
                                            <li>Understanding your personality traits and how this impacts on others</li>
                                            <li>Importance of a balanced team</li>
                                            <li>Operational structures and span of control</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Service Excellence</strong></p>
                                        <ul>
                                            <li>Quality Assurance &amp; Total Quality Management</li>
                                            <li>The 10 Commandments</li>
                                            <li>The importance of the Internal Customer</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Other Operational Drivers</strong></p>
                                        <ul>
                                            <li>Procurement, price and partnerships</li>
                                            <li>Understanding Trends</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Operational Measurements</strong></p>
                                        <ul>
                                            <li>Setting of KPI’s and their parameters</li>
                                            <li>Measuring &amp; using SLA’s</li>
                                            <li>Support of contracts &amp; use for bids</li>
                                            <li>Health &amp; Safety</li>
                                            <li>Internal Audit &amp; Compliance</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="course-overview-divs">
                                        <p><strong>Project Management</strong></p>
                                        <ul>
                                            <li>What is a project</li>
                                            <li>Project methodologies</li>
                                            <li>Work breakdown structures</li>
                                            <li>Project estimating</li>
                                            <li>Implementing effective project governance</li>
                                            <li>Controlling the project, including status meetings and issues management</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Continuous Improvement</strong></p>
                                        <ul>
                                            <li>Root Cause Analysis</li>
                                            <li>Driving Change</li>
                                            <li>Monitoring progress</li>
                                            <li>Positive movement of the "goal posts"</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Appraisals (Reviews)</strong></p>
                                        <ul>
                                            <li>Principle of reviews and clarity of measurements</li>
                                            <li>Personal Development Plans</li>
                                            <li>Succession Planning</li>
                                            <li>Performance related pay</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Motivation</strong></p>
                                        <ul>
                                            <li>The differing influencers of motivation</li>
                                            <li>Staff engagement and communication</li>
                                            <li>Engaging staff from recruitment onwards</li>
                                        </ul>

                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>The programme will include a series of group exercises, a personality profile and case studies with a high level of delegate interaction.</strong></p>
                                        <p><strong>1 Personality Profiling Test</strong></p>
                                        <p><strong>Plus up to 8 Detailed and Relevant Case studies</strong></p>
                                        <p><strong>ACOM&#8482; Examination *</strong></p>
                                        <p><em>* Only those who successfully complete the examination and participate effectively in the course case studies will receive the Advanced Certificate in Operational Management ACOM&#8482;</em></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="content_3">
                        <div class="col-lg-9 nutrition_right_sidebar float-md-right">
                            <div class="row nutrition_row">
                                <div class="col benefit_nutritions_content">
                                    <h2>Benefits, knowledge, skills gained by attending this ACOM&#8482; Course</h2>
                                    <ul class="benefit_list">
                                        <li>Gain an accredited Certificate  approved by a UK regulated body - Advanced Certificate in Operational Management (ACOM&#8482;)</li>
                                        <li>Use ACOM&#8482; on your business card and on your resume</li>
                                        <li>The ACOM&#8482; shows that you have completed International qualifications and that you have the skills and experience to manage effectively on a national, regional and global level.</li>
                                        <li>The ACOM&#8482; certificate will be received approximately one month following the close of the training course and will be issued jointly by Qualifi and BMTG.</li>
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
                                        <li>Non-operational Business Owners / Managing Directors</li>
                                        <li>Operations Directors</li>
                                        <li>Operations Managers</li>
                                        <li>Operations Leads / Supervisors</li>
                                        <li>Customer Service Heads</li>
                                        <li>Executive Directors</li>
                                        <li>General Managers</li>
                                        <li>Divisional Heads</li>
                                        <li>Administration Managers</li>
                                        <li>Project Leaders</li>
                                        <li>Team Leaders</li>
                                        <li>Supervisors</li>
                                        <li>Contractors</li>
                                    </ul>
                                    <p>PLUS anyone else responsible for the management and support of Operational teams</p>
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
                                        <h6>Meet your training course director: Ian Shipley<br><br></h6>
                                        <img src="img/shipley.jpg" class="pull-left img-responsive">
                                        <p>
                                            Ian is a highly accomplished, passionate, visionary, and results driven Operational management professional who has spent more than 20 years at a senior level within the service sectors within UK FTSE 100 and FTSE 250 companies.
                                        </p>
                                        <p>The common factor throughout Ian’s career has been a passion around service excellence and delivering results through highly motivated teams.</p>
                                        <p>Ian has been responsible for delivering major turn-around and business transformation through creating a culture where people feel comfortable to make decisions, take ownership and make it happen.</p>
                                        <p>Over the last several years Ian has shared his extensive ‘hands on’ business experience, passion and communication skills as an International Trainer to candidates from Europe, Africa, the Middle and Far East. Any spare time is spent in the Charity and voluntary sector in the UK</p>
                                        <p>Ian is the lead author of the ACOM&#8482; course which has received critical acclaim from all delegates</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--                    <div id="content_6">
                                            <div class="col-lg-9 nutrition_right_sidebar float-md-right">
                                                <div class="row nutrition_row">
                                                    <div class="col benefit_nutritions_content">
                                                        <h3>Frequently Asked Questions</h3>
                                                     
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->

                    <div class="col-lg-3 nutrition_left_sidebar float-md-right">
                        <ul class="plan_menu">
                            <li class="overview"><a title="content_1" class="active" id="#overview">Overview</a></li>
                            <li class="coursecontent"><a id="#coursecontent" title="content_2">Course Contents</a></li>
                            <li class="benefits"><a id="#benefits" title="content_3" >Benefits of Attending</a></li>
                            <li class="whoattends"><a id="#whoattends" title="content_4">Who Should Attend</a></li>
                            <li class="trainers"><a id="#trainers" title="content_5">Trainers</a></li>
                            <!--                            <li class="FAQs"><a id="#FAQs" title="content_7">FAQs</a></li>-->
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