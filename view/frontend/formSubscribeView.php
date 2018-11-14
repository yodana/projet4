<?php $title = 'Inscription'; ?>
<?php ob_start();?>
    <div class ="row">
    <div class="col-lg-3 col-lg-offset-5">
        <h1> Inscription </h1>
        <form class="formSubscribe" method="post" action="index.php?action=subscribe&amp;resultat=ok">
            <p>Pseudo:<br><input type="text" name="pseudo" /></p>
            <br><p>Mot de passe:<br><input type="password" name="password"/></p>
            <br><p>Repetez mot de passe:<br><input type="password" name= "password2"/></p>
            <br><p>Email :<br><input type="email" name="email"/></p>
            <br><input type="submit" class="btn btn-success"/>
        </form>
    </div>
    <?php
            if(isset($_GET['error']))
            {
                if($_GET['error'] === 'samePseudo')
                {
                    echo '<p class="error"> Pseudo déjà pris</p>';
                } 
                else if($_GET['error'] === 'empty')
                {
                    echo '<p class="error" Veuillez remplir tout les champs</p>';
                }
                else if($_GET['error'] === 'notSamePassword')
                {
                    echo '<p class="error"> Les mots de passes ne sont pas identiques </p>';
                }
                else if($_GET['error'] === 'wrongEmail')
                {
                    echo '<p class="error"> Email invalide </p>';
                }
                else if($_GET['error'] === 'sameEmail')
                {
                    echo '<p class="error"> Email déjà pris </p>';
                }
            } 
    ?>
    <?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>