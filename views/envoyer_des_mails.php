<?php
include"../views/dbconfig.php";



if(isset($_POST['mailform']))

$header="MIME-Version: 1.0\r\n";
$header.='From:"CoeurdeMarie.com"<abdessalem.smirani@esprit.tn>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
	<body>
		<div align="center">
			<img src="https://lh3.googleusercontent.com/cYcUCVkSIVFYfKxBITdBnQyarJbigadimSlRVzxwEvpmVohITOwqftia_2DHg-7p88JMx-bS=w1080-h608-p-no-v0"/>
			<br />
			Chére client 
			Nous vous informe q\'un nouveau produit et disponible dans notre centre 
			Pour plus d\'info visiter notre site au contacter nous Par télèphone
			<br />
			
		</div>
	</body>
</html>
';


$conn = new PDO('mysql:host=localhost;dbname=crudproduit', 'root', '');
$query = $conn->query("SELECT user_email From users");
echo ($row['user_email']);
//$maill=("SELECT user_email From users");
//$db=Database::connexion();
//for($i=0;$i++;$i<$users.length){
//$m=$users['user_email'];
//$m='abdessalem.smirani@esprit.tn';
//echo "test";
for($i=0;$i<3;$i++){
$m=$users['user_email'];
//echo "bonjourr";
mail($m, "Salut tout le monde !", $message, $header);}

//header('location: afficherProduit.php')
?>
