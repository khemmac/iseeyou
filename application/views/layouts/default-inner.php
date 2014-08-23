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
			margin:7.5px -15px;;
		}
		.navbar-main a {
			height:40px; padding:0px !important; text-indent:-4000px;
			background-image: url('../assets/images/main/menu.gif');
		}
		.navbar-main a.dreamzone { background-position:0px 0px; width:200px; }
		.navbar-main a.matching { background-position:-200px 0px; width:175px; }
		.navbar-main a.consult { background-position:-370px 0px; width:255px; }
		.navbar-main a.event { background-position:-625px 0px; width:160px; }
		.navbar-main a.souvenirs { background-position:-785px 0px; width:170px; }
		
		.navbar-main .dropdown-menu { background-color:#ddd; padding:5px; }
		.navbar-main .dropdown-menu h4 { color:#96001e; margin-top:0px; }
		.navbar-main .dd-dreamzone { margin-left:15px; }
		.navbar-main .dd-consult { margin-left:55px; }
		.navbar-main .dd-event { margin-left:7px; }
		.navbar-main .dd-souvenirs { margin-left:22px; }
		
		.home-logo { padding:70px 0px 70px 0px; }
		.home-logo-box { width:672px; height:197px; margin:0 auto; /*background:url('../assets/images/home_logo.gif');*/ position:relative; }
		.home-logo-box a {
			display:block; position:absolute; text-indent:-4000px; border:0px solid #f00;
			background-image:url('../assets/images/home_logo.gif');
		}
		.home-logo-box a.dreamzone {
			top: 0px; left: 330px;
			width: 280px; height:33px;
			background-position:-330px 0px;
		}
		.home-logo-box a.dreamzone:hover { background-position:-330px -197px; }
		
		.home-logo-box a.matching {
			top: 33px; left: 73px;
			width: 532px; height:77px;
			background-position:-73px -33px;
			
		}
		.home-logo-box a.matching:hover { background-position:-73px -230px; }
		
		.home-logo-box a.consult {
			top: 109px; left: 0px;
			width: 340px; height:30px;
			background-position:0px -109px;
		}
		.home-logo-box a.consult:hover { background-position:0px -306px; }
		
		.home-logo-box a.souvenir {
			top: 111px; left: 346px;
			width: 326px; height:52px;
			background-position:-346px -111px;
		}
		.home-logo-box a.souvenir:hover { background-position:-346px -308px; }
		
		.home-logo-box a.event {
			top: 165px; left: 308px;
			width: 129px; height:33px;
			background-position:-308px -165px;
		}
		.home-logo-box a.event:hover { background-position:-308px -362px; }
		
		.nav-bottom-login a.b-login {
			width:78px; height:17px;
			display:block; position:absolute; text-indent:-4000px; border:0px solid #f00;
			background-image:url('../assets/images/main/b-login.gif');
		}
		.nav-bottom-login a.b-login:hover { background-position:0px -17px; }
		
	</style>
</head>

<body>

	<!-- Navigation -->
	<nav class="navbar" role="navigation">
		<div class="container">
			<div class="header-logo">
				<img src="<?= base_url('assets/images/main/logo.gif') ?>" />
			</div>
			
		</div>
		<!-- /.container -->
	</nav>

	<!-- Page Content -->
	<div class="container">
		
		<div class="home-logo">
			<div class="home-logo-box">
				<a href="" class="dreamzone">DREAM ZONE</a>
				<a href="" class="matching">MATCING</a>
				<a href="" class="consult">consult</a>
				<a href="" class="souvenir">SOUVENIR</a>
				<a href="" class="event">EVENT</a>
			</div>
		</div>

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
	
	<script type="text/javascript">
		$(function(){
			$('.b-login').click(function(){
				$('#modal-login').modal()
			});
		});
	</script>
	
	<div class="modal fade" id="modal-login">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title">LOG IN</h4>
				</div>
				<div class="modal-body">
					
					
					<!-- Contact Form -->
					<form name="sentMessage" id="contactForm" novalidate>
						<div class="control-group form-group">
							<div class="controls">
								<label>Username (Email Address):</label>
								<input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
							</div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<label>Password:</label>
								<input type="password" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
							</div>
						</div>
						<div id="success"></div>
					</form>
					<!-- /.row -->
					
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Submit</button>
					<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Register</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</body>

</html>
