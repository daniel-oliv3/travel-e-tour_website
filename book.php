<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Viagens e Passeios</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="img/favicon.ico"/>
	<!-- Font Awesome CDN Link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<!-- Swiper CSS Link -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
</head>
<body>
<!-- ======= Header Section ======= -->
<section class="header">
	<a href="home.php" class="logo">Travel.</a>
	<nav class="navbar">
		<a href="home.php">Home</a>
		<a href="about.php">Sobre</a>
		<a href="package.php">Pacote</a>
		<a href="book.php">Livro</a>
	</nav>
	<div id="menu-btn" class="fas fa-bars"></div>
</section>

<div class="heading" style="background:url(img/header-bg-3.png) no-repeat">
	<h1>Agende agora</h1>
</div>


<!-- ======= Book Section ======= -->
<section class="booking">
   <h1 class="heading-title">Reserve a sua viagem!</h1>
   <form action="book_form.php" method="post" class="book-form">
      <div class="flex">
         <div class="inputBox">
            <span>nome :</span>
            <input type="text" placeholder="Digite seu nome" name="nome">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="Digite seu email" name="email">
         </div>
         <div class="inputBox">
            <span>telefone :</span>
            <input type="number" placeholder="Digite seu número" name="telefone">
         </div>
         <div class="inputBox">
            <span>Endereço :</span>
            <input type="text" placeholder="Digite seu endereço" name="endereco">
         </div>
         <div class="inputBox">
            <span>Para onde :</span>
            <input type="text" placeholder="Lugar que você quer visitar" name="localizacao">
         </div>
         <div class="inputBox">
            <span>Quantos :</span>
            <input type="number" placeholder="Número de convidados" name="convidados">
         </div>
         <div class="inputBox">
            <span>Chegadas :</span>
            <input type="date" name="chegadas">
         </div>
         <div class="inputBox">
            <span>Saindo :</span>
            <input type="date" name="saindo">
         </div>
      </div>
      <input type="submit" value="Enviar" class="btn" name="send">
   </form>
</section>


<!-- ======= Footer Section ======= -->
<section class="footer">
	<div class="box-container">
		<div class="box">
			<h3>Links Rápidos</h3>
			<a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
			<a href="about.php"><i class="fas fa-angle-right"></i> Sobre</a>
			<a href="package.php"><i class="fas fa-angle-right"></i> Pacote</a>
			<a href="book.php"><i class="fas fa-angle-right"></i> Livro</a>
		</div>
		<div class="box">
			<h3>Links Extras</h3>
			<a href="#"><i class="fas fa-angle-right"></i> Pergunte</a>
			<a href="#"><i class="fas fa-angle-right"></i> Sobre nós</a>
			<a href="#"><i class="fas fa-angle-right"></i> Política de Privacidade</a>
			<a href="#"><i class="fas fa-angle-right"></i> Termos de uso</a>
		</div>
		<div class="box">
			<h3>Informações de contato</h3>
			<a href="#"><i class="fas fa-phone"></i> 55+ (92) 99131-5030</a>
			<a href="#"><i class="fas fa-phone"></i> 55+ (92) 99221-5202</a>
			<a href="#"><i class="fas fa-envelope"></i> danielsapup3@gmail.com</a>
			<a href="#"><i class="fas fa-map"></i> Manaus, Brasil - 69090-380</a>
		</div>
		<div class="box">
			<h3>Siga-nos</h3>
			<a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
			<a href="#"><i class="fab fa-twitter"></i> Twitter</a>
			<a href="#"><i class="fab fa-instagram"></i> Instagram</a>
			<a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
		</div>
	</div>
	<div class="credit">Criado por <span>Daniel Oliveira</span> | Todos Direitos Reservados!</div>
</section>

	
	<script src="js/script.js"></script>
</body>
</html>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas
    09/11/2022
-->