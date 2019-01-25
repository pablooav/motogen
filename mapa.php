<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Motogen - Mapa</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="shortcut icon" href="img/motogen.ico" />
		<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://www.gstatic.com/firebasejs/5.5.0/firebase.js"></script>
        <script><?php include ("includes/firebase.js"); ?></script>
    </head>
	<body>
		<div class="wrapper">		
            <?php include ("includes/menu.php"); ?>
            <div id="content" class="col-sm-12 col-lg-12 col-md-12 col-xs-12">
                <?php include ("includes/menu2.php"); ?>
                
                <?php include ("includes/menu3.php"); ?>
            </div></div>
		
		<?php include ("includes/script.php"); ?>
	</body>
</html>
