<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $page = 'Home';
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

        <!--================Slider Area =================-->
        <section class="main_slider_area">
            <div id="main_slider2" class="rev_slider" data-version="5.3.1.6">
                <ul>
                    <li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="images/homeSlider/slider-3.1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="./img/slider-3.1.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption tp-resizeme first_text" 
                                 id="slide-1586-layer-1" 
                                 data-x="['right','right','right','right','15','0']" data-hoffset="['80','80','0','0']" 
                                 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['320','320','320','320','340','300']" 
                                 data-fontsize="['55','55','55','55','40','35']"
                                 data-lineheight="['70','70','70','70','50','35']"
                                 data-width="['600','600','600','600','600','260']"
                                 data-height="none"
                                 data-whitespace="normal"
                                 data-type="text" 
                                 data-responsive_offset="on" 
                                 data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                 data-textAlign="['left','left','left','left','left','left']">A <span>leading training</span></div>

                            <div class="tp-caption tp-resizeme secand_text" 
                                 id="slide-1587-layer-2" 
                                 data-x="['right','right','right','right','15','0']" data-hoffset="['80','80','0','0']" 
                                 data-y="['bottom','bottom','bottom','bottom','bottom','bottom']" data-voffset="['255','255','255','255','270','250']" 
                                 data-fontsize="['55','55','45','55','40','32']"
                                 data-lineheight="['70','70','70','70','50','35']"
                                 data-width="['600','600','600','600','600','340']"
                                 data-height="none"
                                 data-whitespace="normal"
                                 data-type="text" 
                                 data-responsive_offset="on" 
                                 data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                 data-textAlign="['left','left','left','left','left','left']">provider in Africa</div>

                            <div class="tp-caption tp-resizeme third_text" 
                                 id="slide-1588-layer-3" 
                                 data-x="['right','right','right','right','15','0']" data-hoffset="['80','80','0','0']" 
                                 data-y="['bottom','bottom','bottom','bottom','bottom','bottom']" data-voffset="['185','185','185','185','185','150']"  
                                 data-fontsize="['20','20','20','20','20','16']"
                                 data-lineheight="['26','26','26','26']"
                                 data-width="['600','600','600','600','480','300']"
                                 data-height="none"
                                 data-whitespace="normal"
                                 data-type="text" 
                                 data-responsive_offset="on"
                                 data-transform_idle="o:1;"
                                 data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">Delivering quality and innovation to corporations to help them gain the competitive advantage.
                            </div>

                            <div class="tp-caption tp-resizeme slider_button" 
                                 id="slide-1589-layer-4" 
                                 data-x="['right','right','right','right','15','0']" data-hoffset="['80','80','0','0']" 
                                 data-y="['bottom','bottom','bottom','bottom','bottom','bottom']" data-voffset="['86','86','86','86','86','70']" 
                                 data-fontsize="['18','18','18','18']"
                                 data-lineheight="['52','52','52','52']"
                                 data-width="['600','600','600','600','550','300']" 
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text" 
                                 data-responsive_offset="on" 
                                 data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                                <a class="slider_btn" href="contact-us.php">Get appointment</a>
                            </div>
                        </div>
                    </li> 

                    <li data-index="rs-1588" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="images/homeSlider/slider-3.2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="./img/slider-3.2.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption tp-resizeme first_text" 
                                 id="slide-1590-layer-1" 
                                 data-x="['right','right','right','right','15','0']" data-hoffset="['0','0','0','0']" 
                                 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['320','320','320','320','340','300']" 
                                 data-fontsize="['55','55','55','55','40','35']"
                                 data-lineheight="['70','70','70','70','50','35']"
                                 data-width="['600','600','600','600','600','260']"
                                 data-height="none"
                                 data-whitespace="normal"
                                 data-type="text" 
                                 data-responsive_offset="on" 
                                 data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                 data-textAlign="['left','left','left','left','left','center']">A <span>Brand New</span></div>

                            <div class="tp-caption tp-resizeme secand_text" 
                                 id="slide-1591-layer-2" 
                                 data-x="['right','right','right','right','15','0']" data-hoffset="['0','0','0','0']" 
                                 data-y="['bottom','bottom','bottom','bottom','bottom']" data-voffset="['255','255','255','255','270','250']" 
                                 data-fontsize="['55','55','55','55','45','28']"
                                 data-lineheight="['70','70','70','70','60','40']"
                                 data-width="['600','600','600','600','500','300']"
                                 data-height="none"
                                 data-whitespace="normal"
                                 data-type="text" 
                                 data-responsive_offset="on" 
                                 data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                 data-textAlign="['left','left','left','left','left','center']">Training Experience</div>

                            <div class="tp-caption tp-resizeme third_text" 
                                 id="slide-1592-layer-3" 
                                 data-x="['right','right','right','right','15','0']" data-hoffset="['0','0','0','0']" 
                                 data-y="['bottom','bottom','bottom','bottom','bottom','bottom']" data-voffset="['185','185','185','185','185','150']"    
                                 data-fontsize="['20','20','20','20','20','16']"
                                 data-lineheight="['26','26','26','26']"
                                 data-width="['600','600','600','600','480','300']"
                                 data-height="none"
                                 data-whitespace="normal"
                                 data-type="text" 
                                 data-responsive_offset="on"
                                 data-transform_idle="o:1;"
                                 data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                 data-textAlign="['left','left','left','left','left','center']">Cutting edge development and networking platforms that accelerate individual and corporate performance.
                            </div>

                            <div class="tp-caption tp-resizeme slider_button" 
                                 id="slide-1593-layer-4" 
                                 data-x="['right','right','right','right','15','0']" data-hoffset="['0','0','0','0']" 
                                 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['86','86','86','86','86','70']"
                                 data-fontsize="['18','18','18','18']"
                                 data-lineheight="['52','52','52','52']"
                                 data-width="['600','600','600','600','550','300']" 
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text" 
                                 data-responsive_offset="on" 
                                 data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                 data-textAlign="['left','left','left','left','left''center']">
                                <a class="slider_btn" href="contact-us.php">Get appointment</a>
                            </div>
                        </div>
                    </li> 

                </ul>
            </div>
        </section>
        <!--================End Slider Area =================-->

        <!--================What We Do Area =================-->
        <section class="what_wedo_area">
            <div class="container">
                <div class="left_tittle">
                    <h2>What We Do</h2>
                    <p>We at Ultra Africa Limited, provide cutting edge development and networking platforms to accelerate individual and corporate performance for today's business leaders, leading the market in knowledge based conferences, training's and workshops.</p>
                </div>
                <div class="row what_wedo_inner m-0">
                    <div class="what_wedo_carousel owl-carousel">
                        
                       
                        <div class="items">
                            <a class="img" href="javascript:void(0)"><img src="img/bg.jpg" alt=""></a>
                            <a href="executive-assistant-courses.php">Executive <br/>Courses</a>
                        </div>
                        <div class="items">
                            <a class="img" href="http://localhost/ultraAfrica/executive-assistant-courses.php"><img src="/img/bg.jpg" alt=""></a>
                            <a href="risk-operational-management-courses.php">Management<br/>Courses</a>
                        </div>
                        <div class="items">
                            <a class="img" href="javascript:void(0)"><img src="img/bg.jpg" alt=""></a>
                            <a href="procurement-supply-chain-courses.php">Procurement<br/>Courses</a>
                        </div>
                        <div class="items">
                            <a class="img" href="javascript:void(0)"><img src="img/bg.jpg" alt=""></a>
                            <a href="javascript:void(0)">Public &amp; In-House Training</a>
                        </div>
                   
                    </div>
                </div>
            </div>
        </section>
        <!--================End What We Do =================-->

        <!--================About Us Area =================--> 
        <section class="about_us_area about_us_area_3">
            <div class="container">
                <div class="row aboutus_row">
                    <div class="about_content col-lg-6 col-md-12">
                        <h2>About Us</h2>
                        <p>Ultra Africa Limited provides professionals with the business information and human expertise they need to continuously develop their skills in their respective professions. We enable professionals in the financial and risk, tax and accounting, compliance, human resources, information and technology, security, intellectual property, science, marketing, procurement and supply, project management and soft skills to make the most of their careers by continuous development through certified trainings, conferences, summits and master-classes.</p>
                        <p>We creates success through strategic and intentional change. We help leaders identify, develop, and leverage the tools and talents they and their teams need to succeed.</p>
                        <a href="about-us.php" class="get_btn">Learn more about us</a>
                    </div>
                    <div class="col-lg-6 col-md-12 about_video"> 
                        <div class="video_inner" style="background-image: url('http://codemoran.co.ke/ultraafrica/img/about-video.jpg');">
                            <a class="popup-youtube" href="javascript:void(0)"><img class="img-fluid" src="images/play-icon.png" alt=""></a> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End About Us Area =================-->

        <!--================Why Choose Us Area =================--> 
        <section class="chooseus_area">
            <div class="container-fulid">
                <div class="row chooseus_row m-0">
                    <div class="col-md-5 choose_img" style="background-image:url('http://codemoran.co.ke/ultraafrica/img/choose_bg.jpg');"> 
                        <h2>Latest News &amp; Events</h2>
                    </div>
                    <div class="col-md-7 choose_content">
                        <div class="media">
                            <i class="flaticon-runner"></i>
                            <div class="media-body">
                                <a href="javascript:void(0)">Advanced Certificate For The Executive Personal Assistant. (Acepa™)</a>
                                <p>From 11th - 15th December 2017, Intercontinental Hotel</p>
                            </div>
                        </div>
                        <div class="media">
                            <i class="flaticon-handshake"></i>
                            <div class="media-body">
                                <a href="javascript:void(0)">Advanced Certificate in Procurement Compliance (ACPC™)</a>
                                <p>From 20th - 24th November 2017, Intercontinental Hotel</p>
                            </div>
                        </div>
                        <div class="media">
                            <i class="flaticon-nutrition"></i>
                            <div class="media-body">
                                <a href="javascript:void(0)">Advanced Certificate in Strategic Procurement (ACSP™)</a>
                                <p>From 8th - 11th December 2017, Serena Hotel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Why Choose Us Area =================-->  

        <!--================Our customers says Area =================--> 
        <section class="customers_says"style="display:none;">
            <div class="container">
                <div class="center_tittle">
                    <h2>What our customers says</h2>
                    <h6>Thousands of people get benefit</h6>
                </div>
                <div class="customers_says_row">
                    <div class="owl-carousel says_carousel">
                        <!-- Items -->
                        <div class="item">
                            <div class="media"> 
                                <a href="javascript:void(0)" class="client_img"><img src="images/client-1.jpg" alt="" class="rounded-circle"></a>
                                <div class="media-body">
                                    <a href="javascript:void(0)">Robert Joe</a>
                                    <h4>I lose 10 ponds in one week</h4>
                                    <P>Osed quia consequuntur magni dolores eos qui rati one voluptatem sequi nesciunt. Neque porro quis-quam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numqua.</P>
                                </div>
                            </div>
                        </div>  
                        <!-- Items -->
                        <div class="item">
                            <div class="media"> 
                                <a href="javascript:void(0)" class="client_img"><img src="images/client-1.jpg" alt="" class="rounded-circle"></a>
                                <div class="media-body">
                                    <a href="javascript:void(0)">Robert Joe</a>
                                    <h4>I lose 10 ponds in one week</h4>
                                    <P>Osed quia consequuntur magni dolores eos qui rati one voluptatem sequi nesciunt. Neque porro quis-quam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numqua.</P>
                                </div>
                            </div>
                        </div>  
                        <!-- Items -->
                        <div class="item">
                            <div class="media"> 
                                <a href="javascript:void(0)" class="client_img"><img src="images/client-1.jpg" alt="" class="rounded-circle"></a>
                                <div class="media-body">
                                    <a href="javascript:void(0)">Robert Joe</a>
                                    <h4>I lose 10 ponds in one week</h4>
                                    <P>Osed quia consequuntur magni dolores eos qui rati one voluptatem sequi nesciunt. Neque porro quis-quam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numqua.</P>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
        <!--================End Our customers says Area =================-->

        <!--================Health Counter Area =================--> 
        <section class="health_counter_area counter_area_2" style="padding: 15px 0;display:none;">
            <div class="container">
                <div class="row health_counter_row">
                    <div class="col-lg-3 col-md-6 counter_col">
                        &nbsp;
                    </div>
                </div>
            </div>
        </section>
        <!--================End Health Counter Area =================-->

        <!--================Our coaches Area =================-->  
        <section class="our_coaches_area coaches_bg" style="display:none;">
            <div class="container">
                <div class="left_tittle">
                    <h2>Our Team</h2>
                    <p>Osed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt neque porro quisquam est.</p>
                </div>
                <div class="row our_coaches_row">
                    <!-- coaches items -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="coaches">
                            <div class="coaches_img">
                                <img src="img/profile.jpg" alt="">  
                                <ul class="coaches_hover">
                                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                            <div class="coaches_content">
                                <a href="javascript:void(0)">Robert Joe</a>
                                <h6>{Title}</h6>
                            </div>
                        </div>
                    </div>
                    <!-- coaches items -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="coaches">
                            <div class="coaches_img">
                                <img src="img/profile.jpg" alt="">  
                                <ul class="coaches_hover">
                                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                            <div class="coaches_content">
                                <a href="javascript:void(0)">Merry Joe</a>
                                <h6>{Title}</h6>
                            </div>
                        </div>
                    </div>
                    <!-- coaches items -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="coaches">
                            <div class="coaches_img">
                                <img src="img/profile.jpg" alt="">  
                                <ul class="coaches_hover">
                                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                            <div class="coaches_content">
                                <a href="javascript:void(0)">Robert Joe</a>
                                <h6>{Title}</h6>
                            </div>
                        </div>
                    </div>
                    <!-- coaches items -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="coaches">
                            <div class="coaches_img">
                                <img src="img/profile.jpg" alt="">  
                                <ul class="coaches_hover">
                                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                            <div class="coaches_content">
                                <a href="javascript:void(0)">Satlen Joe</a>
                                <h6>{Title}</h6>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </section>
        <!--================End Our coaches Area =================--> 

        <!--================Contact Area =================--> 
        <section class="contact_area contact_area_2"> 
            <div class="left_contact">
                <div class="contact_from_area">
                    <form class="row from_main" action="#" method="post" id="phpcontactform" novalidate="novalidate"> 
                        <div class="form-group col-12">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address*">
                        </div>
                        <div class="form-group col-12">   
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject*"> 
                        </div>
                        <div class="form-group col-12">
                            <textarea class="form-control" id="message" name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group col-12">
                            <button class="find_btn btn" id="js-contact-btn" type="button">Submit Now</button> 
                            <div id="js-contact-result" data-success-msg="Form submitted successfully." data-error-msg="Messages Successfully"></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="right_contact">
                <div class="request_area">
                    <div class="request">
                        <img src="img/contact-bg-2.jpg" alt="">
                        <div class="request_content">
                            <h2><span>Request</span> Free Consultation</h2> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Contact Area =================--> 

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