<?php 
require_once "connect.php";

//Vælg alt fra articles tabellen
//ORDER BY id DESC sorterer efter hvilken id der er senest tilføjet i articles databasen
$statement = $DBH->prepare("SELECT * FROM articles ORDER BY id DESC");
$statement->execute();


while($row = $statement->fetch(PDO::FETCH_ASSOC)){
	$posttime = date("d-M-Y H:i", $row["time"]);?>
<article class="col-md-12">
	<h2><?php echo $row['heading']?></h2>
	<h5><?php echo $posttime ?></h5>
	<img class="img-responsive"src="img/<?php echo $row['imgSrc']?>" alt="">
	<p class="col-md-12"><?php echo $row ['articleText']?></p>
	<br>
	<hr>
</article>
<?php 
}
?>