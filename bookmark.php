<?php include __DIR__ . '/config.php';?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SinaPic-Ext bookmark page</title>
</head>
<body>
	<h1>
	Add this link to your bookmark: <a href="javascript:(function(D,js,css,js_url,css_url,id){
		if(D.getElementById(id + '-js')) return;
		js = D.createElement('script');
		js.id = id + '-js';
		js.src = js_url;
		js.setAttribute('data-home-url','<?= get_config()['HOME_URL'];?>');
		D.getElementsByTagName('head')[0].appendChild(js);
		
		css = D.createElement('link');
		css.rel = 'stylesheet';
		css.id = id + '-css';
		css.href = css_url;
		D.getElementsByTagName('head')[0].appendChild(css);
		
	})(document,'#js','#css','<?= get_config()['HOME_URL'];?>/static/js/bookmark.js?v=<?= get_config()['VERSION'];?>','<?= get_config()['HOME_URL'];?>/static/css/bookmark.css?v=<?= get_config()['VERSION'];?>','spe');">屌图床Ext - Sinapic-Ext v<?= get_config()['VERSION'];?></a>
	</h1>
	<h2>Just click the link from your bookmark when you upload images.</h2>
	<h3><a href="http://ww3.sinaimg.cn/large/686ee05djw1eihtkzlg6mj216y16ydll.jpg" target="_blank" title="Donate by Alipay">支持开发者 - Donate me by Alipay (QR code)</a></h3>
	<p>By <a href="<?= DES_URL;?>" target="_blank" >INN STUDIO</a></p>
	
</body>
</html>