<!DOCTYPE html>


<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Smk Muhammadiyah 1 Moyudan </title>

        <!-- Bootstrap -->
        <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/flexslider.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('icons/css/ionicons.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">

        <!--revolution slider setting css-->
        <link href="{{asset('rs-plugin/css/settings.css')}}" rel="stylesheet">
        <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet" type="text/css" />
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="80">


        <!-- Static navbar -->
        <nav class="navbar navbar-default navbar-fixed-top before-color">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand alo" style="font-size: 20px;">Smk Muhammadiyah 1 Moyudan</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right scroll-to">
                        <li class="active"><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        {{-- <li><a href="#work">Work</a></li> --}}
                        {{-- <li><a href="#blog">Blog</a></li> --}}
                        {{-- <li><a href="post-single.html">Blog Post</a></li>                       --}}
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Pengajuan Sertifikat <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/login">Login</a></li>

                            </ul>
                        </li>
                        <li><a href="#contact">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Daftar Akun <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/registerPeserta">Register User</a></li>
                                <li><a href="/registerAdmin">Register admin</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>


        <div class="fullwidthbanner" id="home">

            <div class="tp-banner">
                <ul>
                    <!-- SLIDE 1 -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" style="background-color: #20d9e3;">
                        <!-- MAIN IMAGE -->
                        <img src="" alt="desk" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->


                        <div class="tp-caption slider-title container text-center" data-x="center" data-y="center"  data-voffset="-30" data-speed="500" data-start="1200" data-easing="Power4.easeInOut" style="font-size:35px;">
                            <center>welcome to <br> <span style="font-size:45px;">Smk Muhammadiyah 1 Moyudan</span></center>

                        </div>

                        {{-- <div class="tp-caption slider-title" data-x="center" data-y="center"  data-voffset="-30" data-speed="500" data-start="1200" data-easing="Power4.easeInOut">
                            welcome to
                            <p style="color: antiquewhite; font-size: 40px; margin-right: 70px"> Smk Muhammadiyah 1 Moyudan</p>
                        </div> <!-- /tp-caption --> --}}
                        <!-- LAYER NR. 2 -->

                        <div class="tp-caption slider-caption" data-x="center" data-y="center" data-voffset="40" data-speed="500" data-start="1800" data-easing="Power4.easeInOut" data-captionhidden="on">
                        </br>

                        </div>
                        <!-- /tp-caption -->

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption slider-button scroll-to" data-x="center" data-y="center" data-voffset="120" data-speed="500" data-start="2400" data-easing="Power4.easeInOut" data-captionhidden="on">
                            </br>
                            <a class="btn btn-white" href="#about">See more</a>
                        </div> <!-- /tp-caption -->
                    </li>
                    <!-- SLIDE 2 -->

                    <!-- SLIDE 3 -->
                </ul>
            </div>
        </div><!--full width banner-->





        <section id="about" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <div class="section-title">
                            <h1>Modern <span class="colored-text">School</span> </h1>
                            <span class="border-line"></span>

                        </div>
                    </div>
                </div><!-- title row end-->

                <div class="row">
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-information-outline front-icon"></i>
                                <i class="ion-ios-information-outline back-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>History</h3>
                                <p>
                                {{--  --}}

                                </p>
                            </div>
                        </div><!--features icon wrap-->
                    </div>
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap clearfix">
                            <div class="left-side-icon">
                                <i class="ion-information front-icon"></i>
                                <i class="ion-information back-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Commitment</h3>
                                <p>
                              {{--  --}}
                                </p>
                            </div>
                        </div><!--features icon wrap-->
                    </div><!--features col-->
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-information-outline front-icon"></i>
                                <i class="ion-ios-information-outline back-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Background</h3>
                                <p>
                                   {{--  --}}
                                </p>
                            </div>
                        </div><!--features icon wrap-->
                    </div><!--features col-->
                </div><!--row-->
            <div class="wctrabout" style="margin-bottom:60px;">
                <div class="row">
                    <!--features col-->
                   <!--features col-->
                </div>
            </div>
                <!--row-->
            </div>
            <!--container-->
        </section><!--about section end-->


        <!--team section end-->

        <section id="services" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <div class="section-title">
                            <h1>Our <span class="colored-text">Services</span></h1>
                            <span class="border-line"></span>
                            {{-- <p class="lead subtitle-caption">
                                Why you choose <span class="colored-text">Bonativo</span>
                            </p> --}}
                        </div>
                    </div>
                </div><!-- title row end-->
                <div class="row">
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap services-icons clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-information-outline front-icon"></i>
                            </div>
                            <div class="features-text-right">
                                {{-- <h3>Application Development</h3> --}}
                                <p>
                                  {{-- Web Center provides comprehensive application development services, tailoring solutions to meet the unique requirements of our clients. Our skilled team of developers is dedicated to crafting innovative and scalable applications that empower businesses to thrive in the digital landscape. From concept to deployment, we guide you through the entire development process, ensuring your applications are not only functional but also aligned with the latest industry standards and trends. --}}
                                </p>
                            </div>
                        </div>
                    </div><!--services col-->
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap services-icons clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-people-outline front-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3> </h3>
                                <p>


                                </p>
                            </div>
                        </div>
                    </div><!--services col-->
                </div><!--services row-->
                <div class="row">
                    <!--services col-->
                    <!--services col-->
                </div><!--services row-->
                <div class="row">
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap services-icons clearfix">
                            <div class="left-side-icon">
                                 <i class="ion-ios-information-outline front-icon"></i>
                            </div>
                            <div class="features-text-right">
                                {{-- <h3>System Integrator</h3> --}}
                                <p>
                                   {{--  --}}
                                </p>
                            </div>
                        </div>
                    </div><!--services col-->
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap services-icons clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-people-outline front-icon"></i>
                            </div>
                            <div class="features-text-right">
                                {{-- <h3>It Training</h3> --}}
                                <p>
                                    {{-- We at Smk Muhammadiyah 1 Moyudan. would like to take this opportunity to thank you for making us the excellent IT Training. We achieved this status because of dedicated customers like you.

                                    Smk Muhammadiyah 1 Moyudan. as a training and development studio, works hard every day to bring you the courses you ask for and need to compete in todayâ€™s fast-paced environment.

                                Keep update with our courses offerings which include Linux, Java, JavaScript, Perl, C/C++, PHP, Building a Web Site, Web Design, Web Mastering, Web Development, and Web Security classes. As youâ€™ve come to expect from Smk Muhammadiyah 1 Moyudan. Studio. These courses incorporate the latest networking technologies and state-of-the art equipment. --}}


                                </p>
                            </div>
                        </div>
                    </div><!--services col-->
                </div><!--services row-->
            </div>
        </section><!--services section end-->



        <section id="work" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="section-title text-center">
                             <h1>Our <span class="colored-text">Partner</span> </h1>
                            <span class="border-line"></span>
                            <p class="lead subtitle-caption">
                                {{-- PLN PUSAT, KOPERASI DEPKES, KEMENTRIAN KEBUDAYAAN DAN PARIWISATA, LAPAN, PERTAMINA  EP, KOMINFO, DEPARTMENT KEUANGAN, PLN BATAM, DAN ANGKASA PURA II --}}
                            </p>
                        </div>
                    </div>
                </div><!--heading row-->

            </div>
        <div class="container" style="width : 60%;">
            <div class="row">
                    {{-- <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="{{asset('images/plnpusat.png')}}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <center>
                                        <img src="{{asset('images/plnpusat.png')}}" class="img-responsive" alt=""  style="height: 150px;  ">
                                    </center>
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--work col-->

                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="{{asset('images/bakti-husada.png')}}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <center>
                                        <img src="{{asset('images/bakti-husada.png')}}" class="img-responsive" alt="" style="height: 150px;  ">
                                    </center>

                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="{{asset('images/logoplnbatam.png')}}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="{{asset('images/logoplnbatam.png')}}" class="img-responsive" alt="" style="  width: 201px;">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                </div><!--work row-->
                <div class="row">
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="{{asset('images/pertaminalogo.png')}}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="{{asset('images/pertaminalogo.png')}}" class="img-responsive" alt="" style="  width: 240px;">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="{{asset('images/piplogo.png')}}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <center>
                                    <img src="{{asset('images/piplogo.png')}}" class="img-responsive" alt="" style="  width: 240px;" >
                                    </center>

                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="{{asset('images/kominfonewlogo.png')}}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                   <center>
                                    <img src="{{asset('images/kominfonewlogo.png')}}" class="img-responsive" alt="" style="height: 124px;  ">
                                   </center>

                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                </div><!--work row-->
                <div class="row">
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="{{asset('images/Logolapan.png')}}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="{{asset('images/Logolapan.png')}}" class="img-responsive" alt="" style="height: 127px; ">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="{{asset('images/kementriankebudayaandanpariwisatalogo.png')}}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="{{asset('images/kementriankebudayaandanpariwisatalogo.png')}}" class="img-responsive" alt="" style="height: 147px;  ">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="{{asset('images/angkasapuralogolama.png')}}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="{{asset('images/angkasapuralogolama.png')}}" class="img-responsive" alt="" style="height: 121px;  ">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                </div><!--work row--> --}}
            </div>
        </section><!--work section end-->



        <section id="work" class="section-padding" >
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="section-title text-center">
                             <h1>Our <span class="colored-text">Portfolio</span> </h1>
                            <span class="border-line"></span>
                            <p class="lead subtitle-caption">

                            </p>
                        </div>
                    </div>
                </div><!--heading row-->
            </div>

            {{-- <div class="container" >
                <div class="content">
                     <div class="row">
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="{{asset('images/NE.png')}}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="{{asset('images/NE.png')}}" class="img-responsive" alt="" style="height: 220px;  width: 355px;" >
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="{{asset('images/rapsodi.png')}}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="{{asset('images/rapsodi.png')}}" class="img-responsive" alt="" style="height: 220px; width: 355px;">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="{{asset('images/amr.png')}}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="{{asset('images/amr.png')}}" class="img-responsive" alt="" style="
                                    height: 220px; width:355px;">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                </div><!--work row-->
                <div class="row">
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="{{asset('images/Fois.png')}}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="{{asset('images/Fois.png')}}" class="img-responsive" alt="" style="
                                    height: 220px; width:355px; " >
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="{{asset('images/Jalur.png')}}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="{{asset('images/Jalur.png')}}" class="img-responsive" alt="" style="
                                    height: 220px; width:355px;">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="{{asset('images/NeKalimantan.png')}}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="{{asset('images/NeKalimantan.png')}}" class="img-responsive" alt="" style="
                                    height: 220px;  width: 355px">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                </div><!--work row-->
                <div class="row">
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="{{asset('images/Gais.png')}}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="{{asset('images/Gais.png')}}" class="img-responsive" alt="" style="  height:220px; width:355px;
                                   ">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="{{asset('images/logsheetsumatra.png')}}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="{{asset('images/logsheetsumatra.png')}}" class="img-responsive" alt=""  style="height: 220px; width:355px;">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="{{asset('images/LogsheetBatam.png')}}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="{{asset('images/LogsheetBatam.png')}}" class="img-responsive" alt="" style=" width: 355px;
                                    height: 220px;">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
               <!--work col-->
                <!--work row-->
            </div>
        </section>
        {{-- <section id="blog" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="section-title text-center">
                            <h1> <span class="alo">Bonativo</span> News</h1>
                            <span class="border-line"></span>
                            <p class="lead subtitle-caption">
                                Vivamus congue diam vitae tortor imperdiet congue.
                            </p>
                        </div>
                    </div>
                </div><!--heading row-->
            </div><!--container-->

            <div class="news-wrapper  container-fluid">
                <div class='row'>
                <div class="col-sm-6 text-center no-padding">
                    <a class="news-inner" href="post-single.html" style="background:url(images/bg-1.jpg) no-repeat; background-size: cover;">
                        <div class="post-overlay"></div>
                        <div class="post-preview-content">
                            <h4 class="date">24 April, 2015</h4>
                            <h2 class="title">Clean & Flat one page theme</h2>
                            <span class="border-line"></span>
                            <p class="author">By Maria</p>
                        </div>
                    </a>
                </div><!--news col-->
                <div class="col-sm-6 text-center no-padding">
                    <a class="news-inner" href="post-single.html" style="background:url(images/bg-2.jpg) no-repeat; background-size: cover;">
                        <div class="post-overlay"></div>
                        <div class="post-preview-content">
                            <h4 class="date">24 April, 2015</h4>
                            <h2 class="title">Clean & Flat one page theme</h2>
                            <span class="border-line"></span>
                            <p class="author">By Maria</p>
                        </div>
                    </a>
                </div><!--news col-->
                <div class="col-sm-6 text-center no-padding">
                    <a class="news-inner" href="post-single.html" style="background:url(images/bg-3.jpg) no-repeat; background-size: cover;">
                        <div class="post-overlay"></div>
                        <div class="post-preview-content">
                            <h4 class="date">24 April, 2015</h4>
                            <h2 class="title">Clean & Flat one page theme</h2>
                            <span class="border-line"></span>
                            <p class="author">By Maria</p>
                        </div>
                    </a>
                </div><!--news col-->
                <div class="col-sm-6 text-center no-padding">
                    <a class="news-inner" href="post-single.html" style="background:url(images/bg-1.jpg) no-repeat; background-size: cover;">
                        <div class="post-overlay"></div>
                        <div class="post-preview-content">
                            <h4 class="date">24 April, 2015</h4>
                            <h2 class="title">Clean & Flat one page theme</h2>
                            <span class="border-line"></span>
                            <p class="author">By Maria</p>
                        </div>
                    </a>
                </div><!--news col-->
                </div>
            </div>
            <div class="clearfix"></div>
        </section>
        <!--news section end--> --}}
        {{-- <div class="cta">
            <div class="container text-center scroll-to">
                <h1>Simple & clean one page template</h1>
                <a href="#contact" class="btn btn-border-black btn-radius btn-lg">Purchase now</a>
            </div>
        </div> --}}
        <!--call to action-->


        <section id="contact" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="row contact-details">
                            <div class="col-sm-4 margin-bottom30 text-center">
                                <i class="ion-ios-location-outline"></i>
                                <!--<h4>Jakarta, Indonesia</h4>-->
                                <a href="https://maps.app.goo.gl/MfrX23NKbQJew2o79" style="color:white;"><h4>Sleman, Indonesia</h4></a>
                            </div>
                            <div class="col-sm-4 margin-bottom30 text-center">
                                <i class="ion-ios-email-outline"></i>
                            <a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=webcenter.indonesia@gmail.com" style="color:white;"><h4>Your Email@gmail.com</h4></a>
                            </div>
                            <div class="col-sm-4 margin-bottom30 text-center">
                                <i class="ion-ios-telephone-outline"></i>
                                <h4>(+62-21)-428-77363</h4>
                            </div>
                        </div><!--contact details-->
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">

                        <form name="sentMessage" class="contact-form" method="post" novalidate>
                            <h3>Drop us a line</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">

                                            <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">

                                            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12  controls">

                                    <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">

                                    <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12 text-right">
                                    <button type="submit" class="btn btn-white btn-lg">Send Message</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div> --}}
            </div>
        </section><!--contact section end-->

        <footer class="footer" style="background-color: #20d9e3; padding:  37px">
            <div class="container text-center">
                <span class="alo" style="font-weight: bold">Smk Muhammadiyah 1 Moyudan</span>
                {{-- <ul class="social list-inline">
                    <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                    <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
                    <li><a href="#"><i class="icon icon-social-dribbble"></i></a></li>
                </ul> --}}
               <span style="color: white">  Copyright &copy;  </span> <span id="tahunterkini" style="color: white;"></span> <span style="color: white;">Smk Muhammadiyah 1 Moyudan</span>

            </div>
        </footer>
        <script>
            const d = new Date();
            let year = d.getFullYear();
            document.getElementById("tahunterkini").innerHTML = year;
        </script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/moderniz.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/jquery.easing.1.3.js')}}" type="text/javascript"></script>
        <!-- bootstrap js-->
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script type="text/javascript" src="{{asset('js/jquery.flexslider-min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/parallax.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jqBootstrapValidation.js')}}"></script>
        <!--revolution slider scripts-->
        <script src="{{asset('rs-plugin/js/jquery.themepunch.tools.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('rs-plugin/js/jquery.themepunch.revolution.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/template.js')}}" type="text/javascript"></script>

    </body>
</html>
