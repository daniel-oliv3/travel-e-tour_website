<?php

   $connection = mysqli_connect('localhost','root','','travel-e-tour_base-dados');

   if(isset($_POST['send'])){
      $name = $_POST['nome'];
      $email = $_POST['email'];
      $phone = $_POST['telefone'];
      $address = $_POST['endereco'];
      $location = $_POST['localizacao'];
      $guests = $_POST['convidados'];
      $arrivals = $_POST['chegadas'];
      $leaving = $_POST['saindo'];

      $request = "INSERT INTO book_form(nome, email, telefone, endereco, localizacao, convidados, chegadas, saindo) VALUES('$nome','$email','$telefone','$endereco','$localizacao','$convidados','$chegadas','$saindo') ";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }else{
      echo 'Alguma coisa deu errado. Por favor tente outra vez!';
   }

?>

<!--
   Criação da base de dados e tabela


CREATE TABLE `book_form` (
	`id` INT(225) NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`email` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`telefone` VARCHAR(22) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`endereco` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`localizacao` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`convidados` INT(255) NOT NULL,
	`chegadas` DATE NOT NULL,
	`saindo` DATE NOT NULL,
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB
;

 -->