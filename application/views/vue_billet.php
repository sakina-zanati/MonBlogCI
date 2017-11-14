<html>

<head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="<?php echo $chemin.'/style.css'?>" />
        <title>Mon Blog</title>
    </head>
<body>
<h1> <?php echo $titre ; ?> </h1>

<?php foreach ($lesBillets as $billet):  ?>
                   
     <h2><?= $billet['titre'] ?></h2>
     <time><?= $billet['date'] ?></time>
                      
      <p><?= $billet['contenu'] ?></p>
         
      <hr />
 <?php endforeach; ?>
</body>

</html>

