<?php   require_once("admin/bootstrap.php"); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php echo ".proro.".$_GET['director'];?></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	
	<style type="text/css" >
	
		  @font-face {
		    font-family: 'CaeciliaLTStd75Bold';
		    src: url('fonts/caecilialtstd-bold.eot');
		    src: url('fonts/caecilialtstd-bold.eot') format('embedded-opentype'),
		         url('fonts/caecilialtstd-bold.woff') format('woff'),
		         url('fonts/caecilialtstd-bold.ttf') format('truetype'),
		         url('fonts/caecilialtstd-bold.svg#CaeciliaLTStd75Bold') format('svg');
		}

		@font-face {
		    font-family: 'CaeciliaLTStd45Light';
		    src: url('fonts/caecilialtstd-light.eot');
		    src: url('fonts/caecilialtstd-light.eot') format('embedded-opentype'),
		         url('fonts/caecilialtstd-light.woff') format('woff'),
		         url('fonts/caecilialtstd-light.ttf') format('truetype'),
		         url('fonts/caecilialtstd-light.svg#CaeciliaLTStd45Light') format('svg');
		}
		
		@font-face {
		    font-family: 'CaeciliaLTStd85Heavy';
		    src: url('fonts/caecilialtstd-heavy.eot');
		    src: url('fonts/caecilialtstd-heavy.eot') format('embedded-opentype'),
		         url('fonts/caecilialtstd-heavy.woff') format('woff'),
		         url('fonts/caecilialtstd-heavy.ttf') format('truetype'),
		         url('fonts/caecilialtstd-heavy.svg#CaeciliaLTStd85Heavy') format('svg');
		}

	  </style>
	  <link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">
	<link rel="stylesheet" href="stylesheets/blur.css">
	<link rel="stylesheet" href="stylesheets/blur_tablet.css">
	
	<link rel="stylesheet" href="stylesheets/resetI.css">

	<link rel="stylesheet" href="stylesheets/example.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src ="js/imgLiquid.js" type="text/javascript"></script>

	     


	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	
	
</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

<?php include "includes/header_divs.php";?>

<?php include "includes/home_image.php";?>

<?php include "includes/widgets.php";?>

<?php include "includes/footer_d.php";?>
<!-- 
 -->


	<!-- container -->


<!-- End Document
================================================== -->
</body>
</html>