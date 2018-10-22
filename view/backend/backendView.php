<?php $title = 'Connexion'; ?>
<?php ob_start();?>
<a href="index.php?action=admin&resultat=update">Modifier un billet</a>
<a href="index.php?action=admin&resultat=create">Ajoutez un billet </a>
<a href="index.php?action=admin&resultat=delete">Supprimez un billet </a>
<h3> Commentaires signalés </h3>
<?php

    while($data = $reportComments->fetch())
    {
        echo '<div class ="row"><div class="col-lg-3"><p class="titreComment"><strong>' . htmlspecialchars($data['auteur']) . '</strong> le ' . $data['date_commentaire'] . '</p> 
        <p class="comment"> ' . nl2br(htmlspecialchars($data['commentaire'])) . '<a href="index.php?action=admin&action=deleteComment"> Supprimer </a></p></div></div>';
        echo 'Nombres de signalements: ' . $data['strikes'];
    }
    $reportComments->closeCursor();
    ?>
    <?php if(isset($_GET['resultat']))
        {
            if($_GET['resultat'] === "okArticle")
                echo '<p> Nouveau article bien ajouté </p>';
        }
        ?>
<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>