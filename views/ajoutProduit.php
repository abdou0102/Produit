<?PHP
include "../entities/produit.php";
include "../core/produitC.php";

if (isset($_POST['reference']) and isset($_POST['nom']) and isset($_POST['categorie']) and isset($_POST['prix']) and isset($_POST['quantite'])and isset($_POST['image'])){
$produit1=new produit($_POST['reference'],$_POST['nom'],$_POST['categorie'],$_POST['prix'],$_POST['quantite'],$_POST['image']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$produit1C=new produitC();
$produit1C->ajouterProduit($produit1);
header('Location: envoyer_des_mails.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>