<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>SEW Vital Sign Monitoring System</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--


-->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- animate -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- google font -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,800' rel='stylesheet' type='text/css'>
    <!-- custom -->
    <link rel="stylesheet" href="css/style.css">


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>

<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

<!-- start navigation -->
<div class="navbar navbar-fixed-top navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand"><img src="images/logo.png" class="img-responsive" alt="logo"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home" class="smoothScroll">HOME</a></li>
                <li><a href="#about" class="smoothScroll">ABOUT</a></li>
                <li><a href="#service" class="smoothScroll">SENSORS</a></li>
                <li><a href="#team" class="smoothScroll">TEAM</a></li>
                <li><a href="#portfolio" class="smoothScroll">PORTFOLIO</a></li>
                <li><a href="#contact" class="smoothScroll">CONTACT</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- end navigation -->

<!-- start home -->
<section id="home" class="text-center">
    @include('includes.partials.messages')
    <div class="templatemo_headerimage">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="images/slider/banner dark.jpg" alt="Slide 1">
                    <div class="slider-caption">
                        <div class="templatemo_homewrapper">
                            <h1 class="wow fadeInDown" data-wow-delay="2000">EXCEPTIONAL SERVICE</h1>
                            <h2 class="wow fadeInDown" data-wow-delay="2000">
                                <span>BECAUSE YOUR LIFE MATTERS</span>
                            </h2>
                            <a href="#service" class="smoothScroll btn btn-default wow fadeInDown" data-wow-delay="2000">Our Device</a>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="images/slider/banner dark.jpg" alt="Slide 2">
                    <div class="slider-caption">
                        <div class="templatemo_homewrapper">
                            <h1 class="wow fadeInDown" data-wow-delay="2000">BECAUSE WE CARE</h1>
                            <h2 class="wow fadeInDown" data-wow-delay="2000">
                                {{--<span>work on all modern browsers, Works on IE 10+</span>--}}
                            </h2>
                            {{--<p>see caniuse.com for browser compatibility information</p>--}}
                            <a href="#about" class="smoothScroll btn btn-default wow fadeInDown" data-wow-delay="2000">See about us</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- end home -->

<!-- start about -->
<div id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0.9s">
                <h3>About SEW</h3>
                <h4>Smart, Light and Adaptive</h4>
                <p>SEW is a real-time patient monitoring system placed on the wrist that integrates vital signs sensors, ad-hoc networking, electronic patient records, and Web portal technology to allow remote monitoring of patient status within the
                    hospital premises. </p>
                <p>This system shall facilitate communication between patients wearing the wristband device and medical professionals at local hospitals such as nurses or doctors.
                </p>
            </div>
            <div class="col-md-6 col-sm-6 wow fadeInRight" data-wow-delay="0.9s">
                {{--<img src="images/black.jpg">--}}

            </div>
        </div>
    </div>
</div>
<!-- end about -->

<!-- start divider -->
<div id="divider">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-7">
                <h2 class="wow bounce">SEW provides <strong>solutions</strong></h2>
                <p class="wow fadeInUp" data-wow-delay="0.9s">A patient's pulse, oxygen saturation level and body temperature are essential in identifying clinical deterioration and that these parameters must be measured consistently and recorded accurately. SEW provides a device that allows
                    monitoring of the vital signs of an admitted, outpatient or an inpatient to provide the best service possible. </p>
            </div>
            <div class="col-md-2 col-sm-2"></div>
        </div>
    </div>
</div>
<!-- end divider -->

<!-- start service -->
<div id="service">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="media">
                    <div class="media-object media-left wow fadeIn" data-wow-delay="0.9s">
                        <img src="images/icons/cardiogram (1).png">
                    </div>
                    <div class="media-body wow fadeIn" data-wow-delay="0.6s">

                        <h3 class="media-heading">Heart Rate Pulse Oximeter </h3>
                        <p>Measures saturation level values wheathr it reads under 60 mm Hg that usually indicate the need for supplemental oxygen. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="media">
                    <div class="media-object media-left wow fadeIn" data-wow-delay="0.4s">
                        <img src="images/icons/heart-with-electrocardiogram (1).png">
                    </div>
                    <div class="media-body wow fadeIn" data-wow-delay="0.3s">
                        <h3 class="media-heading">Heart Pulse Sensor</h3>
                        <p>By measuring the number of times the heart beats per minute, the device pushes an alert if the heart beats faster or slower than the normal pace.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="media">
                    <div class="media-object media-left wow fadeIn" data-wow-delay="0.8s">
                        <img src="images/icons/thermometer-outlined-symbol-of-stroke (1).png">
                    </div>
                    <div class="media-body wow fadeIn" data-wow-delay="0.6s">
                        <h3 class="media-heading"> Temperature Sensor</h3>
                        <p>The temperature sensors embaded in the device, measure the level of body temperature using the most common way of celsius °C.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end service -->


<!-- start team -->
<div id="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="wow bounce">Meet the Engineers</h2>
            </div>
            <div class="col-md-3 col-sm-3 wow fadeIn" data-wow-delay="0.3s">
                <img src="images/daniel.jpg" class="img-responsive" alt="team img">
                <h4>Frontend & Hardware Engineer</h4>
                <h3>DANIEL GETACHEW</h3>
                <p>Developed a dashboard for controlling patients vital signs along with assembling sensor devices.</p>

            </div>
            <div class="col-md-3 col-sm-3 wow fadeIn" data-wow-delay="0.6s">
                <img src="images/mikiyas.jpg" class="img-responsive" alt="team img">
                <h4>Backend Engineer</h4>
                <h3>MIKIYAS AMDU</h3>
                <p>Built an API to monitor patients vital signs, management of patients and medical professionals. </p>

            </div>
            <div class="col-md-3 col-sm-3 wow fadeIn" data-wow-delay="0.9s">
                <img src="images/sosena.jpg" class="img-responsive" alt="team img">
                <h4>Frontend Engineer</h4>
                <h3>SOSENA TEREFE</h3>
                <p>Developed a landing page and dashboard for patient statics management.</p>

            </div>
            <div class="col-md-3 col-sm-3 wow fadeIn" data-wow-delay="0.3s">
                <img src="images/tesfaye.jpg" class="img-responsive" alt="team img">
                <h4>Mobile Application Engineer</h4>
                <h3>TESFAYE ASSEFA</h3>
                <p>Built a tablet and mobile application for medical professionals to monitor and control patients vital sign records. </p>
                <ul class="social-icon text-center"></ul>
            </div>
        </div>
    </div>
</div>
<!-- end team -->

<!-- start newsletter -->
<div id="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2 class="wow bounce">Get our newsletter!</h2>
                    <p class="wow fadeIn" data-wow-delay="0.6s">Leave your email address below and we will contact you.</p>
                </div>
          {{ Form::open(['route' => 'frontend.email', 'class' => 'wow fadeInUp','data-wow-delay'=>'0.9s', 'role' => 'form', 'method' => 'post']) }}
                    <div class="col-md-3 col-sm-3"></div>
                    <div class="col-md-4 col-sm-4">
                        <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <input name="submit" type="submit" class="form-control" id="submit" value="Sign Up">
                    </div>
                    <div class="col-md-3 col-sm-3"></div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end newsletter -->


<!-- start portfolio -->
<div id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="wow bounce">Project Screenshots</h2>
                <div class="iso-section wow fadeIn" data-wow-delay="0.6s">

                    <ul class="filter-wrapper clearfix">
                        <li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".vital">Vital Monitoring Dashboard</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".phablet">Phablet APP</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".statistics">Statistics Dashboard</a></li>
                    </ul>

                    <div class="iso-box-section">
                        <div class="iso-box-wrapper col4-iso-box">

                            <div class="iso-box vital col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-thumb">
                                    <img src="images/gallery/sew_dashboard.png" class="fluid-img" alt="portfolio img">
                                    <div class="portfolio-overlay">
                                        <a href="#" class="fa fa-search"></a>
                                        <a href="#" class="fa fa-link"></a>
                                        <h4>Vital Sign Monitoring Dashboard</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="iso-box vital  col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-thumb">
                                    <img src="images/gallery/SEW.Ambulance.Dashboard.png" class="fluid-img" alt="portfolio img">
                                    <div class="portfolio-overlay">
                                        <a href="#" class="fa fa-expand"></a>
                                        <a href="#" class="fa fa-link"></a>
                                        <h4>SEW Ambulance Dashboard</h4>
                                    </div>
                                </div>
                            </div>


                            <div class="iso-box vital col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-thumb">
                                    <img src="images/gallery/SEW.Clinical.Dashboard.png" class="fluid-img" alt="portfolio img">
                                    <div class="portfolio-overlay">
                                        <a href="#" class="fa fa-search"></a>
                                        <a href="#" class="fa fa-link"></a>
                                        <h4>SEW Clinical Dashboard</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="iso-box statistics col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-thumb">
                                    <img src="images/gallery/stat.jpg" class="fluid-img" alt="portfolio img">
                                    <div class="portfolio-overlay">
                                        <a href="#" class="fa fa-search"></a>
                                        <a href="#" class="fa fa-link"></a>
                                        <h4>Frontend Statistic Dashboard</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="iso-box phablet col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-thumb">
                                    <img src="images/gallery/Capture1.jpg" class="fluid-img" alt="portfolio img">
                                    <div class="portfolio-overlay">
                                        <a href="#" class="fa fa-search"></a>
                                        <a href="#" class="fa fa-link"></a>
                                        <h4>Mobile Dashboard</h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- end portfolio -->

<!-- start contact -->
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 wow fadeInLeft" data-wow-delay="0.6s">
                <h2><strong>SEW</strong></h2>
                <p>Real-time patient monitoring system that integrates vital sign sensors to allow remote monitoring of patient status within the hospital premises.</p>
                <ul class="social-icon">
                    <li>
                        <a href="#" class="fa fa-facebook"></a>
                    </li>
                    <li>
                        <a href="#" class="fa fa-twitter"></a>
                    </li>
                    <li>
                        <a href="#" class="fa fa-instagram"></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-4 wow fadeIn" data-wow-delay="0.9s">
                <address>
                    <h3>Visit Office</h3>
                    <p><i class="fa fa-map-marker too-icon"></i> Sinan Building 2nd Floor, Bole Subcity, Addis Ababa, Ethiopia</p>
                    <!--<p><i class="fa fa-phone too-icon"></i> </p>-->
                    <p><i class="fa fa-envelope-o too-icon"></i> info@gebeya.com</p>
                </address>
            </div>
            {{ Form::open(['route' => 'frontend.contact', 'class' => 'col-md-6 col-sm-4','id'=>'contact-form', 'role' => 'form', 'method' => 'post']) }}


                <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-delay="0.3s">
                    <input name="name" type="text" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-delay="0.3s">
                    <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="col-md-12 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
                    <textarea name="message" rows="5" class="form-control" id="message" placeholder="Message"></textarea>
                </div>
                <div class="col-md-offset-9 col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                    <input name="submit" type="submit" class="form-control" id="submit" value="Send">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end contact -->

<!-- start google map -->
<div class="google_map">
    <div id="map-canvas"></div>
</div>
<!-- end google map -->

<!-- start footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7">
                <p>Copyright &copy; 2017 SEW</p>
            </div>
            <div class="col-md-4 col-sm-5">
                <ul class="social-icon">
                    <li>
                        <a href="#" class="fa fa-facebook"></a>
                    </li>
                    <li>
                        <a href="#" class="fa fa-twitter"></a>
                    </li>
                    <li>
                        <a href="#" class="fa fa-instagram"></a>
                    </li>
                    <li>
                        <a href="#" class="fa fa-pinterest"></a>
                    </li>
                    <li>
                        <a href="#" class="fa fa-google"></a>
                    </li>
                    <li>
                        <a href="#" class="fa fa-github"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->


<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- isotope -->
<script src="js/isotope.js"></script>
<!-- images loaded -->
<script src="js/imagesloaded.min.js"></script>
<!-- wow -->
<script src="js/wow.min.js"></script>
<!-- smoothScroll -->
<script src="js/smoothscroll.js"></script>
<!-- jquery flexslider -->
<script src="js/jquery.flexslider.js"></script>
<!-- custom -->
<script src="js/custom.js"></script>

</body>

</html>