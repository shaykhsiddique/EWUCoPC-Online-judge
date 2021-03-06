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
    <title>free bootstrap template-Beta Landing Page</title>
     <!--REQUIRED STYLE SHEETS-->   
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- VEGAS STYLE CSS -->
    <link href="assets/scripts/vegas/jquery.vegas.min.css" rel="stylesheet" />
       <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
     <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    </head>
<body>

    <div class="loader"></div>

    <!-- MAIN CONTAINER -->
        
        <!-- NAVBAR SECTION -->
        <?php include 'layouts/header.php' ?>
     <!-- END NAVBAR SECTION -->

         <!-- MAIN ROW SECTION -->
         <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-12">
                <div id="movingicon">
                      <i class="fa fa-flask fa-spin icon-color"></i>
                    <br />   
                  <div id="headLine"></div>   
                </div>              
            </div>
             <!--/. HEAD LINE DIV-->
            <div class="col-md-8 col-md-offset-2" >
                <div id="counter"></div>
                        <div id="counter-default" class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="inner">
                                    <div id="day-number" class="timer-number"></div>
                                    <div class="timer-text">DAYS</div>
                                   
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="inner">
                                    <div id="hour-number" class="timer-number"></div>
                                    <div class="timer-text">HOURS</div>
                                    
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="inner">
                                    <div id="minute-number" class="timer-number"></div>
                                    <div class="timer-text">MINUTES</div>
                                  
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="inner">
                                    <div id="second-number" class="timer-number"></div>
                                    <div class="timer-text">SECOND</div>

                                   

                                </div>
                            </div>
                        </div>
                
            </div>
               <!--/. COUNTER DIV-->
            <div class="col-md-6 col-md-offset-3">    
               
                
             <!--/. SUBSCRIBE DIV-->
            <div class="col-md-6 col-md-offset-3">
                 <div class="social-links" >
                     <a href="https://www.facebook.com/groups/EWUCoPC" >  <i class="fa fa-facebook fa-4x"></i> </a>
                      
                      
                     </div>
            </div>
               <!--/. SOCIAL DIV-->
         </div>
     <!--END MAIN ROW SECTION -->
    </div>
      <!-- MAIN CONTAINER END -->
    <?php include 'layouts/footer.php' ?>
    <!--/. CONTACT MODAL POPUP DIV-->
     <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
     <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
     <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/plugins/bootstrap.js"></script>
    <!-- COUNTDOWN SCRIPTS -->
    <script src="assets/plugins/jquery.countdown.js"></script>
    <script src="assets/js/countdown.js"></script>
    <!-- VEGAS SLIDESHOW SCRIPTS -->
    <script src="assets/plugins/vegas/jquery.vegas.min.js"></script>
     <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom-image.js"></script>
     
</body>
</html>
