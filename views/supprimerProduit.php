<?PHP
include "../core/produitC.php";
$produitC=new produitC();
if (isset($_POST["reference"])){
	$produitC->supprimerProduit($_POST["reference"]);
	header('Location: afficherProduit.php');
}

?>