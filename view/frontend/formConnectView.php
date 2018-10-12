<?php $title = 'Connexion'; ?>
<?php ob_start();?>
    <form method="post" action="index.php?action=connection&amp;resultat=ok">
        <p>Pseudo:<input type="text" name="pseudo" /></p>
        <p>Mot de passe:<input type="password" name="password"/></p>
        <input type="submit"/>
    </form>
    <?php
        if(isset($_GET['error']))
        {
            echo '<p> Pseudo ou mot de passe incorrect </p>';
        }
     ?>