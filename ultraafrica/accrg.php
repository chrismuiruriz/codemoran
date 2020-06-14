<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $page = 'ACCRG';
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
            <h4>Advanced Certificate in Corporate Risk Management &amp; Governance (ACCRG™)</h4>
            <a href="index.php">Home <span>>  Courses  > ACCRG</span></a>
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
                                    <img class="img-fluid" src="img/accrg-Main-Page-Banner.jpg" alt=""> 
                                </div> 
                                <div class="col-12 program_details">
                                    <h2>Course Details</h2>
                                    <p>
                                        This comprehensive 5 day course is certified by Qualifi and delivered from a Unique ‘Executive Led’ perspective. It covers the linked disciplines of Risk Management and Corporate Governance and is designed to give managers the tools and confidence to enable their business to deliver sustainable profits in a controlled environment.
                                    </p>
                                    <p>All managers have a responsibility to properly manage the risks in their business and this course will show them how to identify, evaluate, manage and report on these risks. It will also show them how corporate governance works and what is expected of them in the corporate governance process.</p>
                                    <p>The course is not only for Risk professionals but for everyone with a managerial responsibility.</p>
                                    <p>The course will be led by an experienced Executive who will cover the principles of risk management and corporate governance and show how these principles can be applied in practice.</p>
                                    <p>The course will cover:</p>
                                    <div class="col benefit_nutritions_content">
                                        <ul class="benefit_list">
                                            <li>Risks and issues</li>
                                            <li>Commercial importance of good risk management</li>
                                            <li>Identification of risks</li>
                                            <li>Evaluation</li>
                                            <li>Changing nature of risks over time</li>
                                            <li>Short and long term risks</li>
                                            <li>Management of risks including accepted and external risks</li>
                                            <li>Risk reporting</li>
                                            <li>Escalation</li>
                                            <li>Operational Risk</li>
                                            <li>Financial Risk</li>
                                            <li>Legal/Regulatory Risk</li>
                                            <li>Strategic Risk</li>
                                            <li>Reputational Risk</li>
                                            <li>Creating a Risk Framework</li>
                                            <li>Governance committees</li>
                                            <li>Composition of committees</li>
                                            <li>External oversight</li>
                                        </ul>
                                    </div>
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
                                        <p><strong>Overview of Risk</strong></p>
                                        <ul>
                                            <li>What is it? </li>
                                            <li>Distinction between risks and issues</li>
                                            <li>Commercial importance</li>
                                            <li>Culture </li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Risk Management</strong></p>
                                        <ul>
                                            <li>Identification</li>
                                            <li>Evaluation</li>
                                            <li>Management</li>
                                            <li>Reporting</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Types of Risks</strong></p>
                                        <ul>
                                            <li>Operational</li>
                                            <li>Financial</li>
                                            <li>Legal/Regulatory</li>
                                            <li>Strategic</li>
                                            <li>Reputational</li>
                                            <li>Project/transitional</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Identification</strong></p>
                                        <ul>
                                            <li>Identification techniques</li>
                                            <li>Importance of comprehensive approach</li>
                                            <li>Dynamic not static subject</li>
                                            <li>Horizon risks</li>
                                            <li>Crisis management</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Evaluation</strong></p>
                                        <ul>
                                            <li>Techniques</li>
                                            <li>Empirical and intuitive</li>
                                            <li>Probability and impact</li>
                                            <li>Dangers of false assurance</li>
                                            <li>True nature and longevity</li>
                                            <li>Value of simple questions</li>
                                            <li>Importance of challenging assumptions</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Management</strong></p>
                                        <ul>
                                            <li>Manageable risks</li>
                                            <li>Accepted risks</li>
                                            <li>External risks</li>
                                            <li>Limitations of rules based approach</li>
                                            <li>Industry best practice</li>
                                            <li>Delegating responsibility to line managers</li>
                                            <li>Legal position</li>
                                            <li>Light touch, structured or hybrid</li>
                                            <li>Three lines of defence model</li>
                                            <li>Committee structure</li>
                                            <li>Composition of committees – static, dynamic or a mixture</li>
                                            <li>Ensuring structure operates as intended</li>
                                            <li>Dealing with difficult members</li>
                                            <li>Audit (internal and external)</li>
                                            <li></li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Reporting</strong></p>
                                        <ul>
                                            <li>Importance of good reporting</li>
                                            <li>How to construct good reports</li>
                                            <li>Understand what needs to be reported</li>
                                            <li>Effectiveness of mitigation</li>
                                            <li>Overview of effectiveness</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="course-overview-divs">
                                        <p><strong>Operational Risk</strong></p>
                                        <ul>
                                            <li>Overview and scope</li>
                                            <li>Understanding of why management must be devolved</li>
                                            <li>How to help non-Risk managers</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Financial Risk</strong></p>
                                        <ul>
                                            <li>Understanding the importance and scope</li>
                                            <li>How to engage with experts</li>
                                            <li>How to understand reports</li>
                                            <li>Importance of basic questions and answers</li>
                                            <li>How to project trends</li>
                                            <li>Stress testing/reverse stress testing</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Legal/Regulatory Risk</strong></p>
                                        <ul>
                                            <li>Fundamentals of regulation</li>
                                            <li>Strict liability including personal liability</li>
                                            <li>Dealing with courts and regulators</li>
                                            <li>Cost effective approach to issues</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Strategic Risk</strong></p>
                                        <ul>
                                            <li>How to ensure that all the material risks are identified and understood</li>
                                            <li>How to manage difficult messages to Executives and Board</li>
                                            <li>Importance of reporting and recording</li>
                                            <li>External factors which can affect strategy and how to deal with them</li>
                                            <li>Importance of working through scenarios</li>
                                        </ul>
                                    </div>

                                    <div id="course-overview-divs">
                                        <p><strong>Reputational Risk</strong></p>
                                        <ul>
                                            <li>Understand the relative importance to different organisations</li>
                                            <li>Distinguish market and company risk</li>
                                            <li>Learn management techniques to manage this risk</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Corporate Governance</strong></p>
                                        <ul>
                                            <li>Meaning and importance</li>
                                            <li>Commercial importance</li>
                                            <li>Importance to Board, executives, shareholders, potential investors, regulators, politicians</li>
                                        </ul>
                                    </div>

                                    <div id="course-overview-divs">
                                        <p><strong>Designing a Risk Framework </strong></p>
                                        <ul>
                                            <li>Presentational techniques</li>
                                            <li>Escalation</li>
                                            <li>Whistleblowing</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Key Learnings</strong></p>
                                        <ul>
                                            <li>Culture</li>
                                            <li>Simplicity</li>
                                            <li>Proactivity</li>
                                            <li>Quality of Reporting</li>
                                            <li>Robust Oversight</li>
                                            <li>Continual Re-evaluation</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>ACCRG&#8482; Examination *</strong></p>
                                        <p><em>* Only those who successfully complete the examination and participate effectively in the course case studies will receive the Advanced Certificate in Corporate Risk &amp; Governance (ACCRG&#8482;)</em></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="content_3">
                        <div class="col-lg-9 nutrition_right_sidebar float-md-right">
                            <div class="row nutrition_row">
                                <div class="col benefit_nutritions_content">
                                    <h2>Benefits, knowledge, skills gained by attending this ACCRG™ Course</h2>
                                    <ul class="benefit_list">
                                        <li>Gain an accredited Certificate, approved by a UK regulated body – the Advanced Certificate in Corporate Risk Management and Governance (ACCRGM&#8482;)</li>
                                        <li>Use ACCRG&#8482; on your business card and on your resume</li>
                                        <li>Demonstrate that you have the skills required to manage risks and participate in the governance process</li>
                                        <li>On successfully completing the course participants will be able to: </li>
                                        <ul class="benefit_list">
                                            <li>Know what is expected of them in managing the risks they are responsible for</li>
                                            <li>Understand how to identify and evaluate these risks</li>
                                            <li>Know the types of risk and the challenges they present</li>
                                            <li>Be able to identify the barriers to effective risk management and understand how these can be overcome</li>
                                            <li>Have the confidence to report risks accurately and effectively</li>
                                            <li>Understand which risks can be accepted and which cannot</li>
                                            <li>Understand the principles of corporate governance and what it is seeking to achieve - Be able to set up an effective governance structure</li>
                                            <li>Know what governance committees are looking for and how to participate effectively in them</li>
                                        </ul>
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
                                        <li>Executives</li>
                                        <li>Risk professionals</li>
                                        <li>Company secretaries</li>
                                        <li>Operational managers</li>
                                        <li>Finance managers</li>
                                        <li>Corporate strategists</li>
                                        <li>Lawyers</li>
                                        <li>Project managers</li>
                                        <li>Business owners</li>
                                        <li>HR managers</li>
                                        <li>IT managers</li>
                                        <li>Sales managers</li>
                                        <li>Account managers</li>
                                        <li>Auditors</li>
                                        <li>Regulators</li>
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
                                        <h6>Meet your training course director: Gordon Graham<br><br></h6>
                                        <img src="img/graham.jpg" class="pull-left img-responsive">
                                        <p>
                                            Gordon is a UK lawyer with over 25 years experience of working with blue chip companies. He is also a Chartered Insurer and has an honours degree in financial services. He recently completed a psychology course with Oxford University.
                                        </p>
                                        <p>He has held senior roles in Risk, Sales, Outsourcing, Legal, Customer Services and Project Management. He has lived and worked in India and throughout his career has had business dealings in a range of countries throughout Europe and Asia.</p>
                                        <p>He currently splits his time between Scotland and Qatar, where he is a joint owner of a property and relocation company.</p>
                                        <p>He is passionate about risk management and corporate governance and their positive impact on successful companies. He believes that proper understanding of risk is key to making good business decisions and proper management of risk is essential to good operational performance.</p>
                                        <p>Throughout his career he has championed learning and personal development and has challenged individuals to fulfil their potential.</p>
                                        <p>He brings extensive experience of corporate risk management to the course and will expand on the key learning points with individual examples and case studies.</p>
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