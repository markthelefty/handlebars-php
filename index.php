<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Handlebars | Demo</title>
    <meta name="viewport" content="width=device-width">
    <!-- Normalize CSS -->
    <link rel="stylesheet" src="http://normalize-css.googlecode.com/svn/trunk/normalize.css"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css"/>

    <!-- ///////////Core JS at Bottom/////////// -->
</head>

<body>
<script id="template" type="text/x-handlebars-template">

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a> 
            <a class="brand" href="#">{{projectName}}</a>

            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <strong class="caret"></strong></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>

                <form class="navbar-form pull-right">
                    <input class="span2" placeholder="Email" type="text">
                    <input class="span2" placeholder="Password" type="password"> 
                    <button class="btn" type="submit">Sign In</button>
                </form>
            </div><!--/.nav-collapse -->
        </div><!--/container-->
    </div><!--navbar-inner-->
</div><!--/navbar-->

<div class="container">
    <div class="hero-unit">
        <h1>{{heroHeadline}}</h1>
        <p>{{heroText}}</p>

        <p><a class="btn btn-primary btn-large">Learn more »</a></p>
    </div><!--/hero-unit-->

    <div class="row">
        <div class="span4">
            <h2>{{heading1}}</h2>
            <p>{{text1}}</p>

            <p><a class="btn" href="#">View details »</a></p>
        </div><!--/span4-->

        <div class="span4">
            <h2>{{heading2}}</h2>
            <p>{{text2}}</p>

            <p><a class="btn" href="#">View details »</a></p>
        </div><!--/span4-->

        <div class="span4">
            <h2>{{heading3}}</h2>
            <p>{{text3}}</p>

            <p><a class="btn" href="#">View details »</a></p>
        </div><!--/span4-->
    </div><!--/row-->
    <hr>

    <footer><p>&copy; 2013 Handlebars Demo</p></footer>
</div><!-- /container -->
</script>



<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/1.0.0/handlebars.min.js"></script>
<script src="js/<?php echo $_GET["content"]?>.js"></script>
</body>
</html>