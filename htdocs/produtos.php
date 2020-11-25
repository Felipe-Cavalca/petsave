<?php
$pagina = "Produtos";
include 'menu.php';
'<br>'
?>﻿
<!-- Start image-carusel Area -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

			<section class="image-carusel-area">
				<div class="container">
					<div class="row">
						<div class="active-image-carusel">
							<div class="single-image-carusel">
								<a href="produto.html"><img class="img-fluid" src="img/c1.jpg" alt=""></a>
							</div>
							<div class="single-image-carusel">
								<a href="produto.html"><img class="img-fluid" src="img/c2.jpg" alt=""></a>
							</div>
							<div class="single-image-carusel">
								<a href="produto.html"><img class="img-fluid" src="img/c3.jpg" alt=""></a>
							</div>
							<div class="single-image-carusel">
								<a href="produto.html"><img class="img-fluid" src="img/c4.jpg" alt=""></a>
							</div>	
							<div class="single-image-carusel">
								<a href="produto.html"><img class="img-fluid" src="img/c1.jpg" alt=""></a>
							</div>
							<div class="single-image-carusel">
								<a href="produto.html"><img class="img-fluid" src="img/c2.jpg" alt=""></a>
							</div>
							<div class="single-image-carusel">
								<a href="produto.html"><img class="img-fluid" src="img/c3.jpg" alt=""></a>
							</div>
							<div class="single-image-carusel">
								<a href="produto.html"><img class="img-fluid" src="img/c4.jpg" alt=""></a>
							</div>	
							<div class="single-image-carusel">
								<a href="produto.html"><img class="img-fluid" src="img/c1.jpg" alt=""></a>
							</div>
							<div class="single-image-carusel">
								<a href="produto.html"><img class="img-fluid" src="img/c2.jpg" alt=""></a>
							</div>
							<div class="single-image-carusel">
								<a href="produto.html"><img class="img-fluid" src="img/c3.jpg" alt=""></a>
							</div>
							<div class="single-image-carusel">
								<a href="produto.html"><img class="img-fluid" src="img/c4.jpg" alt=""></a>
							</div>												
						</div>
					</div>
				</div>	
			<br> </br>
			</section>

			<!-- End image-carusel Area -->
	
	<?php
        include '_app/conn.php';
        
        $sth = $pdo->prepare("select *from produtos");  
        
        $sth->execute();
        echo '<hr><p>Existem: ' . $sth->rowCount() . ' produtos</p>';
        echo '<table>';
        echo '<tr>';
        echo '<td>Nome</td>';
        echo '<td>valor</td>';
        echo '<td>Estoque </td>';
        echo '<td>Ações</td>';
        echo '</tr>';
        foreach ($sth as $res):
            extract($res);
            echo '<tr>';
            echo '<td>' .$pro_nome. ' </td>';
            echo '<td>' .$pro_valor. ' </td>';
            echo '<td>' .$pro_qtd. ' </td>';
            echo '<td> <a href="compra.php?id'.$id_pro.'">Comprar</a> </br> <a href="info.php?id'.$id_pro.'">Informações</a></td>';
            echo '</tr>';
        endforeach;
        echo '</table>';
        ?>	
			
					

			

			<!-- Start calltoaction Area -->
			<section class="calltoaction-area section-gap relative">
				<div class="container">
					<div class="overlay overlay-bg"></div>						
					<div class="row align-items-center justify-content-center">
						<h1 class="text-white">Prescisa de ajuda para adestrar seu pet?</h1>
						<p class="text-white">
							Um de nossos objetivos é trazer a você a possibilidade de adestrar seu pet com as mais novas e comprovadas dicas de treinamento, dadas pelos maiores domadores de animais.
						</p>
						<div class="buttons d-flex flex-row">
							<a href="dicas.html" class="primary-btn text-uppercase">Confira</a>
							<a href="produtos.php" class="primary-btn text-uppercase">Veja nossos Produtos</a>
					        </div>
					</div>
				</div>	
			</section>
			<!-- End calltoaction Area --><!-- start footer Area -->		
			<footer class="footer-area">
				<div class="container">
					<div class="row pt-120 pb-80">
						<div class="col-lg-4 col-md-6">
							<div class="single-footer-widget">
								<h6>Sobre nós</h6>
								<p>
									Bom, como estudantes nosso objetivo é criar um sistema em que ajude pessoas que adotaram um  pet recentemente, ou até mesmo que tem dificuldades em cuidar de seus animais de longa data. Queremos proporcionar ajuda e também pequenos auxilios, até mesmo com produtos que você pode não encontrar em lojas quaisquer.
							
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-footer-widget">
								<h6>Useful Links</h6>
								<div class="row">
									<ul class="col footer-nav">
										<li><a href="index.html">Home</a></li>
										<li><a href="about.html">sobre nós </a></li>
										<li><a href="produtos.php">Produtos</a></li>
										<li><a href="dicas.html">Dicas</a></li>
										<li><a href="contact.html">Contate-nos</a></li>
                                                                                <li><a href="usuarios/index.php">Login</a></li>
									</ul>
									</div>
							</div>
						</div>						
						<div class="col-lg-4  col-md-6">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">Contate-nos</h6>
								<ul class="list-contact">
									<li class="flex-row d-flex">
										<div class="icon">
											<span class="lnr lnr-home"></span>
										</div>
										<div class="detail">
											<h4>Guaratinguetá, Brasil </h4>
											<p> R. Afonso Giannico, 350 - Pedregulho, Guaratinguetá - SP, 12515-160</p>
										</div>	
									</li>
									<li class="flex-row d-flex">
										<div class="icon">
											<span class="lnr lnr-phone-handset"></span>
										</div>
										<div class="detail">
											<h4>00 (12) 4002-8922 </h4>
											<p>
												24/7</p>
										</div>	
									</li>
									<li class="flex-row d-flex">
										<div class="icon">
											<span class="lnr lnr-envelope"></span>
										</div>
										<div class="detail">
											<h4>petsave@hotmail.com</h4>
											<p><span id="result_box" lang="pt">Envie-nos sua mensagem a qualquer momento!</span></p>
										</div>	
									</li>																		
								</ul>
							</div>
						</div>						
					</div>
				</div>
				<div class="copyright-text">
					<div class="container">
						<div class="row footer-bottom d-flex justify-content-between">
							<p class="col-lg-8 col-sm-6 footer-text m-0 text-white"> etec | Izabella | Kaylan | Felipe
</p>
							<div class="col-lg-4 col-sm-6 footer-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
							</div>
						</div>						
					</div>
				</div>
			</footer>
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>