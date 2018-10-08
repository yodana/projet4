 <?php $title = htmlspecialchars($post['titre']) ?>
<?php ob_start();?>
        <a href = "index.php">
            Retour à la liste des billets
        </a>
        <?php
         echo '<div class ="news">';
         echo
                         '<h3>'
                             . htmlspecialchars($post['titre']) .
                         '</h3>
                         <p>'
                             . htmlspecialchars($post['contenu']) . '<br/>';
                echo '</p></div>';
            ?>
        <h1>
            Commentaires
        </h1>
        <?php
            while ($data = $comment->fetch()) {
                echo '<p><strong>' . htmlspecialchars($data['auteur']) . '</strong> le ' . $data['date_day_post'] . '</p> 
                <div class="col-lg-3 col-lg-offset-3"><p> ' . nl2br(htmlspecialchars($data['commentaire'])) . '</p></div>';
            }
        ?>
        <form method="post" action="index.php?action=addComment&amp;id=<?= $_GET['id'] ?>">
            Votre commentaire: <br/>
            <textarea name="message"></textarea><br/>
            <input type="hidden" name="id_post" value= <?php echo $_GET['id'] ?> />
            <input type="submit" value="Envoyez"/>
        </form>
        <?php $comment->closeCursor(); ?>
<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>
