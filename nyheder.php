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
					<li><a id="nyheder"href="nyheder.php">Nyheder</a></li>
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
		<form action="checkUser.php" method="get"></form>
		<div class="col-md-12">
			<button type="submit"  class="btn btn-default submit login pull-right" value="Log ind">Login</button>
			<div class="pull-right">
				<input class="form-control" type="password" placeholder="password" name="formPassword">
			</div>

			<div class="padding-right form-group pull-right">
				<input type="username" class="form-control " placeholder="brugernavn" name="formUsername">
			</div>
		</div>
	</header>

	<!-- Artikler -->

	
	<main class="container">
		<form action="insert.php" class="col-md-12 center-block"method="get" class="form-horizontal ">
			<div class="form-group insertToSite">
				<label class="center-block"for="heading">Overskrift:</label>
				<input class="form-control " id="heading"type="text" name="heading" placeholder="Overskrift her...">
				<label for="imgsrc">Billednavn:</label>
				<input class="form-control" id="imgsrc" type="text" name="imgsrc" placeholder="Sti til billede...">
				<label for="imgalt">Alt tekst til billede:</label>
				<input class="form-control" id="imgalt" type="text" name="imgalt" placeholder="Alt tekst til billede....">
				<label for="txt">Tilføj tekst:</label>
				<input class="form-control" id="txt" type="text" name="txt" placeholder="Tilføj tekst her...">
			</div>
			<div class="button">
				<input type="submit" align="middle" value="Indsæt" class="btn bt-default btn-large col-sm-12 button ">
			</div>



		</form>
		<div class="col-md-8">
			<?php 
			include "fetchDb.php";
			?> 

		</div>

		<aside class="col-md-4">
			<img class="center-block img-responsive" src="img/sponsor1.jpg" alt="">
			<img class="center-block img-responsive"  src="img/sponsor2.jpg" alt="">
			<img class="center-block img-responsive" src="img/sponsor3.jpg" alt="">
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