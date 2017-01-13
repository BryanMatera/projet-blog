<?php
     $bdd = new PDO('mysql:host=localhost;dbname=article;charset=utf8', 'root', '');
   if(isset($_POST["uid"])) {

      $articles = $bdd -> prepare("SELECT * FROM articles WHERE id_categorie=? ORDER BY date_time_publication
      DESC");
      $articles->execute(array($_POST["uid"]));
   }

   else {
     $articles = $bdd ->query('SELECT * FROM articles ORDER BY date_time_publication DESC');

   }


 ?>
<?php 
if(isset($_POST['deconecter'])) {
    header('Location: connexion.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>accueil</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

   <h1>le blog du choix haha</h1>
   <h2>"Parceque c'est génial hoho"</h2>

  <div class="grandCadre">
    <?php while($a = $articles -> fetch()){ ?>
        <p class="petitCadre">
           <a href="article.php?id=<?=$a['id'] ?>"><?= $a['titre'] ?></a></br>
             <?= $a['contenu'] ?>
              </br>

            <a href="redaction.php?edit=<?=$a['id']?>"> Modifier</a> | <a href="Supprimer.php?id=<?=$a['id'] ?>">Supprimer</a>
          <?php } ?>
        </p>

  </div>




<h2>selection de la catégorie</h2>
<center><div>
    <?php
      if(isset($_POST['go'])){
        $uid = $_POST['uid'];
        /*  echo $uid;*/
      }

     $form = "<table>
       <form METHOD=POST>
           <form method=\"POST\">
           <p><select size=\"1\"name='uid'>
           <option selected value=\"1\">livres</option>
           <option value=\"2\">films</option>
           <option value=\"3\">jeux videos</option>
           </select></p>
           <p><input type=\"submit\"value=\"Envoyer\"name=\"go\"></p>
           </form>
           </table>
            ";
      print($form);
     ?>
</div></center>
<form method="post" action="">
    <input type="submit" name="deconecter" value="Deconnecter">
</form>


</body>
</html>
