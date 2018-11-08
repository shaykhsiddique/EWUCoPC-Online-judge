<?php include 'config/config_DB_post.php' ?>
<?php include 'lib/database_class.php' ?>
<?php include 'lib/post_formator.php' ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>EWUCoPC Online Judge</title>
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- custom css files -->
    <link rel="stylesheet" type="text/css" href="layouts/css/header_style.css">
    <link rel="stylesheet" type="text/css" href="layouts/css/home_panel.css">
    <link rel="stylesheet" type="text/css" href="layouts/css/slide-style.css">
    <link rel="stylesheet" type="text/css" href="layouts/css/post.css">
    <link rel="stylesheet" type="text/css" href="layouts/css/login.css">
    <link rel="stylesheet" type="text/css" href="layouts/css/registration.css">
    <!-- custom css files end -->

  </head>
<?php 
    $db_post = new Database();
    $fm = new post_format();
  ?>

  <body>

  <!-- main Navigation bar start -->
    <nav class="navbar navbar-default navbar-fixed-top navbar_style" style="border-radius: 10px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand nevbar_fontstyle" href="index.php"><b><strong>EWUCoPC Online Judge</strong></b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <div class="nevbar_fontstyle">
      <ul class="nav navbar-nav navbar-left">
        <li><a class="navbar_style"  href="contests.php">CONTEST</a></li>
        <li><a class="navbar_style" href="problems.php">PROBLEMS</a></li>
        <li><a class="navbar_style" href="#tour">SUBMISSIONS</a></li>
        <li><a class="navbar_style" href="#contact">ABOUT</a></li>
      </ul>
       <ul class="nav navbar-nav navbar-right">
        <li><a class="navbar_style2" href="register.php">REGISTER</a></li>
        <li><a class="navbar_style2" href="login.php">LOGIN</a></li>
      </ul>
      </div>
    </div>
  </div>
</nav>
