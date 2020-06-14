<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $page = 'ACPC';
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
            <h4>Advanced Certificate in Strategic Procurement (ACSP™)</h4>
            <a href="index.php">Home <span>>  Courses  > ACSP</span></a>
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
                                    <img class="img-fluid" src="img/acpc-Main-Page-Banner.jpg" alt=""> 
                                </div> 
                                <div class="col-12 program_details">
                                    <h2>Course Overview</h2>
                                    <p>
                                        Effective internal and subsequently external audit compliance is a key fundamental in demonstrating effective governance within an organisation. Whilst most internal departments have a specific process work flow, procurement is often extremely difficult to effectively audit as their activities stem from a specific procurement strategy choice.
                                    </p>
                                    <p>This advanced course is designed for both Auditors and Procurement practitioners and leads delegates through a systematic approach to enable validation of compliance from the procurement function, whose activities impact upon every line of annual financial statements.</p>
                                    <p>Uniquely, for procurement team delegates, emphasis is placed upon ensuring that procurement practitioners build an effective yet transparent procurement strategy underpinned by both policy, documentary evidence and audit trails, whilst for auditors the course provides insight into not only how to effectively audit the procurement function, but through knowledge enhancement increases audit sensitivity to potential red flag issues within the procurement function.</p>
                                    <p>ACPC&#8482; provides the understanding, framework, tools, and principles that allow organisations to build, embed and validate audit compliance and risk management within the Procurement function.</p>
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
                                        <p><strong>DAY 1</strong></p>
                                        <p><strong>Understand the Role of Procurement</strong></p>
                                        <ul>
                                            <li>Key drivers of Procurement strategy</li>
                                            <li>The Strategic Procurement Roadmap</li>
                                            <li>Roles and Responsibilities of the Function</li>
                                            <li>Developing evidence based procurement</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Understand the role of Audit</strong></p>
                                        <ul>
                                            <li>Key drivers of audit strategy</li>
                                            <li>The Strategic audit roadmap</li>
                                            <li>Conducting effective audits</li>
                                            <li>Balancing operational and compliance needs</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>DAY 2</strong></p>
                                        <p><strong>Understand Procurement Risk:</strong></p>
                                        <ul>
                                            <li>The concept of risk</li>
                                            <li>Financial risk</li>
                                            <li>VAT introduction – overview and risk management</li>
                                            <li>Operational risk</li>
                                            <li>Market risk</li>
                                            <li>Importing risk via the supply base</li>
                                            <li>Root cause risk analysis</li>
                                            <li>Managing & mitigating procurement risk</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>DAY 3</strong></p>
                                        <p><strong>Developing the audit approach - Pre-tender:</strong></p>
                                        <ul>
                                            <li>Examining the supplier selection process</li>
                                            <li>Ensuring VAT compliance – both pre-tender and for new suppliers</li>
                                            <li>Validating existing supplier listings</li>
                                            <li>Supplier bid concentration</li>
                                            <li>Examining tender pre-qualification focus (PQQ)</li>
                                            <li>Examining the tender(ITT)</li>
                                            <li>Spend analysis techniques</li>
                                            <li>Supplier capability validation systems</li>
                                            <li>Potential red flag issues</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="course-overview-divs">
                                        <p><strong>DAY 4</strong></p>
                                        <p><strong>Developing the audit approach - Supplier selection:</strong></p>
                                        <ul>
                                            <li>Validating supplier capability</li>
                                            <li>Validating supplier financial stability post VAT implementation</li>
                                            <li>Supplier audit visit management</li>
                                            <li>Examining supplier scoring systems</li>
                                            <li>Managing conflicts of interest</li>
                                            <li>Ensuring objectivity within the tender process</li>
                                            <li>Potential red flag issues</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>Developing the audit approach - post tender- contracts and supplier management:</strong></p>
                                        <ul>
                                            <li>Key legal principles - avoiding contractual risk</li>
                                            <li>Examining supplier performance management systems</li>
                                            <li>Objective supplier relationship management</li>
                                            <li>Developing supplier interaction policies</li>
                                            <li>Managing Cross cultural supplier management audit issues</li>
                                            <li>Potential red flag issues</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p>&nbsp;<br /><strong>DAY 5</strong></p>
                                        <p><strong>Bringing everything together:</strong></p>
                                        <ul>
                                            <li>The psychology of audit</li>
                                            <li>Effective audit report writing & process management</li>
                                            <li>Effective engagement of audit committee</li>
                                            <li>Developing continuous improvement initiatives together</li>
                                        </ul>
                                    </div>
                                    <div id="course-overview-divs">
                                        <p><strong>The programme will include a series of group exercises, and case studies with a high level of delegate interaction</strong></p>
                                        <p><strong>ACPC&#8482; Examination *</strong></p>
                                        <p><em>* Only those who successfully complete the examination and participate effectively in the course case studies will receive the Advanced Certificate in Procurement Compliance (ACPC&#8482;)</em></p>
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
                                    <p><strong>By attending this interactive ACPCTM course you will be equipped with the skills to:</strong></p>
                                    <ul class="benefit_list">
                                        <li>Understand the Role of the Procurement Function within the Organisation.</li>
                                        <li>Assess the compliance level of your Procurement Function.</li>
                                        <li>Effectively Plan and Manage audit compliance.</li>
                                        <li>Effectively manage VAT impacts & ensure compliance within the supply base.</li>
                                        <li>Conduct objective and meaningful audits to underpin governance.</li>
                                        <li>Demonstrate robust governance and transparency to external agencies & customers.</li>
                                        <li>Effectively manage non compliant procurement risk & red flag scenarios</li>
                                        <li>Support your organisation’s Corporate Governance initiatives and policy.</li>
                                        <li>Gain an accredited Certificate approved by a UK regulated body – The Advanced Certificate in Procurement Compliance (ACPC&#8482;)</li>
                                        <li>Use ACPC&#8482; on your business card and on your resume</li>
                                        <li>The ACPC&#8482; shows that you have completed International qualifications and that you have the skills &amp; experience to manage &amp; audit procurement effectively</li>
                                        <li>The ACPC&#8482; certificate will be received approximately one month following the close of the training course and will be issued jointly by Qualifi and BMTG</li>
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
                                        <ul>
                                            <li>Procurement Directors</li>
                                            <li>Business Owners / Managing Directors</li>
                                            <li>Supplier Managers</li>
                                            <li>Supply Chain Consultants</li>
                                            <li>Buyers / Senior Buyers</li>
                                            <li>Operations Directors, Operations Managers</li>
                                            <li>Finance Managers</li>
                                            <li>Heads of Governance & Compliance</li>
                                            <li>Executive Directors</li>
                                            <li>General Managers</li>
                                            <li>Divisional Heads</li>
                                            <li>Project Directors</li>
                                            <li>Audit Team Leaders</li>
                                            <li>Audit Staff</li>
                                            <li>Project Leaders</li>
                                            <li>Team Leaders</li>
                                            <li>Supervisors</li>
                                            <li>VAT Compliance Officers</li>
                                        </ul>
                                        <p>PLUS anyone who is responsible for / involved in procurement, supply chain management, bid management or procurement auditing/compliance</p>
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
                                        <h6>Meet your training course director: John Atkinson FITOL<br><br></h6>
                                        <img src="img/JohnAtkinson.png" class="pull-left img-responsive">
                                        <p>John’s corporate experience spans some 30 years including Head of Group & Global Procurement for Focus Wickes plc. where he was responsible for the full creation and implementation of global sourcing initiatives, supplier/vendor management and commercial contract negotiation. John has also held senior roles within Barclays Bank corporate and led a wide and diverse range of teams, both locally and globally. </p>
                                        <p>John is a Fellow of the Institute of Training and Occupational Learning and also a Certified Instructor in delivering emotional intelligence training. John has wide international experience, including: Kuwait, Iraq, Qatar, KDR, China, Germany, France, Sweden, Malaysia & West Africa.  Organisations that John has worked with include: KNPC, Petronas, Shell, Total, Lafarge, Nigeria LNG, The United Nations, Zain Corporation, Maybank & Sinopec.</p>
                                        <p>As a consultant and trainer for the last 11 years John is passionate about delivery, and utilises his career expertise to ensure that clients receive leading edge training results, enabling delegates to understand not only the subject matter, but also the application and usage to add value both to their role and within the wider organisational environment</p>
                                    </div>

                                    <div class="col-md-12">
                                        <h6>Meet your training course director: Karl Brookes, B.Sc, M.Sc FITOL<br><br></h6>
                                        <img src="img/brookes.jpg" class="pull-left img-responsive">
                                        <p>Karl is a Fellow of the Institute of Training and Occupational Learning (ITOL) and has more than 20 years of experience in developing and delivering procurement projects and strategies that change behaviours and achieve corporate objectives.</p>
                                        <p>Graduating in Politics and Sociology from the University of Salford, Karl joined the Civil Service, before working in Sales and Marketing for prestigious clients such as the UK Civil Service, Barclays, DHL and British Telecom. Returning to education, he gained a Masters from Manchester Metropolitan University, and was elected to help run the Students’ Union. </p>
                                        <p>In addition to being a Guest Lecturer at the prestigious Business School of University of Central Lancashire, Karl has written articles on various topics including, financial and energy consumer rights, developing property and even how to avoid a Repetitive Strain Injury.</p>
                                        <p>A skilled leader and deliverer of transformational strategies, Karl is adept at working effectively with employees at all levels in different sizes of organisations. As a trusted ‘safe pair of hands’ in a crisis, Karl has built up many years experience, coaching and delivering training in these and other key corporate areas such as:</p>
                                        <div class="col benefit_nutritions_content">
                                            <ul class="benefit_list">
                                                <li>Understanding Procurement Processes and the Sales Cycle</li>
                                                <li>Writing Winning Bids</li>
                                                <li>Fleet Management, Resource Management and Utility Management </li>
                                                <li>Communications, Crisis & Change Delivery </li>
                                                <li>Emotional Intelligence, ISO Implementation, Media Relations, Marketing</li>
                                                <li>⦁	Private Finance Initiative (PPP), Project Management Techniques e.g. Prince 2 and; Management Skills Development</li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <h6>Meet your training course director: Steve Mallaband BSc (Hons) CEng MIET FITOL<br><br></h6>
                                        <img src="img/mallaband.jpg" class="pull-left img-responsive">
                                        <p>
                                            Steve is a highly experienced procurement professional and a Fellow of the Institute of Training and Occupational Learning (ITOL). Steve has over 20 years experience holding senior positions with several large organisations both in the UK and abroad. During his career he has bought a large variety of goods and services in an international context, and has been actively involved in both writing tenders and preparing bids. For the last 7 years he has provided training and consultancy to public and private sector clients around the globe on a wide range of topics. He is a knowledgeable, interesting and entertaining presenter who is able to draw on his wealth of practical experience to excellent effect.
                                        </p>
                                    </div>

                                    <div class="col-md-12">
                                        <h6>Meet your training course director: Ros Howard BSc (Hons) PGCE FITOL<br><br></h6>
                                        <img src="img/howard.jpg" class="pull-left img-responsive">
                                        <p>
                                            Ros is a professional business trainer and a Fellow of the Institute of Training and Occupational Learning (ITOL). Ros has a rich and varied career in industry and education.  She believes that excellence in communication and other “soft skills” is vital for business success, and has a real passion for instilling learning in others.  For the last 10 years she has provided training, coaching and consultancy to a variety of clients in many different countries and from many different organisations. She is a dynamic and inspiring presenter who, having taught English as a Foreign Language, is particularly sensitive to the needs of the non-native English speakers.
                                        </p>
                                        <p>Steve and Ros deliver together to deliver the Advanced Certificate in Bid and Tender Management (ACBTMtm), offering you the best of both worlds – a very experienced procurement practitioner backed by an expert in communication and soft skills.</p>
                                    </div>

                                    <div class="col-md-12">
                                        <h6>Meet your training course director: Paul Jackson, BSC MICM MCIPS<br><br></h6>
                                        <img src="img/PaulJackson.png" class="pull-left img-responsive">
                                        <p>
                                            Paul Jackson is an accomplished Supply Chain professional and training consultant with significant expertise in the area of procurement, Supply Chain Management, inventory and warehousing management, sustainability and supplier development. Paul has consistently delivered commercial benefits and training across a range of private and public sector markets and has positively influenced large blue chip organisations such as BAE Systems, ChevronTexaco, and Teliasonera as well as Public Sector and numerous SME clients.   His ability to deliver projects on time and budget, run operational facilities and train teams makes him an ideal project trainer and mentor.
                                        </p>
                                        <p>Paul is an enthusiastic team player and is equally comfortable working within a team as he is leading from the front or coaching from the classroom.  He has exceptional change management skills and has the experience and personality to lead large teams successfully through periods of transition.    He has run a number of businesses over the years, managed office and warehousing operations, run production plants, and operated datacentres, as well as managing contracts to support the facilities and operational management activities associated within the organisation.   He is also an experienced overseas operator having undertaken projects in many diverse locations including countries such as Kazakhstan, Nigeria, Angola, Indonesia, China, Japan and Saudi Arabia.</p>
                                        <p>Paul is an articulate communicator with well developed project delivery, contract negotiation and presentation skills.   He manages projects with an enviable ease and engages people with a coaching philosophy which focuses on motivation, mentoring and development.   He also runs and manages end-to-end Supply Chain audits, feasibility studies and compliance assessments to help drive effective change and identify strategic opportunities and risk.  Furthermore, Paul was for a number of years a successful business manager with a warehousing and logistics organisation and approached all aspects of his work with a heavy focus on the improvement of profit through cost reduction, development of markets in locations such as India and China, and through the improvement of skills in the workforce.</p>
                                        <p>Paul is a MCIPS, BTEC and IACCM trainer in Procurement, Supply Chain Management, Negotiation and Inventory Management and lead author of “the Sustainable Business” published in early 2013, lead-author of “101 Tools of Procurement and Supply Chain Management” and co-author of Practical Procurement second edition.   He has also published articles in a number of different journals including Supply Management, IPSCM. Intend and Marine Trader.   He is a Prince 2 qualified project manager, a Six Sigma Green belt, and has UK National Security Clearance.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--                    <div id="content_6" class="download-image">
                                            <div class="col-lg-9 nutrition_right_sidebar float-md-right">
                                                <div class="row nutrition_row">
                                                    <div class="col benefit_nutritions_content">
                                                        <h2>Download our Brochure</h2>
                                                        <a href="http://localhost/ultraAfricaUpdated/docs/ACSP_Web_Brochure.pdf" target="_blank">
                                                            <img src="http://localhost/ultraAfricaUpdated/img/downloadpdf.png" class="img-responsive">
                                                        </a>
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
                            <!--                            <li class="FAQs"><a id="#FAQs" title="content_7">Download Brochure</a></li>-->
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