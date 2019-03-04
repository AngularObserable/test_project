<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>One Page Bootstrap Template</title>

    <!-- Bootstrap -->
    <link href="{{asset('assets/fontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/fontend/css/font-awesome.min.css')}}">
    <link href="{{asset('assets/fontend/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fontend/css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/fontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fontend/css/style.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="site-logo">
                    <a href="index.html" class="brand">OnePage</a>
                </div>
            </div>

            <div class="col-md-10">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <!-- /.Navbar-collapse -->
            </div>
        </div>
    </div>
</nav>

<div id="home">
    <div class="slider">
        <div id="about-slider">
            <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators visible-xs">
                    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-slider" data-slide-to="1"></li>
                    <li data-target="#carousel-slider" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{asset('assets/fontend/images/6.jpg')}}" class="img-responsive" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('assets/fontend/images/7.jpg')}}" class="img-responsive" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('assets/fontend/images/5.jpg')}}" class="img-responsive" alt="">
                    </div>
                </div>

                <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>

                <a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div> <!--/#carousel-slider-->
        </div><!--/#about-slider-->
    </div>
</div>

<section id="about">
    <div class="container">
        <div class="center">
            <div class="col-md-6 col-md-offset-3">
                <h2>About Us</h2>
                <hr>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">


            <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="{{asset('assets/fontend/images/portfolio/recent/item1.png')}}" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3><a href="#">Business theme</a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                            <a class="preview" href="{{asset('assets/fontend/images/portfolio/full/item1.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>
            </div><!--/.portfolio-item-->>

            <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="{{asset('assets/fontend/images/portfolio/recent/item1.png')}}" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3><a href="#">Business theme</a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                            <a class="preview" href="{{asset('assets/fontend/images/portfolio/full/item1.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>
            </div><!--/.portfolio-item-->>

            <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="{{asset('assets/fontend/images/portfolio/recent/item1.png')}}" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3><a href="#">Business theme</a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                            <a class="preview" href="{{asset('assets/fontend/images/portfolio/full/item1.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>
            </div><!--/.portfolio-item-->


        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#about-->

<section id="portfolio">
    <div class="container">
        <div class="center">
            <div class="col-md-6 col-md-offset-3">
                <h2>Portfolio</h2>
                <hr>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-lg-12">
            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Creative</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".html">Photography</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".wordpress">Web Development</a></li>
            </ul><!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items">
                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{asset('assets/fontend/images/portfolio/recent/item1.png')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="{{asset('assets/fontend/images/portfolio/full/item1.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{asset('assets/fontend/images/portfolio/recent/item2.png')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="{{asset('assets/fontend/images/portfolio/full/item2.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{asset('assets/fontend/images/portfolio/recent/item3.png')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="{{asset('assets/fontend/images/portfolio/full/item3.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{asset('assets/fontend/images/portfolio/recent/item4.png')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="{{asset('assets/fontend/images/portfolio/full/item4.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{asset('assets/fontend/images/portfolio/recent/item5.png')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="{{asset('assets/fontend/images/portfolio/full/item5.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{asset('assets/fontend/images/portfolio/recent/item6.png')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="{{asset('assets/fontend/images/portfolio/full/item6.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{asset('assets/fontend/images/portfolio/recent/item7.png')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="{{asset('assets/fontend/images/portfolio/full/item7.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{asset('assets/fontend/images/portfolio/recent/item8.png')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="{{asset('assets/fontend/images/portfolio/full/item8.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->
                </div>
            </div>
        </div>
    </div>
</section><!--/#portfolio-item-->

<section id="features">
    <div class="container">
        <div class="row">
            <div class="center">
                <div class="col-md-6 col-md-offset-3">
                    <h2>Features</h2>
                    <hr>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                </div>
            </div>

            <div class="col-md-4 wow fadeInLeft">
                <h3>Responsive</h3>
                <img src="{{asset('assets/fontend/images/portfolio/recent/item4.png')}}" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    non cupidatat skateboard dolor brunch.</p>
            </div>

            <div class="col-md-4 wow fadeInUp">
                <h3>Web Design</h3>
                <img src="{{asset('assets/fontend/images/portfolio/recent/item5.png')}}" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    non cupidatat skateboard dolor brunch.</p>
            </div>

            <div class="col-md-4 wow fadeInRight">
                <h3>Easy Customize</h3>
                <img src="{{asset('assets/fontend/images/portfolio/recent/item6.png')}}" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    non cupidatat skateboard dolor brunch.</p>
            </div>
        </div>
    </div>
</section>


<div class="map">
    <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kuningan,+Jakarta+Capital+Region,+Indonesia&amp;aq=3&amp;oq=kuningan+&amp;sll=37.0625,-95.677068&amp;sspn=37.410045,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Kuningan&amp;t=m&amp;z=14&amp;ll=-6.238824,106.830177&amp;output=embed">
    </iframe>
</div>
<section id="contact">
    <div class="contact-page">
        <div class="container">
            <div class="center">
                <h2>Sign up to be notified</h2>
            </div>

            <div class="row contact-wrap">
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="wow fadeInDown">
                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="form-group">
                                <label>Name *</label>
                                <input type="text" name="name" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="email" name="email" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Company Name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInRight">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Subject *</label>
                                <input type="text" name="subject" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Message *</label>
                                <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!--/#contact-page-->
</section>

<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="text-center">
                    <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
                </div>
                &copy; 2015 <a target="_blank" href="http://bootstraptaste.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">bootstraptaste</a>. All Rights Reserved.
                <!--
                    All links in the footer should remain intact.
                    Licenseing information is available at: http://bootstraptaste.com/license/
                    You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=OnePage
                -->
            </div>

            <div class="top-bar">
                <div class="col-lg-12">
                    <div class="social">
                        <ul class="social-share">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!--/#footer-->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('assets/fontend/js/jquery.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('assets/fontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/fontend/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('assets/fontend/js/jquery.isotope.min.js')}}"></script>
<script src="{{asset('assets/fontend/js/wow.min.js')}}"></script>
<script src="{{asset('assets/fontend/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('assets/fontend/js/main.js')}}"></script>
</body>
</html>