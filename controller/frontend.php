<?php
    require_once('model/postManager.php');
    require_once('model/commentManager.php');
    function listPost()
    {
        $postManager = new www\tests\super_blog\model\PostManager();
        $posts = $postManager->getPosts();
        require('view/frontend/postsView.php');
    }
    function post()
    {
        $postManager = new www\tests\super_blog\model\PostManager();
        $postComment = new www\tests\super_blog\model\CommentManager();
        $post = $postManager->getPost($_GET['id']);
        $comment = $postComment->getComments($_GET['id']);
        require('view/frontend/postView.php');
    }
    function addComment($id, $pseudo, $message)
    {
        $commentManager = new www\tests\super_blog\model\CommentManager();

        $affectedLines = $commentManager->postComment($id, $pseudo, $message);
        if ($affectedLines === false) {
            throw new Exception('Impossible d\'ajouter le commentaire !');
        } else {
            header('Location: index.php?action=postView&id=' . $id);
        }
    }