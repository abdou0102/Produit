<?PHP
include "../entities/categorie.php";
include "../core/categorieC.php";

if (isset($_POST['idC']) and isset($_POST['nomC'])){
$categorie1=new categorie($_POST['idC'],$_POST['nomC']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$categorie1C=new categorieC();
$categorie1C->ajouterCategorie($categorie1);
header('Location: afficherCategorie.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>