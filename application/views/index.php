<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Alief Febrina Rachmawati</title>
  <link href="<?php echo base_url()."aset/"; ?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()."aset/"; ?>css/animate.min.css" rel="stylesheet"> 
  <link href="<?php echo base_url()."aset/"; ?>css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url()."aset/"; ?>css/lightbox.css" rel="stylesheet">
  <link href="<?php echo base_url()."aset/"; ?>css/main.css" rel="stylesheet">
  <link id="css-preset" href="<?php echo base_url()."aset/"; ?>css/presets/preset1.css" rel="stylesheet">
  <link href="<?php echo base_url()."aset/"; ?>css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="<?php echo base_url()."aset/"; ?>images/favicon.ico">
</head><!--/head-->

<body>

	<!--.preloader-->
	<div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
	<!--/.preloader-->

	<header id="home">
		<?php $this->load->view('slidertop.php'); ?>
		<!--/#home-slider-->
		<div class="main-nav">
			<div class="container">
				<?php $this->load->view('navbar.php') ;?>
			</div>
		</div><!--/#main-nav-->
	</header><!--/#home-->
	
	<section id="services">
		<?php $this->load->view('service.php'); ?>
	</section><!--/#services-->
	
	<section id="about-us" class="parallax">
		<?php $this->load->view('aboutus.php'); ?>
	</section><!--/#about-us-->

	<section id="portfolio">
		<?php $this->load->view('portofolio.php'); ?>
	</section><!--/#portfolio-->

	<section id="team">
		<?php $this->load->view('team.php'); ?>
	</section><!--/#team + pricing + features + twitter-->

	<section id="blog">
		<?php $this->load->view('blog.php'); ?>
	</section><!--/#blog-->

	<section id="contact">
		<?php $this->load->view('contact.php'); ?>
	</section><!--/#contact-->
	<footer id="footer">
		<?php $this->load->view('footer.php');?>
	</footer>

  <script type="text/javascript" src="<?php echo base_url()."aset/"; ?>js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url()."aset/"; ?>js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="<?php echo base_url()."aset/"; ?>js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()."aset/"; ?>js/wow.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()."aset/"; ?>js/mousescroll.js"></script>
  <script type="text/javascript" src="<?php echo base_url()."aset/"; ?>js/smoothscroll.js"></script>
  <script type="text/javascript" src="<?php echo base_url()."aset/"; ?>js/jquery.countTo.js"></script>
  <script type="text/javascript" src="<?php echo base_url()."aset/"; ?>js/lightbox.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()."aset/"; ?>js/main.js"></script>

</body>
</html>