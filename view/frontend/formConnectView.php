<?php $title = 'Connexion'; ?>
<?php ob_start();?>
    <div class ="row">
        <div class="col-lg-3 col-lg-offset-5">
            <h1> Connexion </h1>
            <div class="form">
            <form method="post" action="index.php?action=connection&amp;resultat=ok">
                <p>Pseudo:<input type="text" name="pseudo" /></p>
                <br><p>Mot de passe:<input type="password" name="password"/></p>
                <br><input type="submit" class="btn btn-success"/>
            </form>
            </div>
        </div>
    </div>
    <?php
        if(isset($_GET['error']))
        {
            echo '<p class="error"> Pseudo ou mot de passe incorrect </p>';
        }
     ?>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>