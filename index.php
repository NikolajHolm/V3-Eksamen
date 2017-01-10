<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Islændere i DK</title>
	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
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
			<button type="submit" class="btn btn-default submit login pull-right">Login</button>
			<div class="pull-right">
				<input class="form-control" type="password" placeholder="password">
			</div>

			<div class="padding-right form-group pull-right">
				<input type="username" class="form-control " placeholder="brugernavn">
			</div>
		</div>
	</header>

	<!-- Artikler -->
	<?php 
		 include "fetchDb.php";
		?> 

	<!-- <main class="col-lg-12">
		<div class="col-md-12">
			<article class="col-md-12">
				<img src="img/articleImg1.jpg" alt="Storm Rider">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque sapiente accusantium quae eveniet nesciunt, doloremque. Cum, esse! Sed aliquam, sequi accusantium provident, expedita dolor ipsum ullam eum in. Optio, error.</p>
			</article>

			<article class="col-md-12">
				<img src="img/articleImg2.jpg" alt="Horses 3DS">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit sunt facere voluptas deleniti asperiores, voluptatum dignissimos quae minus nemo natus ullam minima voluptatibus pariatur molestiae iure eveniet quis ea autem.</p>
			</article>

			<article class="col-md-12">
				<img src="img/articleImg3.jpg" alt="Embrace dirty boots">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime quam quis incidunt, magnam maiores atque soluta corporis temporibus, ipsa adipisci blanditiis nulla sed facere provident.</p>
			</article>

			<article class="col-md-12">
				<img src="img/articleImg4.jpg" alt="riding horse">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit harum dolor, amet dolore laboriosam quod itaque officia maiores, suscipit excepturi delectus hic perspiciatis nam commodi.</p>
			</article>

			<article class="col-md-12">
				<img src="img/articleImg5.jpg" alt="Meeting">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat accusamus praesentium animi, harum consectetur facilis, perferendis at voluptas error, vero tempora excepturi recusandae. Odit optio, eos sit saepe impedit aspernatur.</p>
			</article>

			<article class="col-md-12">
				<img src="img/articleImg7.jpg" alt="People">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus illo sequi, delectus dolores ex, eveniet, doloribus totam, reprehenderit voluptates rerum magnam enim hic cupiditate voluptas deleniti assumenda at labore. Placeat?</p>
			</article>

			<article class="col-md-12">
				<img src="img/articleImg8.jpg" alt="IceRiding">
			</article>
		</div> -->
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