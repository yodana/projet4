<?php $title = 'Inscription'; ?>
<?php ob_start();?>
    <form method="post" action="index.php?action=subscribe&amp;resultat=ok">
        <p>Pseudo:<input type="text" name="pseudo" /></p>
        <p>Mot de passe:<input type="password" name="password"/></p>
        <p>Repetez mot de passe:<input type="password" name= "password2"/></p>
        <p>Email :<input type="email" name="email"/></p>
        <input type="submit"/>
    </form>
    <?php
            if(isset($_GET['error']))
            {
                if($_GET['error'] === 'samePseudo')
                {
                    echo '<p> Pseudo déjà pris</p>';
                } 
                else if($_GET['error'] === 'empty')
                {
                    echo '<p> Veuillez remplir tout les champs</p>';
                }
                else if($_GET['error'] === 'notSamePassword')
                {
                    echo '<p> Les mots de passes ne sont pas identiques </p>';
                }
                else if($_GET['error'] === 'wrongEmail')
                {
                    echo '<p> Email invalide </p>';
                }
                else if($_GET['error'] === 'sameEmail')
                {
                    echo '<p> Email déjà pris </p>';
                }
            } 
    ?>