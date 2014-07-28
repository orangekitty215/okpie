<?php session_start();
	if(!isset($_SESSION['loggedin'])){
		$_SESSION['loggedin'] = false;
	}
	if(!isset($_SESSION['id'])){
		$_SESSION['id'] = -1;
	}
	if(!isset($_SESSION['pieTurnState'])){
		$_SESSION['pieTurnState'] = 0;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.we.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Ok Pie! - Customized pies for every occasion!</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="shortcut icon" href="favicon.png" />
	<style type="text/css">
		img.pie {
			-webkit-animation:pieTurnState<?php echo $_SESSION['pieTurnState'];
												$_SESSION['pieTurnState']++;
												if($_SESSION['pieTurnState'] >= 5){
													$_SESSION['pieTurnState'] = 1;
												}?> 2s 1;
			-webkit-animation-fill-mode: forwards;
		}
	</style>
    
</head>

<body>
<img class="logo" src="okPieLogo.png">
<img class="pie" src="sqpie.svg">
<img class="tin" src="sqpietin.svg">
    
<div id="menu">
    <a href="#">about</a><br>
    <a href="#">crusts</a><br>
    <a href="#">fillings</a><br>
    <a href="#">contact</a>
    
</div>



</body>

</html>