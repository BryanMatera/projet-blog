<?php
     $bdd = new PDO('mysql:host=localhost;dbname=article;charset=utf8', 'root', '');

       if(isset($_GET['id']) AND !empty($_GET['id'])){
           $get_id = htmlspecialchars($_GET['id']);

            $article = $bdd -> prepare('SELECT * FROM articles WHERE id = ?');
            $article -> execute (array($get_id));

           if($article ->rowCount() == 1){
                $article = $article->fetch();
                $titre = $article['titre'];
                $contenu = $article['contenu'];

               }   else{
                       die('cet article n\'existe pas !');
                       }

                   }     else{
                            die('Erreur');
                             }


 ?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <title>accueil</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class='grandCadre'>
<article class='petitCadre'>
  <ul>
    <h1><?= $titre ?></h1>
    <p><?= $contenu ?></p>
  <ul>  
    </article>
    
    <p class="aDroite"><a href="index.php">Revenir au blog</a></p>
</div>

</body>
</html>
