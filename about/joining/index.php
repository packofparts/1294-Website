<?php    

    /**
    *The front page to 1294's website
    *
    *@author Alex Friedberg <blueal22@hotmail.com>
    *@link https://github.com/blueal/FRC-Team-1294
    */
    require'includes/upper_header.php'; 
?>
    <title>1294 | Join the Team</title>
    <meta name="description" content="Want to join Top Gun Robotics? This is the place to do it."/>

    <!--link rel="stylesheet" type="text/css" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
    <link rel="stylesheet" type="text/css" href="/WOWSlider/engine1/style.min.css" /--->
<?php
    require'includes/lower_header.php';
?>



<div class="body-container" style="padding-bottom: 0px">
    <!-- Main jumbotron-->
    <div class="jumbotron">
        <div class="container">
            <img class="img-responsive" id="eastlake-logo" alt="Eastlake Logo" src="/img/Wolf-Image.svg"/>
            <h1>We are Top Gun Robotics</h1>
            <p>We are a high school robotics team located at <a href="http://www.lwsd.org/school/ehs/Pages/default.aspx">Eastlake High School <span class="glyphicon glyphicon-new-window"></span></a> in Sammamish, Washington that has been participating in FRC since 2004.</p>
            <p><i>"Our goal is to transform our culture by creating a world where science and technology are celebrated and where young people dream of becoming science and technology leaders."- Dean Kamen, Founder of FIRST Robotics</i></p>
            <p><a class="btn btn-primary btn-lg learn-more" href="/about/team/">Learn more &raquo;</a></p>
        </div>
    </div>
</div>

<?php include 'includes/live_stream.php'  ?>

<div class="body-container">
    <div class="container">
        <!-- Example row of columns -->
        <div class="row-fluid">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
</div>
<div class="body-container">
    <div class="container">
        <div class="row-fluid">
            <div class="col-md-4 col-md-offset-1">
                
            </div>

            <div class="col-md-4 col-md-offset-2">
                
            </div>
        </div>
    </div>
</div>
<?php 
    $ExtraFooterTags='';

    require'includes/footer.php';
?>