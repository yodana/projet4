<?php $title = 'Blog'; ?>

<?php ob_start(); ?>
<?php
    while($data = $posts->fetch())
    {
        echo '<div class ="news"class="row">';
        echo
            '<div class="col-lg-6 col-lg-offset-3">
            <h3>'
                . htmlspecialchars($data['titre']) . 
            '</h3>
            <p>'
                . htmlspecialchars($data['resume']) . '<br/>';
        if(isset($_GET['resultat']) AND isset($_SESSION['id_groupe']) AND isset($_GET['action']))
         {
            if($_GET['resultat'] === "update" AND $_SESSION['id_groupe'] AND $_GET['action'] === "admin")
                echo '<a href= "index.php?action=admin&resultat=update&id=' . $data['id'] . '"> Modifier </a>';
         else if($_GET['resultat'] === "delete" AND $_SESSION['id_groupe'] AND $_GET['action'] === "admin")
            echo '<a href= "index.php?action=admin&resultat=delete&id=' . $data['id'] . '"> Supprimer </a>';
         }
         else   
            echo '<a href = "index.php?id=' . $data['id'] . '&amp;action=postView" > 
                Lire la suite
            </a>';
        echo '</p></div></div>';
    }
    $posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>