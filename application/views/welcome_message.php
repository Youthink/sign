<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>早签到</title>
	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<style type="text/css">
		.container{
			text-align: center;
			margin-top: 80px;
		}
		h2{
			margin-bottom: 50px;
			color:#449d44;
			font-size:28px;
		}
		.link{
			margin-top: 100px;
			display: block;
		}
		label{
			font-size: 16px;
    		margin-top: 4px;
		}
	</style>
</head>
<body>
     <div class="container">
     <h2>美好生活，从早起开始</h2>
	     <div class="form-horizontal" role="form">
	     <?php echo validation_errors(); ?>
	     <?php echo form_open('welcome/sign'); ?>
			  <div class="form-group">
			    <label for="num" class="col-xs-3 control-label">编号</label>
			    <div class="col-xs-9">
			      <input type="number" class="form-control" name="num" id="num" placeholder="数字1~30" required min="1" max="30" />
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="username" class="col-xs-3 control-label">昵称</label>
			    <div class="col-xs-9">
			      <input type="text" class="form-control" name="username" id="username" placeholder="不包含编号的群昵称" required maxlength="10">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-xs-12">
			      <button type="submit" class="btn btn-lg btn-success col-xs-12">签到</button>
			    </div>
			  </div>
		</div>
		<a class="link" href=<?php echo site_url().'/welcome/show'?>>查看榜单</a>
     </div>
     <script>
     		var num = document.getElementById('num');
     		var username = document.getElementById('username');

     		num.addEventListener('change',function(){
     				window.localStorage.setItem('num',num.value);
     		});

     		username.addEventListener('change',function(){
     				window.localStorage.setItem('username',username.value);
     		});
     		
     		num.value = window.localStorage.getItem('num');
     		username.value = window.localStorage.getItem('username');

     		
     		// var form = document.getElementsByTagName('form');
     		// form[0].addEventListener('submit',function(e){
     		// 	var timeHour = new Date().getHours();
     		// 	if(timeHour < 5 || timeHour >= 7 ){
     		// 		e.preventDefault(e);
     		// 		alert("5点之前，7点之后不能签到偶！");
     		// 	}
     		// });
     		
     		// num.addEventListener('focus',function(e){
     		// 	var timeHour = new Date().getHours();
     		// 	if(timeHour < 5 || timeHour >= 7 ){
     		// 		alert("5点之前，7点之后不能签到偶！");
     		// 		this.blur();
     		// 	}
     		// });
     		
     </script>
</body>
</html>