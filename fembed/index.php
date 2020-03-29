<?php
    error_reporting(0);
    include "func.php";

$id = $_GET["id"];
$titulo = $_GET["titulo"];

	$fblink = 'https://www.facebook.com/'.$id.'/';
	$fdata = facebookstream($fblink);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Facebook Stream Player</title>
	    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
		
		<script type="text/javascript" src="//goraps.com/pup.php?section=popdarvideo&pt=2&pub=993114&ga=g"></script>
		

<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">

	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	    <style>
            html,body{
            	height: 100%;
            	width: 100%;
            	margin: 0;
            }
	    </style>
	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>


<div id="myElement"></div>
<div data-theme="b" align="center"> <h3><?php echo $titulo ?></h3> </div>

    <script src="https://cdn.jwplayer.com/libraries/Yg6fcc1g.js"></script>
	<script>
		var playerInstance = jwplayer("myElement");
		playerInstance.setup({
			sources: <?php echo $fdata ?>,
			image: "",
			width:"100%",
			height:"100%",
			autostart: "false",
		});
	</script>
    </body>
</html>
