<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Login</title>
	<link rel="stylesheet" href="../../bootstrap-5.1.3-dist/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="../../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</head>
<body>

<div>
    <img scr="../img/WechatIMG90.jpeg" width="100px" height="100px"/>
</div>

<form role="form">
	<div class="form-group">
		<label for="name">名称</label>
		<input type="text" class="form-control" id="name" 
			   placeholder="请输入名称">
	</div>
	<div class="form-group">
		<label for="inputfile">文件输入</label>
		<input type="file" id="inputfile">
		<p class="help-block">这里是块级帮助文本的实例。</p>
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox"> 请打勾
		</label>
	</div>
	<button type="submit" class="btn btn-default">提交</button>
</form>
	
</body>
</html>