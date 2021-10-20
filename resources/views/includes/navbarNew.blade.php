<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="  مدارس جيل المستقبل الخاصة في حزانو وسرمدا نحو غد مشرق, قسم خاص للذكور واخر خاص للاناث , اللغة الانكليزية واللغة التركية والروبوت اضافة للسوربان هو مماتتميز به مدارسنا الى جانب المواد العلمية الاخرى التي تحظى باهتمام كبير من قبلنا......">
    <meta name="keywords" content=" سرمدا تعليم خاص بكالوريا علمي ادبي تاسع شهادات دورات تدريبية ادلب المحرر التعليم في المحرر حزانو,مدارس جيل المستقبل,عبدالباسط حبلص">

    <title>@lang('Future Generation Private Schools')</title>
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="/theme/images/favicon.png">

    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- inject:css -->
    <link rel="stylesheet" href="/theme/css/bootstrap.min.css">
    <link rel="stylesheet" href="/theme/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="/theme/css/line-awesome.css">
    <link rel="stylesheet" href="/theme/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/theme/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/theme/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/theme/css/fancybox.css">
    <link rel="stylesheet" href="/theme/css/tooltipster.bundle.css">
    <link rel="stylesheet" href="/theme/css/animated-headline.css">
    <link rel="stylesheet" href="/theme/css/style.css">
    <link rel="stylesheet" href="/theme/css/style-rtl.css">
    <style>


        @media only screen and (max-width: 767px) {
            .news span {
                width: 5%!important;
                font-size: 12px!important;
            }
            .news ul
            {
                padding-right: 5%!important;
                font-size: 12px!important;
            }

            .news a{

                font-size: 12px!important;
            }
        }


        .news {

            width: 100%;
            overflow: hidden;
            -webkit-user-select: none
        }

        .news span {
            float: right;
            color: #30ec0c;
            position: relative;

            padding-bottom: 15px!important;
            font-size: 20px;
            -webkit-font-smoothing: antialiased;
            -webkit-user-select: none;
            cursor: pointer
        }

        .news ul {
            float: right;
            padding-right: 20px;
            animation:ticker 50s linear infinite;
            -webkit-user-select: none
        }
        .news{
            padding-top: 15px!important;
            height: 50px!important;
        }
        .news ul li {
            line-height: 30px!important;
            padding-top: 5px!important;
            padding-bottom: 5px!important;
            list-style: none }

        .news ul li a {
            color: #30ec0c;
            text-decoration: none;
            font-size: 18px;
            -webkit-font-smoothing: antialiased;
            -webkit-user-select: none
        }

        .news ul:hover { animation-play-state: paused }
        .news span:hover+ul { animation-play-state: paused }

        @keyframes ticker {
            0%   {margin-top: 0px}
            10%  {margin-top: -40px}
            20%  {margin-top: -80px}
            30%  {margin-top: -120px}
            40%  {margin-top: -160px}
            50%  {margin-top: -200px}
            60%  {margin-top: -240px}
            70%  {margin-top: -280px}
            80%  {margin-top: -320px}
            90%  {margin-top: -360px}
            100% {margin-top: 0px}
        }
    </style>
    <!-- end inject -->
</head>

<body>

<!-- start cssload-loader -->
<div class="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!--======================================
    START HEADER AREA
======================================-->
<header class="header-menu-area">
    <div class="header-menu-content bg-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12"  >
                    <div class="top-contact-info d-flex align-items-center">
                        <div class="news red">
                            <span><i class="fas fa-bolt"></i> </span>
                            <ul>
                                @foreach($habers as $item)
                                    <li><a  style="color: #30ec0c; text-align: right; float: right" >
                                           {{ $item->body }}
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>

                </div>

            </div>
            <div class="main-menu-content">
                <div class="row align-items-center">

                    <!-- end col-lg-2 -->
                    <div class="col-lg-10">
                        <div class="menu-wrapper">
                            <nav class="main-menu">
                                <ul>
                                    <li>
                                    <li><a href="/welcome">@lang("home")</a>
                                    </li>
                                    <li class="nav-item  "><a href="/ted" > @lang("Ted") <b class="caret"></b></a> </li>

                                    <li>
                                        <a href="javascript: void(0)"> @lang("Our departments")<i class="la la-angle-down fs-12"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="/prekg" class="nav-link">@lang("PreKindergarten")</a></li>
                                            <li><a href="/kg" class="nav-link">@lang("Kindergarten")</a></li>
                                            <li><a href="/firstschool" class="nav-link">@lang("Primary School")</a></li>
                                            <li><a href="/secschool" class="nav-link">@lang("Preparatory School")</a></li>
                                            <li><a href="/highschool" class="nav-link">@lang("High school")</a></li>


                                        </ul>
                                    </li>
                                    <!-- ========== Contact dropdown ==================-->

                                    <li>
                                        <a href="javascript: void(0)">@lang("Staff") <i class="la la-angle-down fs-12"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="/mangement" class="nav-link">@lang("Administration")</a></li>
                                            <li><a href="/prekgmang" class="nav-link">@lang("PreKindergarten")</a></li>
                                            <li><a href="/kgmang" class="nav-link">@lang("Kindergarten")</a></li>
                                            <li><a href="/firstmang" class="nav-link">@lang("Primary School")</a></li>
                                            <li><a href="/secondmang" class="nav-link">@lang("Preparatory School")</a></li>
                                            <li><a href="/highmang" class="nav-link">@lang("High school")</a></li>


                                        </ul>
                                    </li>
                                    <li class="nav-item  "><a href="/club" > @lang("Summer Club") <b class="caret"></b></a> </li>


                                    <li >
                                        <a href="javascript: void(0)">@lang("ofices")<i class="la la-angle-down fs-12"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li ><a href="/hr" class="nav-link">@lang("Hr")</a></li>
                                            <li ><a href="/finans" class="nav-link">@lang("Finanicial Office")</a></li>
                                            <li ><a href="/bus" class="nav-link">@lang("Transportation")</a></li>
                                            <li ><a href="/interviewofice" class="nav-link">@lang("interofice")</a></li>
                                            <li ><a href="/service" class="nav-link">@lang("helpofice")</a></li>


                                        </ul>
                                    </li>
                                    <li class="nav-item  "><a href="/blog" >@lang("Blog") <b class="caret"></b></a> </li>
                                    <li class="nav-item  "><a href="/work" >@lang("Work With Us") <b class="caret"></b></a> </li>

                                    <li class="nav-item  "><a href="/contact" >@lang("Contact") <b class="caret"></b></a> </li>
                                </ul>
                                <!-- end ul -->
                            </nav>
                            <!-- end main-menu -->
                            <div class="nav-right-button border-right border-right-gray pl-4 mr-3">
                                <ul class="generic-list-item">
                                    <li><a href="/Student/StudentLogin">@lang('login')</a></li>
                                </ul>
                            </div>


                        </div>

                        <!-- end menu-wrapper -->
                    </div>
                    <!-- end col-lg-10 -->
                    <div class="col-lg-2">
                        <div class="logo-box">
                            <a href="index.html" class="logo"><img src="/theme/images/logo.jpg" alt="logo"></a>
                            <div class="user-btn-action">
                                <div class="off-canvas-menu-toggle main-menu-toggle icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="top" title="Main menu">
                                    <i class="la la-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end container -->
    </div>
    <!-- end header-menu-content -->
    <div class="off-canvas-menu custom-scrollbar-styled main-off-canvas-menu">
        <div class="off-canvas-menu-close main-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div>
        <!-- end off-canvas-menu-close -->
        <ul class="generic-list-item off-canvas-menu-list pt-90px">
            <li>
                <a href="/">@lang('home')</a>

            </li>
            <li>
                <a href="/ted">@lang('ted')</a>

            </li>

            <li>
            <li>
                <a href="javascript: void(0)">@lang("Our departments")</a>
                <ul class="sub-menu">
                    <li><a href="/prekg">@lang("PreKindergarten")</a></li>
                    <li><a href="/kg">@lang("Kindergarten")</a></li>
                    <li><a href="/firstschool">@lang("Primary School")</a></li>
                    <li><a href="/secschool">@lang("Preparatory School")</a></li>
                    <li><a href="/highschool">@lang("High school")</a></li>


                </ul>
            </li>
            <li>
                <a href="javascript: void(0)">@lang("Staff")</a>
                <ul class="sub-menu">
                    <li><a href="/mangement">@lang("Administration")</a></li>
                    <li><a href="/prekgmang">@lang("PreKindergarten")</a></li>
                    <li><a href="/kgmang">@lang("Kindergarten")</a></li>
                    <li><a href="/firstmang">@lang("Primary School")</a></li>
                    <li><a href="/secondmang">@lang("Preparatory School")</a></li>
                    <li><a href="/highmang">@lang("High school")</a></li>

                </ul>
            </li>
            <li>
                <a href="/club">@lang("Summer Club")</a>

            </li>
            <li>
                <a href="/news">@lang("Magazine")</a>

            </li>

            <li >
                <a href="javascript: void(0)">@lang("ofices")</a>
                <ul class="sub-menu">
                    <li ><a href="/hr">@lang("Hr")</a></li>
                    <li ><a href="/finans">@lang("Finanicial Office")</a></li>
                    <li ><a href="/bus">@lang("Transportation")</a></li>
                    <li ><a href="/interviewofice">@lang("interofice")</a></li>
                    <li ><a href="/service">@lang("helpofice")</a></li>


                </ul>
            </li>
            <li>
                <a href="/blog">@lang("Blog")</a>

            </li>
            <li>
                <a href="/work">@lang("Work With Us")</a>

            </li>
        </ul>
        <div class="btn-box px-4 pt-5 text-center">
            <a href="/Student/StudentLogin" class="btn theme-btn theme-btn-sm theme-btn-transparent"><i class="la la-sign-in mr-1"></i> @lang('login')</a>


        </div>
    </div>
    <!-- end off-canvas-menu -->
    <div class="body-overlay"></div>
</header>

<!-- start scroll top -->
<div id="scroll-top">
    <i class="la la-arrow-up" title="Go top"></i>
</div>



<!-- template js files -->
<script src="/theme/js/jquery-3.4.1.min.js"></script>
<script src="/theme/js/bootstrap.bundle.min.js"></script>
<script src="/theme/js/bootstrap-select.min.js"></script>
<script src="/theme/js/owl.carousel.min.js"></script>
<script src="/theme/js/isotope.js"></script>
<script src="/theme/js/waypoint.min.js"></script>
<script src="/theme/js/jquery.counterup.min.js"></script>
<script src="/theme/js/fancybox.js"></script>
<script src="/theme/js/jquery.lazy.min.js"></script>
<script src="/theme/js/datedropper.min.js"></script>
<script src="/theme/js/emojionearea.min.js"></script>
<script src="/theme/js/tooltipster.bundle.min.js"></script>

<script src="/theme/js/main-rtl.js"></script>
</body>

</html>
