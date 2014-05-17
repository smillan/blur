<?php   require_once("admin/bootstrap.php"); ?>
<?php
// Start the buffering //
ob_start();
?>


<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php echo ".proro.".$params["name"];?></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="http://localhost:8888/blur/stylesheets/base.css">
	<link rel="stylesheet" href="http://localhost:8888/blur/stylesheets/skeleton.css">
	<link rel="stylesheet" href="http://localhost:8888/blur/stylesheets/layout.css">
	<link rel="stylesheet" href="http://localhost:8888/blur/stylesheets/blur.css">
	<link rel="stylesheet" type="text/css" href="../..stylesheets/default.css" />



<!-- Contact Form CSS files -->
<link type='text/css' href='http://localhost:8888/blur/stylesheets/basic.css' rel='stylesheet' media='screen' />	

	<style type="text/css" >
	
		  @font-face {
		    font-family: 'CaeciliaLTStd75Bold';
		    src: url('http://localhost:8888/blur/fonts/caecilialtstd-bold.eot');
		    src: url('http://localhost:8888/blur/fonts/caecilialtstd-bold.eot') format('embedded-opentype'),
		         url('http://localhost:8888/blur/fonts/caecilialtstd-bold.woff') format('woff'),
		         url('http://localhost:8888/blur/fonts/caecilialtstd-bold.ttf') format('truetype'),
		         url('http://localhost:8888/blur/fonts/caecilialtstd-bold.svg#CaeciliaLTStd75Bold') format('svg');
		}

		@font-face {
		    font-family: 'CaeciliaLTStd45Light';
		    src: url('http://localhost:8888/blur/fonts/caecilialtstd-light.eot');
		    src: url('http://localhost:8888/blur/fonts/caecilialtstd-light.eot') format('embedded-opentype'),
		         url('http://localhost:8888/blur/fonts/caecilialtstd-light.woff') format('woff'),
		         url('http://localhost:8888/blur/fonts/caecilialtstd-light.ttf') format('truetype'),
		         url('http://localhost:8888/blur/fonts/caecilialtstd-light.svg#CaeciliaLTStd45Light') format('svg');
		}
		
		@font-face {
		    font-family: 'CaeciliaLTStd85Heavy';
		    src: url('http://localhost:8888/blur/fonts/caecilialtstd-heavy.eot');
		    src: url('http://localhost:8888/blur/fonts/caecilialtstd-heavy.eot') format('embedded-opentype'),
		         url('http://localhost:8888/blur/fonts/caecilialtstd-heavy.woff') format('woff'),
		         url('http://localhost:8888/blur/fonts/caecilialtstd-heavy.ttf') format('truetype'),
		         url('http://localhost:8888/blur/fonts/caecilialtstd-heavy.svg#CaeciliaLTStd85Heavy') format('svg');
		}

	  </style>
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- JS
	================================================== -->

	<script src="http://localhost:8888/blur/js/modernizr.custom.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		 <script src="http://localhost:8888/blur/js/jquery.modal.js" type="text/javascript" charset="utf-8"></script>

	
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

<?php include "includes/header_d.php";?>

<?php include "includes/reelBody.php";?>

<?php include "includes/footer_d.php";?>
<!-- 
 -->


	<!-- container -->


<!-- End Document
================================================== -->
<script src="http://localhost:8888/blur/js/toucheffects.js"></script>

</body>
</html>


<?php
//echo $nombre;
// Get the content that is in the buffer and put it in your file //
file_put_contents("showReels/".$nombre.".php", ob_get_contents());
?>
