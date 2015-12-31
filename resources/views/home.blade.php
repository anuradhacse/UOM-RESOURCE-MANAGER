<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title> Responsive Single Page Template : Design View</title>
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    {!! HTML::style(asset(('assets/css/bootstrap.css'))) !!}
    {!! HTML::style(asset(('assets/css/font-awesome.min.css'))) !!}
    {!! HTML::style(asset(('assets/vegas/jquery.vegas.min.css'))) !!}
    {!! HTML::style(asset(('assets/css/style.css'))) !!}

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body >
<div class="navbar navbar-inverse navbar-fixed-top scrollclass" >
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">University of Moratuwa</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">


                <li><div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            View Resources <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="http://localhost/uom2/public/viewRoom" >Lecture Rooms</a></li>
                            <li><a href="http://localhost/uom2/public/viewLab">Labs</a></li>
                            <li><a href="http://localhost/uom2/public/viewVehicle">Vehicles</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">All</a></li>
                        </ul>
                    </div></li>

                <li><div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Book Online <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#" href="#" data-toggle="modal" data-target="#lec-book-modal">Lecture Rooms</a></li>
                            <li><a href="#">Labs</a></li>
                            <li><a href="http://localhost/uom2/public/vehicle">Vehicles</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Other</a></li>
                        </ul>
                    </div></li>
                <li><div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About Us <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Mission</a></li>
                            <li><a href="#">Vission</a></li>
                            <li><a href="#">Contact Us</a></li>

                        </ul>
                    </div></li>


            </ul>
        </div>

    </div>
</div>



<!--HOME SECTION-->
<div class="container" id="home">
    <div class="row text-center scrollclass">
        <div class="col-md-12">
            <span class="head-main">Resource Management System</span>
            <h3 class="head-last">The Simpliest way to make a reservation hurry up</h3>
            <a href="#about" class="btn btn-primary btn-lg ">BOOK NOW !!</a>
        </div>
    </div>
</div>
<!--END HOME SECTION-->

<!--ABOUT SECTION-->
<section class="for-full-back color-bg-one" id="about">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-8 col-md-offset-2 ">
                <h1>About Our Team</h1>
            </div>
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2 ">
                    <h5>



                    </h5>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="for-full-back color-white" id="about-team">
    <div class="container">
        <div class="row text-center g-pad-bottom">
            <div class="col-md-8 col-md-offset-2 ">
                <h3>OUR TEAM MEMBERS</h3>
                <h5>
                </h5>
            </div>

        </div>
        <div class="row text-center g-pad-bottom">

            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-danger">
                    BSC in Computer Science and Engineering
                    University of Moratuwa
                    130227F
                </div>
                <div class="team-member">
                    <img src="assets/img/team/1.png" class="img-circle"    alt="">
                    <h3><strong>Software Tech</strong></h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-success">
                    BSC in Computer Science and Engineering
                    University of Moratuwa
                    130048M
                </div>
                <div class="team-member">
                    <img src="assets/img/team/2.png" class="img-circle"  alt="">
                    <h3><strong>Software Tech</strong></h3>
                </div>


            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-warning">
                    BSC in Computer Science and Engineering
                    University of Moratuwa
                    130334F
                </div>
                <div class="team-member">
                    <img src="assets/img/team/4.png" class="img-circle"   alt="">
                    <h3><strong>Web Designer </strong></h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-info">
                    BSC in Computer Science and Engineering
                    University of Moratuwa
                    130078G
                </div>
                <div class="team-member">

                    <img src="assets/img/team/3.png" class="img-circle"    alt="">
                    <h3><strong>Graphic Designer </strong></h3>
                </div>
            </div>


        </div>


    </div>
</section>
<!--END ABOUT SECTION-->

<!--CLIENT TESTIMONIALS SECTION-->
<section id="clients-testimonial">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 ">
                <h1>User Feedbacks</h1>
                <div id="carousel-example" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="container center">
                                <div class="col-md-6 col-md-offset-3 slide-custom">

                                    <h4><i class="fa fa-quote-left"></i> I am from CSE Department, and happy to inform that this helps me to reserve our university bus quickly for our Volleyball match <i class="fa fa-quote-right"></i></h4>
                                    <div class="user-img pull-right">
                                        <img src="assets/img/user.gif" alt="" class="img-u image-responsive"  />
                                    </div>
                                    <h5 class="pull-right"><strong class="c-black">Hishara Yasas</strong></h5>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container center">
                                <div class="col-md-6 col-md-offset-3 slide-custom">
                                    <h4> <i class="fa fa-quote-left"></i>I am from Civil Engineering Department, and this system helps me to reserve a lecture hall for problem discussion among our batch mates <i class="fa fa-quote-right"></i></h4>
                                    <div class="user-img pull-right">
                                        <img src="assets/img/user2.png" alt="" class="img-u image-responsive"  />
                                    </div>
                                    <h5 class="pull-right"><strong class="c-black">Upamal Basnayaka</strong></h5>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container center">
                                <div class="col-md-6 col-md-offset-3 slide-custom">
                                    <h4><i class="fa fa-quote-left"></i>I am from CSE Department, and happy to inform that this helps me to reserve our university bus quickly for our Volleyball match<i class="fa fa-quote-right"></i></h4>
                                    <div class="user-img pull-right">
                                        <img src="assets/img/user.gif" alt="" class="img-u image-responsive"  />
                                    </div>
                                    <h5 class="pull-right"><strong class="c-black">Hishara Yasas</strong></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END CLIENT TESTIMONIALS SECTION-->




<!--SOCIAL SECTION-->
<section id="social-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 scl scl-dark-bk">
                <h4>FACEBOOK</h4>
                <p class="text-center"><a href="#"><i class="fa fa-facebook fa-5x"></i></a></p>
            </div>
            <div class="col-md-4 scl">
                <h4 >TWITTER</h4>
                <p class="text-center"><a href="#"><i class="fa fa-twitter fa-5x"></i></a></p>
            </div>
            <div class="col-md-4 scl scl-dark-bk">
                <h4 >GOOGLE +</h4>
                <p class="text-center"><a href="#"><i class="fa fa-google-plus fa-5x"></i></a></p>
            </div>
        </div>
    </div>
</section>

<!--END SOCIAL SECTION-->
<!--FOOTER SECTION -->
<div class="for-full-back" id="footer">
    2015  All Right Reserved | by: <a href="#" target="_blank" style="color:#fff" >www.uom.ac.lk</a>

</div>
<div class="modal fade" id="lec-book-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Sign In</h4>
            </div>
            {!!Form::open(array('url'=>'/signin','method'=>'post','id'=>'signInForm'))!!}
            <div class="modal-body">
                <feildset>
                    <div class="form-group col-lg-6 col-lg-offset-3">
                        <input type="text" class="form-control" id="username" name="username" placeholder="username" required >
                    </div>
                    <div class="form-group col-lg-6 col-lg-offset-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="password" required autocomplete="off">
                    </div>

                </feildset>
            </div>
            <div class="modal-footer">
                <button type="button"  class="btn btn-default" data-dismiss="modal">cancel</button>
                <button type="submit" id='SIgnInSubmit' class="btn btn-primary">submit</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<!-- END FOOTER SECTION -->

<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
<!-- CORE JQUERY  -->
<script src="assets/plugins/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP CORE SCRIPT   -->
<script src="assets/plugins/bootstrap.js"></script>
<!-- VEGAS SLIDESHOW SCRIPTS -->
<script src="assets/plugins/vegas/jquery.vegas.min.js"></script>
<!-- SCROLL SCRIPTS -->
<script src="assets/plugins/jquery.easing.min.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>

</body>
</html>
