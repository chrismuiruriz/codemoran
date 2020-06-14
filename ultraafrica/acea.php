<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $page = 'ACEA';
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
                    <div id="content_1">
                        <div class="col-lg-9 nutrition_right_sidebar float-md-right">
                            <div class="row nutrition_row">
                                <div class="col nutrition_img">
                                    <img class="img-fluid" src="http://codemoran.co.ke/ultraafrica/img/ACEA-Main-Page-Banner.jpg" alt=""> 
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
                                    <p>
                                        The 2018 ACEA™ programme is available internationally. Courses will be running in the United Kingdom, Germany, Spain, Canada, United States of America, Dubai, Singapore, Kuala Lumpur, Kenya, South Africa, West Africa, Egypt and Australia.
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
                                        <p><strong>Introductions</strong></p>
                                        <ul>
                                            <li>Personal introductions</li>
                                            <li>Course background</li>
                                            <li>The “Journey” </li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Fundamentals of Modern Corporate Behaviour</strong></p>
                                        <ul>
                                            <li>Exploring the characteristics of today's global business environment</li>
                                            <li>Understanding the role of the Executive Assistant in a modern world</li>
                                            <li>The role of the modern Executive Assistant</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Strategy</strong></p>
                                        <ul>
                                            <li>Strategy understanding</li>
                                            <li>Corporate vision and mission</li>
                                            <li>Delivering the strategy</li>
                                            <li>Goals vs objectives</li>
                                            <li>Principles of planning</li>
                                            <li>Project alignment with strategy and organizational goals</li>

                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Balanced Scorecards</strong></p>
                                        <ul>
                                            <li>Understanding and measuring corporate performance</li>
                                            <li>Drilling down to the Executive Assistant role</li>
                                            <li>Measuring success</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Business Ethics</strong></p>
                                        <ul>
                                            <li>Corporate social responsibility</li>
                                            <li>Business ethics</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Time Management</strong></p>
                                        <ul>
                                            <li>Prioritising</li>
                                            <li>Tactics</li>
                                            <li>Delegation</li>
                                            <li>Managing effective meetings</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Financial Awareness</strong></p>
                                        <ul>
                                            <li>Financial accounting vs management accounting</li>
                                            <li>Understanding the 4 key financial statements</li>
                                            <li>Principles of budgeting</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>People Management & Leadership</strong></p>
                                        <ul>
                                            <li>Understanding leadership</li>
                                            <li>Identify your leadership profile and explore how you can use this knowledge
                                                to create your own future</li>
                                            <li>Assess your leadership competencies and learn how you can develop your strengths</li>
                                            <li>Identify those additional skills and tools that can make you a better leader</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="course-overview-divs">
                                        <p><strong>Motivation</strong></p>
                                        <ul>
                                            <li>Motivation theory</li>
                                            <li>Motivation through Rewards</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Fundamentals of Project Management</strong></p>
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
                                        <p><strong>Effective Communication & Conflict Management</strong></p>
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
                                            <li>Stakeholder management</li>
                                            <li>Risk management</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Problem Solving & Multitasking</strong></p>
                                        <ul>
                                            <li>Differentiate and define various types of problems</li>
                                            <li>Root cause analysis</li>
                                            <li>Evaluate solutions and apply creative thinking techniques to problem solving</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Presentation Skills</strong></p>
                                        <ul>
                                            <li>Understanding fear</li>
                                            <li>Planning presentations</li>
                                            <li>Overcoming nervousness</li>
                                            <li>Presentation preparation</li>

                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Emotional Intelligence (EI)</strong></p>
                                        <ul>
                                            <li>Emotional quotient (EQ) vs intelligence (IQ)</li>
                                            <li>Emotional intelligence framework</li>
                                            <li>Using Emotional intelligence</li>
                                            <li>Personality and behaviours (DISC)</li>
                                            <li>Know your inter-personal style and how your behaviour impacts others</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>ACEA™ Examination *</strong></p>
                                        <p><em>* Only those who successfully complete the examination and participate effectively
                                                in the course case studies will receive the Advanced Certificate for the Executive Assistan: ACEA™</em></p>
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
                                        <li>Gain an accredited Certificate approved by a UK regulated body –the Advanced Certificate for the Executive Assistant: ACEA™</li>
                                        <li>Get 3 Months FREE membership of the Institute of Administrative Management <a href="www.instam.org"
                                                                                                                          target="_blank">www.instam.org</a></li>
                                        <li>Be awarded 30 CPD Credits from the CPD Standards Office <a href="www.instam.org"
                                                                                                       target="_blank">www.cpdstandards.com</a></li>
                                        <li>Existing members will be awarded 30 CPD Credits from the Institute of Administrative Management <a href="www.instam.org"
                                                                                                                                               target="_blank">www.instam.org</a></li>
                                        <li>Gain a broader understanding of business, increase your business acumen & bring new ideas / skills to your organisation</li>
                                        <li>Give your Executive greater confidence to delegate more important and critical tasks to you.</li>
                                        <li>Be able to manage projects more efficiently and assist your Executive in their role as Project Sponsor</li>
                                        <li>Develop skills to increase your productivity through enhanced Time Management and Delegation Skills</li>
                                        <li>Gain respect from senior Executives and the Board</li>
                                        <li>Join & share experiences with EAs from other sectors and nationalities</li>
                                        <li>Stand out with a globally recognised accredited certification</li>
                                        <li>Enhance the recognition of the role & its responsibilities</li>
                                        <li>Show what you are capable of</li>
                                        <li>Rejuvenate your passion for your career, take the next step up & progress career</li>
                                        <li>Learn from world renowned trainers & accomplished business leaders</li>
                                        <li>Use ACEA™ on your business card and on your resume</li>
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
                                        <li>Executive Assistants</li>
                                        <li>Management Assistants</li>
                                        <li>Chiefs of Staff</li>
                                        <li>Office Managers</li>
                                        <li>Senior Assistants</li>
                                        <li>Executive Personal Assistants</li>
                                        <li>Executive Secretaries</li>
                                        <li>Personal Assistants</li>
                                        <li>Personal Secretaries</li>
                                        <li>Administration Managers</li>
                                        <li>Management Secretaries</li>
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
                                        <h6>MEET YOUR TRAINING COURSE DIRECTOR: Richard Arnott BA FInstAM FITOL<br><br></h6>
                                        <img src="img/arnott.jpg" class="pull-left img-responsive">
                                        <p>
                                            Richard is the Director of BMTG (UK) Ltd and is the author and lead presenter of the ACEA™ programme
                                            which is delivered globally and receives critical acclaim from all delegates.
                                        </p>
                                        <p>
                                            In his career Richard was  an accomplished Programme Director and Big 4 Management Consultant with over 25 years global experience
                                            specialising in project/programme management, strategic business transformation and change management within the
                                            Financial Services, Utilities, Logistics and Infrastructure sectors.
                                        </p>
                                        <p>
                                            Richard sits on the Editorial Board of Executive Secretary Magazine, is a Fellow of the Institute of Administrative Management
                                            <a href="http://www.instam.org/" target="_blank">(IAM)</a> and a Fellow of the Institute of  Training and Occupational Learning
                                            <a href="https://www.itol.org" target="_blank">(ITOL)</a>
                                        </p>
                                    </div>
                                    <hr/>
                                    <div class="col-md-12">
                                        <h6>MEET YOUR TRAINING COURSE DIRECTOR: Ian Shipley FITOL<br><br></h6>
                                        <img src="img/shipley.jpg" class="pull-left img-responsive">
                                        <p>
                                            Ian is a highly accomplished, passionate, visionary, and results driven Executive who has spent more than 20 years
                                            at a senior level within the service sectors in UK FTSE 100 and FTSE 250 companies.
                                        </p>
                                        <p>
                                            Ian has been responsible for delivering major turn-around and business transformation through creating
                                            a culture where people feel comfortable to make decisions, take ownership and make it happen.
                                        </p>
                                        <p>
                                            The common factor throughout Ian’s career has been a passion around service excellence and delivering results through highly motivated teams.
                                        </p>
                                        <p>
                                            Ian is a fellow of the Institute of Training and Occupational Learning <a href="https://www.itol.org" target="_blank">(ITOL)</a>
                                        </p>
                                    </div>
                                    <hr/>
                                    <div class="col-md-12">
                                        <h6>MEET YOUR TRAINING COURSE DIRECTOR: Jeff Lockhart MBA, DMS, FRSA, FCICM, FCMI, FITOL <br><br></h6>
                                        <img src="img/JeffLockhart.png" class="pull-left img-responsive">
                                        <p>
                                            Jeff Lockhart is an international training consultant, specialising in Finance, Business Administration and Management Development.
                                        </p>
                                        <p>
                                            Jeff is a highly experienced Financial Manager and Management Consultant, with extensive knowledge of finance and business management
                                            within a multi-disciplined and multi-cultural environment. He has held several senior level positions for industry-leading international
                                            businesses and, since 2001, has operated as a consultant to businesses in the UK, Azerbaijan, Russia, Bulgaria, Kuwait, Oman, Kingdom of
                                            Saudi Arabia, United Arab Emirates, Qatar, Malaysia, China, USA, and New Zealand.
                                        </p>
                                        <p>Jeff studied at Sheffield Business School in the United Kingdom obtaining a Post Graduate Certificate in Management (PgC)
                                            in 1992, a Diploma in Management Studies (DMS)
                                            in 1995 and a Masters Degree in Business Administration (MBA) in 1996.
                                        </p>
                                        <p>Jeff is a Fellow of the Royal Society for the Arts, Manufactures and Commerce (FRSA), the
                                            Chartered Institute of Credit Management (FCICM), the Chartered Management Institute (FCMI), and the
                                            Institute of Training and Occupational Learning (FITOL). Mr Lockhart is also a PRINCE2 certified Project Manager.
                                        </p>
                                    </div>
                                    <hr/>
                                    <div class="col-md-12">
                                        <h6>MEET YOUR TRAINING COURSE DIRECTOR: John Bullock<br><br></h6>
                                        <img src="img/JohnBullock.png" class="pull-left img-responsive">
                                        <p>
                                            John is a driven, enthusiastic and dynamic individual that started his successful career within both the Leisure and Retail sectors.
                                        </p>
                                        <p>After 12 years in an operational role John became an international business consultant and for the
                                            last eleven years has worked with a diverse mix of organisations ranging from large blue chip companies through to the public sector,
                                            dealing with large programmes through to 1:1 Executive Coaching.
                                        </p>
                                        <p>He specialises in award winning pragmatic leadership, business improvement and change programmes. This draws upon his senior operational
                                            / commercial expertise within industry.
                                        </p>
                                        <p>John works at a senior level across all sectors and has a proven record in enabling organisations to move forward in a results focused way,
                                            engaging their employees to deliver the return on investment and culture required.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="content_6">
                        <div class="col-lg-9 nutrition_right_sidebar float-md-right">
                            <div class="row nutrition_row">
                                <div class="col benefit_nutritions_content">
                                    <h3>Frequently Asked Questions</h3>
                                    <div class="panel-group" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                        What differentiates ACEA™ from other administrative professional courses?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <p>ACEA™ is an Executive Led Business focussed programme and is only ever delivered by Executives or ex-Executives</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                        Why was ACEA™ developed?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>
                                                        The Executive Support profession is on a journey. From the traditional "Secretary" the role is
                                                        evolving into that of Executive Business Partner. In order to survive in the profession Executive
                                                        Assistants need to learn more business focused skills.
                                                    </p>
                                                    <p>
                                                        The BMTG leadership team recognised this evolving pattern and realised that those in the profession
                                                        required something that would give them the knowledge, skills, tools and techniques to undertake
                                                        these new and challenging roles.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                        What are the entry requirements?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>
                                                        As ACEA™ is an advanced level course we look for a combination of skills and experience. Entry
                                                        to ACEA™ can be granted if you fulfil one of the following criteria:
                                                    </p>
                                                    <div class="col benefit_nutritions_content">
                                                        <ul class="benefit_list">
                                                            <li>University degree or equivalent</li>
                                                            <li>3 years’ experience in role or similar role</li>
                                                            <li>Fellow or similar level of a recognised local PA/EA Association</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                                        Does ACEA™ qualify for CPD credits?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFour" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>
                                                        Yes ACEA™ is independently accredited by the CPD Standards office and offers 30 CPD Credits.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                                        Is the ACEA™ certificate valid for life?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFive" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>
                                                        YES, Unlike most, if not all, other Certified/Chartered courses the ACEA™ certificate and post nominal
                                                        is yours for life.  
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                                                        Do I need to maintain "Membership" of pay Annual Fees to use ACEA™?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseSix" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>
                                                        No, Again unlike most, if not all, similar Certified or Chartered courses ACEA™ does not require
                                                        you to maintain "membership" or pay annual fees for the privilege of using you well earned
                                                        post nominal for interviews or on business cards etc.  
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                                                        Do I need to maintain a level of CPD credits to keep ACEA™ post nominal?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseSeven" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>
                                                        NO  
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
                                                        Is ACEA™ recognised?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseEight" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>
                                                        ACEA™ has been attended by delegates from hundreds of companies across the globe who selected
                                                        ACEA™ due to its uniqueness, reputation and course content. 
                                                    </p>
                                                    <p>
                                                        As well as being independently Certified by Qualifi, a recognised UK awarding body, ACEA™ is
                                                        also accredited by the CPD Standards Office and fully endorsed by Executive Secretary Magazine,
                                                        the Association of Office Professionals of South Africa (OPSA) and the prestigious Institute
                                                        of Administrative Managers (IAM)
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">
                                                        Does ACEA™ have any testimonials?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseNine" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>
                                                        YES, ACEA™ uses www.findcourses.co.uk to collect testimonials and is the highest scoring course amongst
                                                        all Administrative Professional Courses in terms of Volume of Courses and Delegate Score. Details can be found <a href="http://www.findcourses.co.uk/review/widget/list?domain=findcourses.co.uk&instituteId=20475&educationId=328314"
                                                                                                                                                                          class="bold" target="_blank">here</a>  
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">
                                                        Can ACEA™ be Run In-House for my Company?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTen" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>
                                                        YES, Please Contact us further details 
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">
                                                        Can I sit the BMTG examination and get the accreditation without attending an official BMTG course?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseEleven" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>
                                                        NO  
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve">
                                                        What is the format of the BMTG examination?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwelve" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>
                                                        The "Open Book" examination consists of 50 questions which are a combination of written answers,
                                                        multiple choice and true/false answers. Most delegates take up to 2 hours to complete the examination as it is a strong test of delegates'
                                                        knowledge. 
                                                    </p>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen">
                                                        Is additional research required to successfully complete ACEA™ course or is everything I need
                                                        to know contained in the course materials?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThirteen" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>
                                                        Any additional research is always useful for a delegate, however the examination is based on
                                                        the course materials alone, and no additional research is required to sit the examination.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen">
                                                        Can I do the ACEA™ course and not sit the examination?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFourteen" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>
                                                        Yes of course. After participating in the course, it is your choice whether to take the examination
                                                        or not, but without passing the examination, you would not be eligible to use the ACEA™ designation
                                                        on your business card or resume and would not be Certified.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen">
                                                        How long after the examination will I know my results?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFifteen" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>
                                                        The examination results are generally published within one week of sitting the examination.
                                                        Certificates can take up to 30 days.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSixteen">
                                                        What is the percentage of delegates who fail the BMTG examination?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseSixteen" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>
                                                        Generally, delegates are failed for the following reasons as: 
                                                    </p>
                                                    <div class="col benefit_nutritions_content">
                                                        <ul class="benefit_list">
                                                            <li>Failure to achieve the minimum Assessment score</li>
                                                            <li>Failure to fully attend all sessions,</li>
                                                            <li>persistent lateness, non attendance or non participation.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeventeen">
                                                        If I fail the examination, what happens next?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseSeventeen" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p >In the event of an Assessment fail, there is an appeals process which can involve resitting the
                                                        examination under classroom conditions or writing an essay on learning outcomes and application
                                                        thereof.
                                                    </p>
                                                    <p>Delegates who fail the Assessment may also re-attend the course at a discount of 50% of the price
                                                        originally paid.
                                                    </p>
                                                    <p>There is no appeal process for delegates who failed due to non attendance, persistent lateness
                                                        or non-participation unless due to certified sickness or illness
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseEighteen">
                                                        What should I look for in Certification?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseEighteen" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>There are a multitude of bodies offering credentials for the Administrative profession.</p>
                                                    <p>Our view is that any credentials must be totally independent of the training body and/or association
                                                        offering the training otherwise there is conflict of interest. Check who is actually "certifying"
                                                        and are they regulated in any way.
                                                    </p>
                                                    <p>In addition our suggestion is to:</p>
                                                    <div class="col benefit_nutritions_content">
                                                        <ul class="benefit_list">
                                                            <li>Look at course testimonials and only select those course with high scores</li>
                                                            <li>Establish which firms/organisations have sent delegates previously</li>
                                                            <li>Avoid diploma mills. Having a “qualification” from a diploma mill will damage your reputation
                                                                and job prospects.</li>
                                                            <li>Ensure that anything that claims to be a “Degree”, “Diploma”, or “Chartered” is offered by a bona fide Educational Institution
                                                                and that the course is of sufficient length to justify the award.
                                                                For example, you simply cannot gain a Degree, a Diploma or Chartered Status by doing a 5 day course. It takes years of study</li>
                                                            <li>Use Google to look out for scams. Unfortunately there are many out there</li>
                                                            <li>Finally, ensure that the certificate is not simply being offered by the course provider with
                                                                no independent accreditation body. Again, sadly, there are many training organisations
                                                                that simply self-certify. Their credentials are worthless</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseNineteen">
                                                        Is ACEA™ Available On-Line?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseNineteen" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>
                                                        NO
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwenty">
                                                        Are there any bursaries available for ACEA™?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwenty" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>
                                                        NO
                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
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
                            <li class="FAQs"><a id="#FAQs" title="content_7">FAQs</a></li>
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