<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("connect.php");?>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="image/x-icon" href="images/icon.png" rel="icon"><!--載入圖示-->
    <title>婉君踹共網</title>
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->


    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

     <!-- Preloader -->
    <link rel="stylesheet" href="css/preloader.css" type="text/css" media="screen, print"/>

    <!-- Icon Font-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <!-- Animate CSS-->
    <link rel="stylesheet" href="css/animate.css">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
</head>

<body>
  <!-- Preloader -->              
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- Home -->
  <header id="HOME" style="background-position: 50% -125px;">
	  <div class="section_overlay">
	    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
	         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	           <span class="sr-only">Toggle navigation</span>
	           <span class="icon-bar"></span>
	           <span class="icon-bar"></span>
	           <span class="icon-bar"></span>
	         </button>
	         <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
           </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#HOME">Home</a></li>
              <li><a href="#TIMELINE">Timeline</a></li>
              <li><a href="#CANDIDATE">Candidate</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
	    </nav> 

	    <div class="container">
	      <div class="row">
	        <div class="col-md-12 text-center">
	            <div class="home_text wow fadeInUp animated">
	                <h2 style="font-family:微軟正黑體;font-weight:bolder;font-size: 80px;">婉君踹共網</h2>
	                <p style="font-size: 30px;">Wen Jun Try Gong</p>
	                <img src="images/shape.png" alt="">                        
	            </div>
          </div>
	      </div>
	    </div>

	    <div class="container">
	      <div class="row">
	        <div class="col-md-12 text-center">
	          <div class="scroll_down">
              <a href="#TIMELINE"><img src="images/scroll.png" alt=""></a>
	            <h4>Scroll Down</h4>
	          </div>
	        </div>
	      </div>
	    </div>            
    </div>       
  </header><!-- Home End -->

  <!-- Timeline -->
  <section class="services" id="TIMELINE">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="work_title  wow fadeInUp animated">
            <div class="about_title">
                <h2 style="font-family:微軟正黑體;font-weight:bold;">時間軸</h2>
                <img src="images/shape.png" alt="">
            </div>
			       <iframe src="index_web.php" width="1500px" height="600px" style="border:none" class="container" scrolling="no"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section><!-- Timeline End -->

  <!-- Line Char -->
  <section class="about_us_area" id="CANDIDATE">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
        <div class="work_title wow fadeInRight animated">
          <div class="about_title">
            <h2 style="font-family:微軟正黑體;font-weight:bold;" id = "h2">總統候選人媒體關注度</h2>
            <img src="images/shape.png" alt="">
          </div>
          <div style="font-family: 微軟正黑體;">
            <button type="button" class="btn btn-default btn-lg" onclick="who('president')" style="outline: none;">總統</button>
            <button type="button" class="btn btn-default btn-lg" onclick="who('vice-president')" style="outline: none;">副總統</button>
          </div>
          <iframe id = "line" src="index_line.php" width="100%" height="350px" style="border:none" class="container" scrolling="no"></iframe>
        </div>
        </div>
      </div>
    </div>    
  </section><!-- Line Char End-->
    
  <!-- TESTIMONIAL -->
  <section class="testimonial text-center wow fadeInUp animated" id="TESTIMONIAL">
    <div class="container">
      <div class="icon">
        <i class="icon-quote"></i>
      </div>
      <div class="owl-carousel">
        <div class="single_testimonial text-center wow fadeInUp animated" >
          <p style="font-family:微軟正黑體;">「婉君」浪潮來襲，掀起網路蝴蝶效應<br/> 千萬「婉君」的心聲，就讓我來告訴你！</p>
          <h4 style="font-family:微軟正黑體; font-weight:bold;" >- 婉君踹共網</h4>
        </div>
        <div class="single_testimonial text-center">
          <p>"Wan-Jun" wave struck, setting off a network Butterfly Effect<br/>"Wan-Jun" of millions of voices, let me tell you!</p>
          <h4>- Wen Jun Try Gong</h4>
        </div>
      </div>            
    </div>
  </section><!-- TESTIMONIAL End -->

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
				  <div class="footer_logo   wow fadeInUp animated">
            <img src="images/logo.png" alt="">
          </div>
          <div class="copyright_text   wow fadeInUp animated">
            <p>Copyright <font style="font-family:微軟正黑體;font-weight:bold;">&copy; 婉君踹共網</font> 2015.All Right Reserved By <a href="http://www.im.cycu.edu.tw/" target="_blank">CYCU_IM</a></p>
            <p></p>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- Footer End -->

<!-- =========================
     SCRIPTS 
============================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript" src="js/canvasjs.min.js"></script>
    <script type="text/javascript">
    function who(w){
      if(w == 'president'){
        document.getElementById("line").src = "line.php?who=president";
        document.getElementById("h2").innerHTML = "總統候選人媒體關注度";
      }else if(w == 'vice-president'){
        document.getElementById("line").src = "line.php?who=vice-president";
        document.getElementById("h2").innerHTML = "副總統候選人媒體關注度";
      }

    }


    </script>
</body>

</html>