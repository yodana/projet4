<?php
    require_once('model/postManager.php');
    function listPost()
    {
        $postManager = new www\tests\super_blog\model\PostManager();
        $posts = $postManager->getPosts();
        require('view/frontend/postsView.php');
    }