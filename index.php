<?php include __DIR__ . '/config.php';?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SinaPic-Ext (屌图床-扩展版)</title>
	<link rel="stylesheet" href="static/css/style.css?v=<?= get_config()['VERSION'];?>"/>
	
</head>
<body>
	<form action="javascript:void(0);" id="spe-fm" role="form">
		<span id="spe-upload-btn" class="btn btn-link">Select or Drag image into here</span>
		<input type="file" id="spe-file" multiple>
	</form>
	<div id="progress">
		<div id="upload-tip" class="page-tip"><div class="alert alert-info" role="alert">Loading, please wait...</div></div>
		<progress id="progress-bar" value="11" max="100"></progress>
	</div>
	<div id="files-container"></div>
	<p class="thanks">由<a href="http://blog.sxbk.pw/" target="_blank">“VPS 折腾笔记”</a>提供空间赞助</p>
<script src="static/js/init.js?v=<?= get_config()['VERSION'];?>" async></script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-21518172-13', 'auto');
ga('send', 'pageview');
</script>
</body>
</html>