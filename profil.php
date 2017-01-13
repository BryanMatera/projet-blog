<?php
session_start();

$bdd = new PDO("mysql:host=127.0.0.1;dbname=article;charset=utf8", "root", "");
if(isset($_POST['article_titre'], $_POST['article_contenu'])) {
   if(!empty($_POST['article_titre']) AND !empty($_POST['article_contenu'])) {
      
      $article_titre = htmlspecialchars($_POST['article_titre']);
      $article_contenu = htmlspecialchars($_POST['article_contenu']);
      $ins = $bdd->prepare('INSERT INTO articles (titre, contenu, date_time_publication) VALUES (?, ?, NOW())');
      $ins->execute(array($article_titre, $article_contenu));
      $message = 'Votre article a bien été posté';
        header("Location:index.php");
   } else {
      $message = 'Veuillez remplir tous les champs';
   }
}

if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>accueil</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

   <body>
       <div class="grandCadre"><div class="petitCadre"><h1>Rédiger un article :</h1>
     <form method="POST">
      <center><p>Titre:<br><input type="text" name="article_titre" placeholder="Titre" /><br />
      Article:<br><textarea name="article_contenu" placeholder="Contenu de l'article"></textarea></p><br />
      Catégorie ! <br> 
       <select name="categorie">

           <option value="">...</option>

           <option value="1">livres</option>

           <option value="2">films</option>

           <option value="3">jeux vidéos</option>


       </select>

   </p>

</form>
      
      
      <input type="submit" value="Envoyer l'article" /></center>
   </form>
   <br />
   <?php if(isset($message)) { echo $message; } ?>
     
      <div align="center">
         <fieldset><legend>Profil de <?php echo $userinfo['pseudo']; ?></legend>
         <br /><br />
         Pseudo = <?php echo $userinfo['pseudo']; ?>
         <br />
         Mail = <?php echo $userinfo['mail']; ?>
         <br />
         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <br />
         <a href="editionprofil.php">Editer mon profil</a>
         <a href="deconnexion.php">Se déconnecter</a>
         <?php
         }
         ?></fieldset>
           </div>
      </div>
          <p class="aDroite"><a href="index.php">Revenir au blog</a></p>
       </div>
   </body>
</html>
<?php   
}
?>