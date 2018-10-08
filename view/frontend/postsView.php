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
        echo '<a href = "index.php?id=' . $data['id'] . '&amp;action=postView" > 
                Lire la suite
            </a></p></div></div>';
    }
    $posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>