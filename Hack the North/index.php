<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>currentcy</title>
<link rel="icon" type="image/x-icon" href="resources/img/logo-mini.png"/>
<link href="index-css.php" rel="stylesheet" type="text/css">
<link href="body.css" rel="stylesheet" type="text/css">
<link href="index.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$("#home").css('color','#fb1');
	});
</script>
</head>

<body>
<div id="container">
	<?php
	include("headder.php");
	?>
	<div class="slidebox">
	<div class="slide">
		<a class="pager-item" id="button-prev" data-btnid="button-prev"> &#60 </a>
		<a class="pager-item" id="button-next" data-btnid="button-next"> &#62 </a>
		<div class="pager">
			<button class="pager-item" id="btn0" data-btnid="0"></button>
			<button class="pager-item" id="btn1" data-btnid="1"></button>
			<button class="pager-item" id="btn2" data-btnid="2"></button>
			<button class="pager-item" id="btn3" data-btnid="3"></button>
			<button class="pager-item" id="btn4" data-btnid="4"></button>
		</div>
		<div id="slideimgs">
			<div>
				<img id="img0" class="slideimg" data-imgid="0" src="resources/img/test/Pic 1.jpg" alt="komakan">
				<img id="img1" class="slideimg" data-imgid="1" src="resources/img/test/Pic 2.jpg" alt="bilibili">
				<img id="img2" class="slideimg" data-imgid="2" src="resources/img/test/Pic 3.jpg" alt="madoka&homura">
				<img id="img3" class="slideimg" data-imgid="3" src="resources/img/test/Pic 4.jpg" alt="miku">
				<img id="img4" class="slideimg" data-imgid="4" src="resources/img/test/2017-12-10 (7).png"  alt="oregairu">
			</div>
			<div class="imgtxt">
				<div id="imgtxt0"> Our everyday lyf</div>
				<div id="imgtxt1"> img 1</div>
				<div id="imgtxt2"> img 2</div>
				<div id="imgtxt3"> img 3</div>
				<div id="imgtxt4"> img 4</div>
				
			</div>
		</div>
	</div>
	</div><!--slide show -->
	
</div>
<script src="resources/script/slideimg-script.js"></script> <!--switch slide img-->
</body>
</html>