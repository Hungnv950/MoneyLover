<?php
/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
|
*/

require __DIR__.'/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>Money Lover</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="js/jquery-1.12.0.min.js">
</head>
<body>
	<div class="container">
		<header id="header" class="">
			<h3 style="color: #FFF">Money Lover</h3>
		</header><!-- /header -->
		<div class="clearfix"></div>
		<section>
			<div class="col-md-4" id = "left">
				<div class="panel panel-primary">
			      <div class="panel-heading">
			      	Hiển thị thông tin về user
			      </div>
			       <div class="panel-body"><a href="index.php?action=add">Thêm công việc</a></div>
			      <div class="panel-body"><a href="index.php?action=out">Hiển thị số tiền nợ</a></div>
			      <div class="panel-body"><a href="index.php?action=in">Hiển thị số tiền  cho vay</a></div>
			      <div class="panel-body"><a href="index.php?action=chart">Hiển thị biểu đồ chi tiêu</a></div>
			      <div class="panel-body"><a href="#">Xuất ra file excle</a></div>
			      <div class="panel-body"><a href="#">PXuất ra file pdf</a></div>
			      <div class="panel-body"><a href="#">thêm ứng dụng gì đi??</a></div>
			    </div>
			</div>

			<div class="col-md-8" id="right">
				
				<div class="view">
					<?php 
						if (isset($_GET['action']) &&$_GET['action'] =='add') {
							include('layout/add.php');
						}
						else if (isset($_GET['action']) &&$_GET['action'] =='chart') {
							include('layout/chart.php');
						}
						else if (isset($_GET['action']) &&$_GET['action'] =='out') {
							include('layout/out.php');
						}
						else if (isset($_GET['action']) &&$_GET['action'] =='in') {
							include('layout/in.php');
						}
						else {
							include('layout/view.php');
						}
					 ?>
				</div>
			</div>
		</section> <!-- section -->
		<div class="clearfix"></div>
		<footer>
			footer
		</footer> <!-- footer -->
	</div>
</body>
</html>
