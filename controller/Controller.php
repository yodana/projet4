<?php
    namespace projetfour\controller;
    require_once('Controller.php');
    require_once('model/postManager.php');
    require_once('model/commentManager.php');
    class Controller
    {
        public function post()
        {
            $postManager = new \projetfour\model\PostManager();
            $postComment = new \projetfour\model\CommentManager();
            $post = $postManager->getPost($_GET['id']);
            $comment = $postComment->getComments($_GET['id']);
            require('view/frontend/postView.php');
        }
    }
