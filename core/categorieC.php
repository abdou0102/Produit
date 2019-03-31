<?PHP
include "../config.php";
class categorieC {
function afficherCategorie ($categorie){
		echo "idC: ".$categorie->getidC()."<br>";
		echo "Nom: ".$categorie->getnomC()."<br>";
	}
	/*function calculertarif($produit){
		echo $produit->getprix() * $produit->getquantite();
	}*/
	function ajouterCategorie($categorie){
		$sql="insert into categorie (idC,nomC) values (:idC,:nomC)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idC=$categorie->getidC();
        $nomC=$categorie->getnomC();
		$req->bindValue(':idC',$idC);
		$req->bindValue(':nomC',$nomC);


            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCategories(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerCategorie($idC){
		$sql="DELETE FROM categorie where idC= :idC";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idC',$idC);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCategorie($categorie,$idC){
		$sql="UPDATE categorie SET idC=:idd, nomC=:nomC WHERE idC=:idC";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$categorie->getidC();
        $nomC=$categorie->getnomC();
		$datas = array(':idd'=>$idd, ':idC'=>$idC, ':nomC'=>$nomC,);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':idC',$idC);
		$req->bindValue(':nomC',$nomC);

            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererCategorie($idC){
		$sql="SELECT * from categorie where idC=$idC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListecategorie($nom){
		$sql="SELECT * from categorie where nomC=$nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>