<?PHP
include "../config.php";
class produitC {
function afficherProduit ($produit){
		echo "reference: ".$produit->getreference()."<br>";
		echo "Nom: ".$produit->getnom()."<br>";
		echo "Categorie: ".$produit->getcategorie()."<br>";
		echo "Prix: ".$produit->getprix()."<br>";
		echo "Quantite: ".$produit->getquantite()."<br>";
		echo "Image: ".$produit->getimage()."<br>";
	}
	function calculertarif($produit){
		echo $produit->getprix() * $produit->getquantite();
	}
	function ajouterProduit($produit){
		$sql="insert into produit (reference,nom,categorie,prix,quantite,image) values (:reference,:nom,:categorie,:prix,:quantite,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $reference=$produit->getreference();
        $nom=$produit->getnom();
        $categorie=$produit->getcategorie();
        $prix=$produit->getprix();
        $quantite=$produit->getquantite();
        $image=$produit->getimage();
		$req->bindValue(':reference',$reference);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':image',$image);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherProduits(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerProduit($reference){
		$sql="DELETE FROM produit where reference= :reference";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':reference',$reference);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierProduit($produit,$reference){
		$sql="UPDATE produit SET reference=:ref, nom=:nom,categorie=:categorie,prix=:prix,quantite=:quantite,image=:image WHERE reference=:reference";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$ref=$produit->getreference();
        $nom=$produit->getnom();
        $categorie=$produit->getcategorie();
        $prix=$produit->getprix();
        $quantite=$produit->getquantite();
        $image=$produit->getimage();
		$datas = array(':ref'=>$ref, ':reference'=>$reference, ':nom'=>$nom,':categorie'=>$categorie,':prix'=>$prix,':quantite'=>$quantite,':image'=>$image);
		$req->bindValue(':ref',$ref);
		$req->bindValue(':reference',$reference);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':image',$image);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererProduit($reference){
		$sql="SELECT * from produit where reference=$reference";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeproduit($categ){
		$sql="SELECT * from produit where categorie=$categ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


function afficherProduitsH(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit where categorie='corps'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
function afficherProduitsF(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit where categorie='cheveux'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
function afficherProduitsE(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit where categorie='visage'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
function tri_asc(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit order by prix";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

function tri_dec(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit order by prix DESC";
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