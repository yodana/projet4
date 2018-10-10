<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?=$title?></title>
        <link href="public/assets/css/bootstrap.css" rel="stylesheet">
        <link href="public/css/style.css" rel="stylesheet" /> 
    </head>  
    <body>
        <head>
            <div class ="row">
                <div class="col-lg-3 col-lg-offset-4">
                    <h1> Billet simple pour l'Alaska </h1>
                </div>
            <div class="col-lg-1">
            <?php
            if(!isset($_SESSION['id']))
            {
                echo '<a href="index.php?action=subscribe> <button>Inscription</button></a>
                </div> 
                <div class="col-lg-1">
                    <button> Connexion </button>
                </div>';
            }
            ?>
            </div>
        </head>
        <?= $content ?>
    </body>
</html>