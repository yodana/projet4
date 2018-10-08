<?php $title = 'Blog'; ?>

<?php ob_start(); ?>
<h1> Billet simple pour l'Alaska </h1>
<?php
    while($data = $posts->fetch())
    {
        echo '<div class ="news">';
        echo
            '<h3>'
                . htmlspecialchars($data['titre']) . 
            '</h3>
            <p>'
                . htmlspecialchars($data['resume']) . '<br/>';
        echo '<a href = "index.php?id=' . $data['id'] . '&amp;action=postView" > 
                Lire la suite
            </a></p></div>';
    }
    $posts->closeCursor();
?>
<a href="index.php?action=newPost">Ajoutez un billet</a>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>