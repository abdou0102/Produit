<?PHP
include "../entities/users.php";
include "../core/usersC.php";

if (isset($_POST['user_id']) and isset($_POST['user_name']) and isset($_POST['user_email']) and isset($_POST['user_pass']) and isset($_POST['joining_date'])and isset($_POST['role'])){
$users1=new users($_POST['user_id'],$_POST['user_name'],$_POST['user_email'],$_POST['user_pass'],$_POST['joining_date'],$_POST['role']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$users1C=new usersC();
$users1C->ajouterUsers($users1);
header('Location: auth.html');
	
}else{
	echo "vérifier les champs";
}
//*/

?>