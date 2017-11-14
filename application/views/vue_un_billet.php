<html>

<head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="<?php echo $chemin.'/style.css'?>" />
        <title>Mon Blog</title>
    </head>
<body>
<h1> <?php echo $titre ; ?> </h1>

                   
     <h2><?= $billet['titre'] ?></h2>
     <time><?= $billet['date'] ?></time>
                      
      <p><?= $billet['contenu'] ?></p>
      
      <?php foreach($commentaires as $comment): ?>
	<h3> <?php echo $comment['auteur']; ?></h3>
	<p> <?php echo $comment['contenu']; ?></p>
	<hr />
	<?php endforeach; ?>
         
      <hr />
      <?php $action = base_url("index.php/Site/ajoutCommentaire/").$idBillet;
       echo $action; ?>
      
     <form method="post" action="<?php echo $action;?>">

		
		<label for="pseudo">Pseudo : </label>
		<input type="text" name="pseudo" value="" /> 

		<label for="message">Commentaire :</label>
		<textarea name="message"></textarea> 

		<input type="submit" value="Envoyer" />
	</form>
 
</body>

</html>

