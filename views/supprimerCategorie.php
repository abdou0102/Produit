<?PHP
include "../core/categorieC.php";
$categorieC=new categorieC();
if (isset($_POST["idC"])){
	$categorieC->supprimerCategorie($_POST["idC"]);
	header('Location: afficherCategorie.php');
}

?>