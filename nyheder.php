<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Islændere i DK</title>
	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/styles.css">
	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css">
</head>
<body>
	<header class="col-xs-12">
		<h1 class="col-md-9 text-center">Islændere i DK</h1>
		<div class="pull-right pull-top">
			<img class ="logo img-responsive col-md-12"src="img/medlem-emblem.png" alt="">
		</div>
		<!-- Nav links -->
		<nav class="col-md-12">
			<div class="col-md-6">
				<ul class="">
					<li><a id="forside"href="index.php">Forside</a></li>
					<li><a href="nyheder.php">Nyheder</a></li>
					<li><a href="#">Sitemap</a></li>
					<li><a href="#">Print</a></li>
					<li><a href="#">Kontakt</a></li>
				</ul>
			</div>

			<!-- Søgebar -->
			<div class="col-md-2 pull-right">
				<div class="">
					<div id="row-colmumn imaginary_container"> 
						<div class="input-group stylish-input-group">
							<input type="text" class="form-control"  placeholder="Search" >
							<span class="input-group-addon">
								<button class="searchicon" type="submit">
									<span class="glyphicon glyphicon-search"></span>
								</button>  
							</span>
						</div>
					</div>
				</div>
			</div>
		</nav>
		

		<!-- Brugernavn, adgangskode og knap -->
		<div class="col-md-12">
			<button type="submit"  class="btn btn-default submit login pull-right">Login</button>
			<div class="pull-right">
				<input class="form-control" type="password" placeholder="password">
			</div>

			<div class="padding-right form-group pull-right">
				<input type="username" class="form-control " placeholder="brugernavn">
			</div>
		</div>
	</header>

	<!-- Artikler -->

	
	<main class="col-lg-10 col-md-offset-1">
	<!-- 	<?php 
		// include "fetchDb.php";
	?> -->
	<div class="col-md-8">
		<article>
			<img src="img/news3.jpg" alt="">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum id quod veniam quisquam, illo quas exercitationem iste deserunt consectetur commodi molestias odit consequatur at pariatur eius amet, adipisci quibusdam expedita.</p>
		</article>
		<article>
			<img src="img/news4.jpg" alt="">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati animi natus, nihil omnis dolor laborum blanditiis cumque, quisquam nostrum soluta dolorum. Minus autem dicta totam praesentium, rem ullam, quaerat nihil.</p>
		</article>
		<article>
			<img src="img/news1.jpg" alt="">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit doloribus odit nesciunt temporibus doloremque excepturi amet omnis! Optio earum repudiandae numquam inventore ipsam incidunt iusto vitae repellendus sunt voluptate, beatae!</p>
		</article>
	</div>
	
		<aside class="col-md-4">
			<img class="center-block" src="img/sponsor1.jpg" alt="">
			<img class="center-block" src="img/sponsor2.jpg" alt="">
			<img class="center-block" src="img/sponsor3.jpg" alt="">
		</aside>
</main>

<footer class="col-xs-12">
	<div class="col-md-5">
		<a href="#">Islændere i DK</a>
		<br>
		<a href="#">Tågehornvej 32</a>
		<p>9300 Ølstykke</p>
		<p>islandere(at)live.com</p>
	</div>

	<div class="tider">
		<div class="col-md-3 ">
			<p>Mandag-fredag:</p>
			<p>08:00-13:00</p>
			<p>Lørdag:</p>
			<p>09:00-11:00</p>
		</div>
	</div>
	<div class="footerInhold">

		<img src="img/guy.jpg" alt="">
		<p>Thomas Karse </p>

		<img src="img/guy2.jpg" alt="">
		<p>Bjarne Arm</p>

		<img src="img/guy3.jpg" alt="">
		<p>Lisbeth Grøn</p>
	</div>

</footer>
</body>
<script src="https://cdnjs.cloudflare.com/ajax
/libs/jquery/3.1.1/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</html>