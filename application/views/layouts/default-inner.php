<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Modern Business - Start Bootstrap Template</title>

	<!-- Bootstrap Core CSS -->
	<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="<?= base_url('assets/css/modern-business.css') ?>" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="<?= base_url('assets/font-awesome-4.1.0/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- jQuery Version 1.11.0 -->
	<script src="<?= base_url('assets/js/jquery-1.11.0.js') ?>"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.navbar-main a').hover(function () {
				var el = $(this).parent();
				el.children('.dropdown-menu').show();
				el.siblings().children('.dropdown-menu').hide();
			}, function () {
				var el = $(this).parent();
				el.children('.dropdown-menu').show();
				el.siblings().children('.dropdown-menu').hide();
				var $submenu = el.children('.dropdown-menu');
				$submenu.hide();
			});
		});
	</script>
	<style type="text/css">
		body {
			padding: 10px 50px 10px 50px;
		}
		
		footer { margin: 20px 0; }
		
		.nav-bottom-login { border:0px; background-color:transparent !important; }
		
		.navbar-main {
			background-color:#96001e;
			margin:7.5px -15px;
			width:250px;
		}
		.navbar-main a {
			height:40px; padding:0px !important; text-indent:-4000px;
			background-image: url('../assets/images/main/menu.gif');
		}
		.navbar-main a.dreamzone { background-position:0px 0px; width:200px; }
		
		.navbar-main .dropdown-menu { background-color:#ddd; padding:5px; }
		.navbar-main .dropdown-menu h4 { color:#96001e; margin-top:0px; }
		.navbar-main .dd-dreamzone { margin-left:15px; }
		.navbar-main .dd-consult { margin-left:55px; }
		.navbar-main .dd-event { margin-left:7px; }
		.navbar-main .dd-souvenirs { margin-left:22px; }
		
		.home-logo-inner { position:absolute; top:0px; right:0px; }
		.home-logo-inner-box { width:336px; height:99px; margin:0 auto; position:relative; }
		.home-logo-inner-box a {
			display:block; position:absolute; text-indent:-4000px; border:0px solid #f00;
			background-image:url('../assets/images/home_logo_small.gif');
		}
		.home-logo-inner-box a.dreamzone {
			top: 0px; left: 165px;
			width: 140px; height:16px;
			background-position:-165px 0px;
		}
		.home-logo-inner-box a.dreamzone:hover { background-position:-165px -99px; }
		
		.home-logo-inner-box a.matching {
			top: 16px; left: 36px;
			width: 267px; height:39px;
			background-position:-372px -16px;
			
		}
		.home-logo-inner-box a.matching:hover { background-position:-372px -313px; }
		
		.home-logo-inner-box a.consult {
			top: 55px; left: 0px;
			width: 170px; height:14px;
			background-position:0px -55px;
		}
		.home-logo-inner-box a.consult:hover { background-position:0px -154px; }
		
		.home-logo-inner-box a.souvenir {
			top: 57px; left: 174px;
			width: 162px; height:24px;
			background-position:-174px -57px;
		}
		.home-logo-inner-box a.souvenir:hover { background-position:-174px -156px; }
		
		.home-logo-inner-box a.event {
			top: 82px; left: 153px;
			width: 65px; height:17px;
			background-position:-153px -82px;
		}
		.home-logo-inner-box a.event:hover { background-position:-153px -181px; }
		
		.nav-bottom-login a.b-login {
			width:78px; height:17px;
			display:block; position:absolute; text-indent:-4000px; border:0px solid #f00;
			background-image:url('../assets/images/main/b-login.gif');
		}
		.nav-bottom-login a.b-login:hover { background-position:0px -17px; }
		
		
		.hot-topic-container div.topic-child {
			border:1px solid #96001e;
			-moz-border-radius: 10px;
			border-radius: 10px;
			
			padding:10px; margin-bottom:5px;
		}
		
		table, div {
			font-size:small;
		}
		th { font-weight:bold; color:#96001e; padding-bottom:5px; }
		
		hr.footer-sep {
			margin-top:2px;
			border-top:4px solid #96001e;
		}
		
		ul.nav-footer{
			list-style:none;
			height:40px;
			background:#000 url('../assets/images/nav-footer.gif') no-repeat 0px 0px;
			margin-bottom:2px;
		}
	</style>
</head>

<body>

	<!-- Navigation -->
	<nav class="navbar" role="navigation">
		<div class="container">
			<div class="header-logo">
				<img src="<?= base_url('assets/images/main/logo.gif') ?>" />
			</div>
			
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!--
				<a class="navbar-brand" href="index.html">Start Bootstrap</a>
				-->
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-main" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li>
						<a href="dreamzone" class="dreamzone">Dreamzone</a>
						<ul class="dropdown-menu dd-dreamzone">
							<li><h4>แดนละเมอ</h4></li>
							<li>
								พื้นที่แสดงความประทับใจของคุณต่อคนที่ได้พบเจอและอยากจะรู้จักระหว่างการเดินทาง
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
			<div class="home-logo-inner">
				<div class="home-logo-inner-box">
					<a href="dreamzone" class="dreamzone">DREAM ZONE</a>
					<a href="matching" class="matching">MATCING</a>
					<a href="consult" class="consult">CONSULT</a>
					<a href="souvenir" class="souvenir">SOUVENIR</a>
					<a href="event" class="event">EVENT</a>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</nav>

	<!-- Page Content -->
	<div class="container">
		
		<?=$view?>

		<hr>

		<!-- Footer -->
		<footer>
			<div class="row">
				<div class="col-lg-12">
					<p>Copyright &copy; Your Website 2014</p>
				</div>
			</div>
		</footer>
		
		<nav class="navbar navbar-default navbar-fixed-bottom nav-bottom-login" role="navigation">
			<div class="container">
				<div style="width:78px; height:17px; margin:0px auto;">
					<a href="#login" class="b-login">LOG IN</a>
					
				</div>
				
			</div>
		</nav>

	</div>
	<!-- /.container -->
	
	<?php
		$this->load->view('partials/popup');
	?>
	
</body>

</html>
