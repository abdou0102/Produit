<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
</head>

<body>
	<?php
	$resutat = mysql_query ("select * from produit where nom like '%".$_POST["nom"]."%'order by reference");
	if($resutat){
		
		echo "<h1>Resultat du recherche</h1>";
			$nbproduit = mysql_num_row($reultat);
		if($nbproduit){
			echo"<table border='1'>\n";
					echo "<tr>\n";
					echo "<td><strong> reference</strong></td>\n";
					echo "<td><strong> nom</strong></td>\n";
					echo "<td><strong> categorie</strong></td>\n";
					echo "<td><strong> prix</strong></td>\n";
					echo "<td><strong> quantite</strong></td>\n";
					echo "<td><strong> image</strong></td>\n";
					echo"</tr>\n";
				while($produit = mysql_fetch_array($resultat)){
					echo"<tr>\n";
					echo"<td>".$produit["reference"]."</td>\n";
					echo"<td>".$produit["nom"]."</td>\n";
					echo"<td>".$produit["categorie"]."</td>\n";
					echo"<td>".$produit["prix"]."</td>\n";
					echo"<td>".$produit["quantite"]."</td>\n";
					echo"<td>".$produit["image"]."</td>\n";
				}
				echo"</table>\n";
		}else{
			echo"<p>Pas de reponse</p>";
		}
		else{
			echo"erreur";
		}
		
	}
	
	?>
</body>
</html>