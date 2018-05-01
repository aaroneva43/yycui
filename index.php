<!DOCTYPE HTML/>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Y.Y.CUI</title>
		<link href="./resources/css/main.css" rel="stylesheet">
		<link href="./resources/css/jquery.lightbox.css" rel="stylesheet">
		<?php require 'common.php';?>
	</head>
	
	<body> 
	
		<div id="header">
			<h1>Y. Y. CUI</h1>
			<h5>An Independent Fashion Designer</h5>
			<ul id="menu">
				<li><a href="#me">me</a></li>
				<li><a href="#201408" title="2014 Autumn/Winter">collection</a></li>
				<li><a>news</a></li>
				<li><a>about</a></li>
			</ul>
		</div>
		<div id="container">
			<div id="banner">
			</div>
			
			<br/><br/><br/><br/><br/><br/>
			
			<div id="collection">
				<a name="20151213"></a>
				<h3>2015 Autumn/Winter <a href="javascript:;" class="brief">简述&lt;</a></h3>
				<br/>
				<p class="collection_intro">
					<br/>
					
					<br/>
					设计初衷:  <br/>
					<br/>
					设计从都市生活中吸取灵感，以独立，追求简约的现代女性为缪斯,<br/>
					在水泥森林、女性、自然三者中,寻求存在的价值,融入设计师独特<br/>
					的东方美学视角，让都市成为我们心灵自在的场所.<br/>
					<br/><br/>
					色彩:<br/>
					<br/>
					中性高级灰、冷色藏蓝为主,结合知性的烟熏紫及中墨绿的少许点缀.<br/>
					<br/><br/>
					面料材质:<br/>
					<br/>
					以棉、麻、毛、丝等天然材质为主，设计师通过对细节的处理和对面<br/>
					料的再造，在表达女性温婉气质的同时，以干脆利落的线条感带出一<br/>
					种飒爽之气。<br/>
					<br/><br/>
					款式:<br/>
					<br/>
					系列以”H”直身廓型为主, 西方简约和独立结合东方美学的知性气质，<br/>
					深度探寻现代女性依托服饰来表达内心的独特态度，表达品牌对独立、<br/>
					自由、坚强、细腻的女性特有张力的推崇。<br/>
					<br/><br/><br/><br/>
				</p>
				
				
				<?php 
					$imgs = getImage('20151213');
					foreach ($imgs as $img) {
						// echo $img;
						echo '<a class="collection" style="background-image :url(resources/img/20151213/'.$img.');"></a>';
					}
				?>
				
				<br style="clear:both"/>
				
				<a name="201408"></a>
				<h3>2014 Autumn/Winter</h3>
				<br/>
				<span class="collection_intro">
					<br/>
					
					<br/>
					设计初衷:  <br/>
					<br/>
					设计从都市生活中吸取灵感，以独立，追求简约的现代女性为缪斯,<br/>
					在水泥森林、女性、自然三者中,寻求存在的价值,融入设计师独特<br/>
					的东方美学视角，让都市成为我们心灵自在的场所.<br/>
					<br/><br/>
					色彩:<br/>
					<br/>
					中性高级灰、冷色藏蓝为主,结合知性的烟熏紫及中墨绿的少许点缀.<br/>
					<br/><br/>
					面料材质:<br/>
					<br/>
					以棉、麻、毛、丝等天然材质为主，设计师通过对细节的处理和对面<br/>
					料的再造，在表达女性温婉气质的同时，以干脆利落的线条感带出一<br/>
					种飒爽之气。<br/>
					<br/><br/>
					款式:<br/>
					<br/>
					系列以”H”直身廓型为主, 西方简约和独立结合东方美学的知性气质，<br/>
					深度探寻现代女性依托服饰来表达内心的独特态度，表达品牌对独立、<br/>
					自由、坚强、细腻的女性特有张力的推崇。<br/>
					<br/><br/><br/><br/>
				</span>
				
				
				<?php 
					$imgs = getImage('20140802');
					foreach ($imgs as $img) {
						// echo $img;
						echo '<a class="collection" style="background-image :url(resources/img/20140802/'.$img.');"></a>';
					}
				?>
			</div>
			<br style="clear:both"/>
			<a id="me"></a>
			<div id="intro">
				<a id="snap"></a>
				<span>
				
				
					Y.Y.CUI崔艳艳<br/><br/>
					喜欢自然、自由、随性的设计师，<br/>
					多年设计生涯沉淀了她自己的独特风格，<br/>
					自主品牌Y.Y.CUI是她自由追梦旅程的一个开始。<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					Y.Y.CUI品牌理念:<br/>
					<br/>
					硬朗、中性、独立、简约中彰显率真.<br/>
					是现代都市女性的真实写照.服装是人与外界的第一层,<br/>
					品牌诠释了女性在水泥森林中坚强、独立的外表下,舒展天性,<br/>
					绽放自然的独特气质. <br/>
					<br/>
                
				
				
 
				</span>
			</div>
		</div>
		<div id="footer">
			<h6>@copy right y.y.cui 2014-2015</h6>
		</div>
		
		<div id="designer"></div>
		
		<div class="win">
			<div class="win_header">
				<a class="close">x</a>  
			</div>
		</div>
		
		<script src="./js/lib/jquery-2.1.4.min.js"></script>
		<script src="./js/lib/jquery.lightbox.min.js"></script>
		<script> 
		</script>
	</body>

</html>