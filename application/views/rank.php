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
			margin-top: 40px;
		}
		h2{
			margin-bottom: 30px;
		}
		.link{
			margin-top: 100px;
			display: block;
		}
	</style>
</head>
<body>
     <div class="container">
     <h2><?php echo $date; ?></h2>
	 <div class="col-md-offset-3 col-md-6">
	 <?php echo form_open('welcome/show'); ?>
		<p>
		查看：<input type="date" name="date" value='<?php echo $date; ?>'>
		<button class="btn btn-success">排名</button>
		</p>
		<h3 class="blue">早起排名</h3>
		<div class="table-responsive">
			<table  class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>排名</th>
						<th>编号</th>
						<th>昵称</th>
						<th>签到时间</th>
					</tr>
				</thead><?php $i=1;?>
				<tbody> <?php foreach ($rank as $rank_items): ?>
					<tr>
					<td class="warning"><?php echo $i++;?></td>
					<td class="danger"><?php echo $rank_items['num']; ?></td>
					<td class="success"><?php echo $rank_items['username']; ?></td>
					<td class="warning"><?php echo $rank_items['time']; ?></td>
					</tr><?php endforeach; ?>
				</tbody>
			</table>
		</div>
    </div>
     </div>
</body>
</html>