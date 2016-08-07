<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>ThinkPHP示例：独立分组</title>
	<style type="text/css">
	*{ padding: 0; margin: 0;font-size:16px; font-family: "微软雅黑"} 
	div{ padding: 3px 20px;} 
	body{ background: #fff; color: #333;}
	h3{font-size:36px;font-weight:normal}
	a{text-decoration:none; color:#174B73; border-bottom:1px dashed gray}
	a:hover{color:#F60; border-bottom:1px dashed gray}
	div.content{color:#393939; padding:8px 20px;float:auto;margin:2px;line-height:150%}
	</style>
 </head>
 <body>
 <div class="main">
<H3><?php echo ($vo["title"]); ?> [ <A href="<?php echo U('index');?>">返回列表</a> <A href="<?php echo U('Group_Admin/Public/login');?>">后台管理</a> ]</H3> 
	<?php echo (date('Y-m-d H:i:s',$vo["create_time"])); ?>
	<div class="content"><?php echo (nl2br($vo["content"])); ?></div>
</div>
 </body>
</html>