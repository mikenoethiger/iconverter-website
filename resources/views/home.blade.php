<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Iconverter - Mobile Icon Generator</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="/startbootstrap-freelancer/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/startbootstrap-freelancer/css/freelancer.css" rel="stylesheet">

    <link href="/css/app.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/startbootstrap-freelancer/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
          type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#page-top">Iconverter</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#portfolio">How does it work?</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-md-offset-3">
                @if($errors->has('image'))
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>
                        {{ $errors->first('image') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-text">
                    <span class="name">Iconverter</span>
                    <hr class="star-light">
                    <span class="skills">Give me an image and I'll do the rest.</span>
                </div>
                <br>

                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" onclick="$('#icon').click(); return false;" class="btn btn-lg btn-outline">
                        <i class="fa fa-space-shuttle"></i> CONVERT
                    </a>
                </div>
                <form method="post" action="/icon" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="file" class="hidden" id="icon" name="image"
                           onchange="this.form.submit();this.form.reset();$('.alert').remove();">
                </form>
            </div>
        </div>
    </div>
</header>

<!-- Portfolio Grid Section -->
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>How does it work?</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-cloud-upload fa-stack-1x fa-inverse"></i>
                </span>

                <p>First you upload an<br> image of your choice.</p>
            </div>
            <div class="col-xs-12 text-center">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-cloud-download fa-stack-1x fa-inverse"></i>
                </span>

                <p>I will then generate<br> icons in all different formats<br> for android and iOS.</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Maxim Kott</h3>

                    <p>Developer and <br>founder of iconverter</p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Iconverter</h3>
                    <ul class="list-inline">
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-github"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Mike Nöthiger</h3>

                    <p>Programmer and <br>iconverter contributor.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; iconverter 2015
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll visible-xs visible-sm">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<!-- jQuery -->
<script src="/startbootstrap-freelancer/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/startbootstrap-freelancer/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="/startbootstrap-freelancer/js/classie.js"></script>
<script src="/startbootstrap-freelancer/js/cbpAnimatedHeader.js"></script>

<!-- Contact Form JavaScript -->
<script src="/startbootstrap-freelancer/js/jqBootstrapValidation.js"></script>
<script src="/startbootstrap-freelancer/js/contact_me.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/startbootstrap-freelancer/js/freelancer.js"></script>

</body>

</html>
