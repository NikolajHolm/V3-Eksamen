<?php 
require_once "connect.php";

//Vælg alt fra articles tabellen
$statement = $DBH->prepare("SELECT * FROM articles ORDER BY id DESC");
$statement->execute();


while($row = $statement->fetch(PDO::FETCH_ASSOC)){?>
<div class="col-md-12">
	<article class="col-xs-12">
		<h3 class="text-center"><?php echo $row['heading']?></h3>
		<img class="text-center"src="img/<?php echo $row['imgSrc'] ?>.jpg" alt="Storm Rider">
		<p class="text-center"><?php echo $row['articleText']?></p>
	</article>
</div>
<?php 
}
?>