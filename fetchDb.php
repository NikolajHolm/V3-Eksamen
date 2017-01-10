<?php 
require_once "connect.php";

//Vælg alt fra articles tabellen
$statement = $DBH->prepare("SELECT * FROM articles ORDER BY id DESC");
$statement->execute();


while($row = $statement->fetch(PDO::FETCH_ASSOC)){?>

			<article class="col-md-12">
				<img src="img/<?php echo $row['imgSrc'] ?>.jpg" alt="Storm Rider">
				<h3><?php echo $row['heading']?></h3>
				<p><?php echo $row['articleText']?></p>
			</article>
<?php 
}
?>