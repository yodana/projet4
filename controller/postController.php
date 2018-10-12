<?php

namespace projetfour\controller;
    require_once('Controller.php');
    require_once('model/postManager.php');

class PostController extends Controller
{
    public function listPost()
    {
        $postManager = new \projetfour\model\PostManager();
        $posts = $postManager->getPosts();
        require('view/frontend/postsView.php');
    }
}