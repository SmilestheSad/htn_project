<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>currentcy</title>
<link rel="icon" type="image/x-icon" href="resources/img/logo-mini.png"/>
<link href="cur-con-css.php" rel="stylesheet" type="text/css">
<link href="body.css" rel="stylesheet" type="text/css">
<link href="index.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$("#cur-cal").css('color','#fb1');
	});
</script>
<script>
	$(document).ready(function(){
	var FromCur = $("#select-currency-from").val();
	var userName = "hackthenorth804220991";
	var passWord = "sb5r9jv4ndop6hm0dq763vk6a0";
	var recievers = ["USD"];
	var recieveVal = [];
	var recieverlst = recievers[0];
	var token_ // variable will store the token
	
 	var XMLReq= new XMLHttpRequest();
	XMLReq.open("POST","https://xecdapi.xe.com/v1/account_info",true, user="hackthenorth804220991",psw="sb5r9jv4ndop6hm0dq763vk6a0");
	XMLReq.setRequestHeader("Authorization",authenticateUser(user="hackthenorth804220991",psw="sb5r9jv4ndop6hm0dq763vk6a0"));
	console.log(XMLReq.readyState);
	//print("SENT");
	setTimeout(partB(),10000);
	console.log(XMLReq.statusText);
	console.log(XMLReq.readyState);
	function partB(){
	console.log(XMLReq.statusText);
	console.log(XMLReq.readyState);
	var resp = XMLReq.responseText;
	console.log ("@@@RESP", resp);
	alert(resp[to][0][mid]);
	console.log(resp[to][0][mid]);
	}
	});
	
</script><!--calculate currency conversion--><!--do not work, I think-->
<script>
	$(document).ready(function(){
		function disappear(){
			$("#dimmer").css('display','none');
			$("#selectLoc").css('display','none');
		}
		function appear(){
			$("#dimmer").css('display','block');
			$("#selectLoc").css('display','block');
		}
		$("#dimmer").on('click',function(){
			disappear();
		});
		$("#addNew").on('click', function(){
			appear();
		});
		
	});
</script><!--closing and creating more bars-->
</head>

<body>
<div id="container">
	<?php
	include("headder.php");
	?>
	<div id="drop-menu">
	<form action="#" method="post">
		<select name=CurrencyFrom id="select-currency-from">
			<option value="CAD">
				CAD
			</option>
			<option value="USD">
				USD
			</option>
			<option value="EUR">
				EUR
			</option>
			<option value="CNY">
				CNY
			</option>
			<option value="GBP">
				GBP
			</option>
			<option value="JPY">
				JPY
			</option>
		</select>
	</form>
	</div>
	<div id="cur-con-holder">
		<div class="currency-converter" data-convert-block="0">
			<div class="flag" data-flag="USA"></div>
			<div class="country" data-cntry="USA">
				<div class="country-holder">
					<h1>USD</h1>
					<hr>
					<h3>US Dollars</h3>
				</div>
			</div>
			<div class="worth-val" data-value="USA">
				<h3 class="worth-val-num" data-value="USA">0.76733</h3>
			</div>
			<img class="close" src="resources/img/close.png">
		</div>
		
		<div class="currency-converter" data-convert-block="1">
			<div class="flag" data-flag="GBP"></div>
			<div class="country" data-cntry="GBP">
				<div class="country-holder">
					<h1>GBP</h1>
					<hr>
					<h3>Pounds</h3>
				</div>
			</div>
			<div class="worth-val" data-value="GBP">
				<h3 class="worth-val-num" data-value="GBP">0.58717</h3>
			</div>
			<img class="close" src="resources/img/close.png">
		</div>
		
		<div class="currency-converter" data-convert-block="2">
			<div class="flag" data-flag="EUR"></div>
			<div class="country" data-cntry="EUR">
				<div class="country-holder">
					<h1>EUR</h1>
					<hr>
					<h3>Euro</h3>
				</div>
			</div>
			<div class="worth-val" data-value="SEK">
				<h3 class="worth-val-num" data-value="SEK">0.65980</h3>
			</div>
			<img class="close" src="resources/img/close.png">
		</div>
		<div class="currency-converter" data-convert-block="3">
			<div class="flag" data-flag="SEK"></div>
			<div class="country" data-cntry="SEK">
				<div class="country-holder">
					<h1>SEK</h1>
					<hr>
					<h3>Swedish krona</h3>
				</div>
			</div>
			<div class="worth-val" data-value="SEK">
				<h3 class="worth-val-num" data-value="SEK">6.96097</h3>
			</div>
			<img class="close" src="resources/img/close.png">
		</div>
		
		<div class="currency-converter" data-convert-block="4">
			<div class="flag" data-flag="INR"></div>
			<div class="country" data-cntry="INR">
				<div class="country-holder">
					<h1>INR</h1>
					<hr>
					<h3>Rupees</h3>
				</div>
			</div>
			<div class="worth-val" data-value="INR">
				<h3 class="worth-val-num" data-value="INR">55.1812</h3>
			</div>
			<img class="close" src="resources/img/close.png">
		</div>
		
		<div class="currency-converter" data-convert-block="5">
			<div class="flag" data-flag="CNY"></div>
			<div class="country" data-cntry="CNY">
				<div class="country-holder">
					<h1>CNY</h1>
					<hr>
					<h3>Chinese Yuan</h3>
				</div>
			</div>
			<div class="worth-val" data-value="CNY">
				<h3 class="worth-val-num" data-value="CNY">5.26820</h3>
			</div>
			<img class="close" src="resources/img/close.png">
		</div>	
	</div>
	<div id="addNew">
		<img src="resources/img/new.png">
	</div>
	<div id="dimmer">
		
	</div>
	<div id="selectLoc">
		<form id="CurrencyForm" method="get">
			<input id="CurrencyId" list="Currencylst" type="txt" name="currencyCountry" placeholder="Currency name">
			<datalist id="Currencylst">
    			<option value="CAD">
   	 			<option value="USD">
    			<option value="GBP">
    			<option value="EUR">
    			<option value="CNY">
    			<option value="JPY">
    			<option value="AUD">
    			<option value="CHF">
    			<option value="BRL">
    			<option value="INR">
  			</datalist>
  			<button id="submit" >Submit</button>
			
		</form>
	</div>
</div>
</body>
</html>