<!DOCTYPE html>
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
		 
		<!--<script src="./src/pag.js"></script>-->
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
            	<span>Entrar </span>
            	<span class="glyphicon glyphicon-heart-empty espaço"></span>
            	<span class="glyphicon glyphicon-shopping-cart"></span>
           </div>
         </div>
         <div class="row">
          <div class="col topnav">
         	<a class="active" href="lojaroupas.php">Home</a>
            <a href="#about">Feminino</a>
            <a href="#contact">Masculino</a>
            <a href="#about">Acessórios</a>
            <a href="#contact">Perfumes</a>
            <a href="#contact">Ofertas</a>
            <span><input type="text" placeholder="Search.."><button type="submit" class="botão"><i class='fas fa-search'></i></button></span>
          </div>
         </div>
         <div class="row">
         	<div id="myCarousel" class="col carousel slide" data-ride="carousel">

              <ul class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
             </ul>
  
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="imagens/img41.png" alt="Los Angeles" width="1100" height="500">
			    </div>
			    <div class="carousel-item">
			      <img src="imagens/img42.png" alt="Chicago" width="1100" height="500">
			    </div>
			  </div>
  
  
			  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			  </a>
			</div>
         </div>
         <div class="row">
         	<div class="card-wrapper">

              <div class="card-container card-columns">
              	<?php include "src/inc.php"; ?>
              </div>
            </div>
            <div class="pagination-wrapper">
              <div class="pagination"></div><!--container com os botões de paginação-->
            </div>
         	
         </div>
         <div class="row">
         	<div class="col footer"></div>
         </div>
       </div>  
			
	</body>
</html>


