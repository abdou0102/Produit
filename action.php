<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=crudproduit;charset=utf8", "root", "");
if(isset($_GET['reference']) AND !empty($_GET['reference'])) {
   $getreference = (int) $_GET['reference'];
  
   $sessionid = 5;
   $check = $bdd->prepare('SELECT reference FROM produit WHERE reference = ?');
   $check->execute(array($getreference));
   if($check->rowCount() == 1) {
      if($gett == 1) {
         $check_like = $bdd->prepare('SELECT id FROM likes WHERE id_article = ? AND id_membre = ?');
         $check_like->execute(array($getreference,$sessionid));
         $del = $bdd->prepare('DELETE FROM dislikes WHERE id_article = ? AND id_membre = ?');
         $del->execute(array($getid,$sessionid));
         if($check_like->rowCount() == 1) {
            $del = $bdd->prepare('DELETE FROM likes WHERE id_article = ? AND id_membre = ?');
            $del->execute(array($getreference,$sessionid));
         } else {
            $ins = $bdd->prepare('INSERT INTO likes (id_article, id_membre) VALUES (?, ?)');
            $ins->execute(array($getreference, $sessionid));
         }
         
      } elseif($gett == 2) {
         $check_like = $bdd->prepare('SELECT id FROM dislikes WHERE id_article = ? AND id_membre = ?');
         $check_like->execute(array($getreference,$sessionid));
         $del = $bdd->prepare('DELETE FROM likes WHERE id_article = ? AND id_membre = ?');
         $del->execute(array($getreference,$sessionid));
         if($check_like->rowCount() == 1) {
            $del = $bdd->prepare('DELETE FROM dislikes WHERE id_article = ? AND id_membre = ?');
            $del->execute(array($getreference,$sessionid));
         } else {
            $ins = $bdd->prepare('INSERT INTO dislikes (id_article, id_membre) VALUES (?, ?)');
            $ins->execute(array($getreference, $sessionid));
         }
      }
      header('Location: http://127.0.0.1/Tutos_PHP/Articles/article.php?id='.$getreference);
   } else {
      exit('Erreur fatale. <a href="http://127.0.0.1/Tutos_PHP/Articles/">Revenir à l\'accueil</a>');
   }
} else {
   exit('Erreur fatale. <a href="http://127.0.0.1/Tutos_PHP/Articles/">Revenir à l\'accueil</a>');
}