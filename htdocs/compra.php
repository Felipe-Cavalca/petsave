﻿<!DOCTYPE html>
<?php
            session_start();
            if (!$_SESSION['Login']):
                header('Location: usuarios/index.php');
                die;
            endif;
        ?>

	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="../img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Pet Save</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
                        <link rel="stylesheet" href="css/linearicons.css">
                        <link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
                        <link rel="stylesheet" href="css/magnific-popup.css">
                        <link rel="stylesheet" href="css/nice-select.css">							
                        <link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
                 <style type="text/css">
        .campo {
            background-color: #f9f9f9;
            border-radius: 4px;
            -moz-border-radius: 4px;
            -vebkit-border-radius: 4px;
            -boz-shadow: 2px 2px 5px #888888;
            border: 1px solid #ccc;
            padding: 4px;
        }
        .btnEnviar {
            background-color: #f9f9f9;
            border-radius: 4px;
            -moz-border-radius: 4px;
            -vebkit-border-radius: 4px;
            box-shadow: 2px 2px 5px #888888;
            border: 1px solid #ccc;
            padding: 9px;
            width: 100px;
        }
    </style>
    <style type="text/css">
        .menu { width: 100%; height: 50px; background-color: #970c0c; }
        .menu ul {margin: 0 auto; text-align: right; padding-top: 15px; }
        .menu ul li { list-style: none; display: inline-block; width: 120px; }
        .menu ul li a {text-decoration: none; color: #fff; margin: 0 10px; }
        .menu ul li a:hover { color: #000; background-color: #fff; padding: 6px; }
    </style>
		<body>	
			  <header id="header" id="home">
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
                                          <a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.php">Home</a></li>
				          <li><a href="about.php">Sobre Nós</a></li>
				          <li><a href="produtos.php">Produtos</a></li>
      					  <li><a href="adocao.php">Adoção</a></li>
				          <li><a href="dicas.php">Dicas</a></li>
				          <li><a href="contact.php">Contate-nos</a></li>
                                          <li><a href="usuarios/home.php">Sua Conta</a></li>
				                     
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->
                          <!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
                                                            <?php 
                                                            echo '</p> <h4>BEM VINDO AO SISTEMA.....  ' . $_SESSION['Login']['email'] . '</h4>' ;
                                                            ?>		
							</h1>	
							
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->
    </body>
</html>