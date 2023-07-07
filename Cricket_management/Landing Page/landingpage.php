<?php

  ?>

<!DOCTYPE html>
<html>

<head>
  <title>Welcome | Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!----------- NAVBAR DIV -------------->

  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><img src="img/cricketlogo.png" alt=""></a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse-man">
        <ul class="nav navbar-nav navbar-right">
          <li><a class="" id="join-homepage" href="../Join/join.php">JOIN</a></li>
        </ul>
      </div>
    </div>
  </nav>




  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item">
        <img src="img/slide/image_01.jpg" alt="pic">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item active">
        <img src="img/slide/image_02.jpg" alt="pic">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="img/slide/image_03.jpg" alt="pic">
        <div class="carousel-caption">
        </div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <!----------- SECOND DIV -------------->

  <div id="all-about-second" class="padding">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <img src="img/cricket3.png" alt="cricket boy">
        </div>
        <div class="col-sm-6 text-center">
        <h2>All About our Cricket Website</h2>
          <p class="lead">The cricketers record management system is used to analyse create and store all the records of legendary cricketers this includes runs ,wickets matches ,high score and other attributes here we can maintain the database and view all the attributes related to a playe</p>
          </div>
      </div>
    </div>
  </div>


  <!----------- THIRD DIV -------------->

  <div class="padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <h4>Sample club</h4>
          <p>Leicestershire County Cricket Club is one of eighteen first-class county clubs within the domestic cricket structure of England and Wales. It represents the historic county of Leicestershire. It has also been representative of the county of Rutland. The club's limited overs team is called the Leicestershire Foxes.</p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <img src="img/cricket2.png" alt="" class="img-responsive">
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <h4>BCCI</h4>
          <p>The Board of Control for Cricket in India (BCCI) is the national governing body for cricket in India.
            Its headquarters are situated at Cricket centre, Wankhede Stadium in Mumbai.
            The BCCI is the richest governing body of cricket in the world and is part of the Big Three of international cricket, along with Cricket Australia and the England and Wales
             Cricket Board.</p>
             </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <img src="img/bg.png" alt="" class="img-responsive">
        </div>
      </div>
    </div>
  </div>


  <!----------- FOURTH DIV -------------->

  <div id="fixed">
    <div class="padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
          <h4>Another famous club</h4>
            <p>Hampshire County Cricket Club is one of eighteen first-class county clubs within the domestic cricket structure of England and Wales. It represents the historic county of Hampshire. Hampshire teams formed by earlier organisations, principally the Hambledon Club, always had first-class status and the same applied to the county club when it was founded in 1863.</p>
            
          </div>
          <div class="col-sm-6">
            <img src="img/cricket4.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-----------  FOOTER -------------->

  <footer class="container-fluid text-center">
    <div class="row">
      <div class="col-sm-4">
        <h3>Contact US at</h3>
        <br>
        <h4>1rn20cs044.gvmonish@gmail.com</h4>
        <h4>1rn20cs046.gauravr@gmail.com</h4>
      </div>

      <div class="col-sm-4">
        <h3>Connect</h3>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-google"></a>
        <a href="#" class="fa fa-linkedin"></a>
        <a href="#" class="fa fa-youtube"></a>
      </div>

      <div class="col-sm-4">
        <img src="img/slide/footer_01.png" alt="B" class="icon">
      </div>
    </div>
  </footer>
  <div class="copyright">
    <p>©2023 | All right reserved by MONISH and GAURAV</p>
  </div>
</body>

</html>
