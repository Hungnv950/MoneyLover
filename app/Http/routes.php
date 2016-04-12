<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('hoclaravel',function() {
	return 'Hung dep giai vcc';
});

Route::get('thongtin','WelcomeController@showinfor');

Route::get('khoahoc', function (){
	return "Lập trình laravel";
});

Route::get('khoa-hoc/lap-trinh-php', function (){
	return "Khoa hoc lap trinh PHP";
});

Route::get('lap-trinh/{monhoc}/{thoigian}', function ($monhoc, $thoigian) {
	return "Khoa hoc lap trinh: $monhoc vao luc: $thoigian";
});

Route::get('mon-an/{tenmonan?}', function($tenmonan = "Gia cay") {
	return "$tenmonan";
});

Route::get('thong-tin/{ten?}/{diachi?}', function($ten = "Hung", $diachi = "UET") {
	return "$ten hoc o $diachi";
})->where(['ten' => '[a-zA-Z]+', 'diachi'=>'[0-9]']);