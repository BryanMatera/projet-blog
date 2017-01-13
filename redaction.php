
<?php
  $bdd = new PDO('mysql:host=localhost;dbname=article;charset=utf8', 'root', '');
    $mode_edition = 0;

      if(isset($_GET['edit'])AND !empty($_GET['edit'])){
      $mode_edition = 1;

      $edit_id = htmlspecialchars($_GET['edit']);
      $edit_article = $bdd ->prepare('SELECT*FROM articles WHERE id = ?');
      $edit_article -> execute(array($edit_id));

      if($edit_article ->rowCount()==1){

          $edit_article = $edit_article ->fetch();

        }

      } else {
            die('Erreur : L\'article n\'existe pas...');

      }

      if(isset($_POST['article_titre'],$_POST['article_contenu'])){
        if(!empty($_POST['article_titre']) AND !empty($_POST['article_contenu'])){
            $article_titre = htmlspecialchars($_POST['article_titre']);
            $article_contenu = htmlspecialchars($_POST['article_contenu']);

              if($mode_edition == 0){
                $ins = $bdd -> prepare('INSERT INTO articles (titre, contenu,categorie, date_time_publication)VALUES (?, ?, NOW())');
                    $ins -> execute(array($article_titre, $article_contenu));
              }
              else{
                $update = $bdd ->prepare('UPDATE articles SET titre = ?,contenu = ?, date_time_edition = NOW() WHERE id = ?');
                $update ->execute (array($article_titre, $article_contenu, $edit_id));
                header('location: http://localhost/blog-perso/article.php?id='.$edit_id);
                $message='votre article a bien été mis a jour';
              }
                  }
              else{
                $message = 'Veuillez remplir tous les champs';
        }
      }
 ?>

 <!DOCTYPE html>
 <html lang="fr">

 <head>

     <title>redaction / Edition</title>
     <meta charset="UTF-8">
<link rel="stylesheet" href="style.css">

 </head>

  <body>

<div class='grandCadre'>
<article class='petitCadre'>
     <center><form  method="POST">

          <p>Titre:</p><br><input  type="text" name="article_titre" placeholder="Titre"
            <?php
             if($mode_edition == 1)
               {
              ?>
              value="<?=$edit_article['titre'] ?>"
              <?php
               }
              ?> /><br/>
<p>Article:</p><br>
            <textarea name="article_contenu" placeholder="Contenu de l'article"><?php
            if($mode_edition == 1)
               {
              echo trim($edit_article['contenu']);
               }
              ?></textarea><br/>
          <input type ="submit" value="envoyer l'article"/>
     </form>

   <?php
      if (isset($message)){
         echo $message;
     }
    ?></center>
    </article>
      </div>
  </body>
</html>
