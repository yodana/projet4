<?php $title = 'Blog'; ?>

<?php ob_start(); ?>
<div class ="row">
    <div class="col-lg-3 col-lg-offset-4">
        <h1> Billet simple pour l'Alaska </h1>
    </div>
    <div class="col-lg-1">
        <button> Inscription </button>
    </div> 
    <div class="col-lg-1">
        <button> Connexion </button>
    </div>
</div>
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