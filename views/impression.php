<!DOCTYPE HTML>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
</head> 
<body id="target" onload="window.print()">
	
  <div class="logo">
	<a href="indexb.php"><img src="images/logo99.png" class="img-responsive" alt=""> </a>	</div><br>
<center>
<?PHP
include "../entities/produit.php";
include "../core/produitC.php";

$produit1C=new produitC();
	   $db=config::getconnexion();
	   $listeProduit=$produit1C->afficherProduits();

	   
?>
<div class="container">
	

<h2>Liste des Produits</h2><hr><br>
<div id="content">
<table id="content" class="table" >
<tr>


				<thead>
					<tr>
						<th>Réference</th>
						<th>Nom</th>
						<th>Categorie</th>
						<th>Prix</th>
						<th>Quantité</th>
						<th>Prix Total</th>
						<th>Image</th>
						
					
					</tr>
					
				</thead>

		
</tr>

<?PHP
foreach($listeProduit as $row){
	?>
	<tr>
	<td><p><?PHP echo ($row['reference']); ?></p></td>
	<td><p><?PHP echo ($row['nom']); ?></p></td>
	<td><p><?PHP echo ($row['categorie']); ?></p></td>
	<td><p><?PHP echo ($row['prix']); ?></p></td>
	<td><p><?PHP echo ($row['quantite']); ?></p></td>
	<td><p><?php echo  $row['prix'] * $row['quantite'] ?></p></td>
	<td><img src="../images/<?PHP echo $row['image']; ?>"  height="70px" width="70px"></td>
	
	
	
	</tr>
		
	<?PHP
}
?>
</table>

		                           


	   </div>
		</div>
</center>
</body>
</html></em>