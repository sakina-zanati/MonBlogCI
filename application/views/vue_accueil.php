<html>
<?php $css = css_url('style.css')?>
<head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo $css?>" />
        <title>Mon Blog</title>
    </head>
<body>
<h1> <?php echo $titre ; ?> </h1>
<p>  base : <?php echo $chemin ;  ?> </p>
<p>  site : <?php echo $url;  ?> </p>
<p> <?php echo $contenu ; ?> </p>
<p><?php echo anchor('Site/lesbillets', 'Liste des billets')?> </p>
</body>

</html>

