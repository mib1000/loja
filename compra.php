<!DOCTYPE html>
<?php
        	  
 	  $foto=$_GET['var1'];
      $prod=$_GET['var2'];
      $descri=$_GET['var3'];
      $val=$_GET['var4'];
 ?>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Outfit</title>
		<meta name="description" content="">
		<meta name="author" content="arifu">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="loja.css" media="screen" />
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
            
	</head>

	<body>
	    <div class="container-fluid">
         <div class="row">
            <div class="col-sm-4 logo"><a href="lojaroupas.php">Outfit</a></div>
            <div class="col-sm-4 meio">
            	<ul>
            	  <li>Atendimento</li>
            	  <li>Meus Pedidos</li>
            	</ul>  
            </div>
            <div class="col-sm-4 direita" >
            	<span>Entrar             </span>
            	<span class="glyphicon glyphicon-heart-empty espaço"></span>
            	<span class="glyphicon glyphicon-shopping-cart"></span>
            </div>
         </div>
         <div class="row compra">
         	<div class="col-sm-4 box">
         	  <img class="card-img-top" src="<?php echo $foto; ?>" alt="Card image">
         	</div>
         	<div class="col-sm-4 box">
         		<h4 class="card-title" align="center"><?php echo $prod; ?></h4>
         		<span class="exibe"><?php echo $descri; ?></span>
         		<span class="exibe"><?php echo $val; ?></span>
         	</div>
         	<div class="col-sm-4 box">
         	  <p><span>Quatidade:</span><input name="qtd"	 type="text" value="" maxlength="3" size="5"></p>
         	  <p align="center"><button type="button" class="btn btn-danger" name="Comprar">Comprar</button></p>
         	</div>
         </div> 
	  	</div>	
	</body>
</html>
