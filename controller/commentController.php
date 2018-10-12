<?php
    namespace projetfour\controller;
    require_once('Controller.php');
    require_once('model\commentManager.php');
    class CommentController extends Controller
    {
        public function formSubscribe()
        {
            require('view/frontend/formSubscribeView.php');
        }
        public function addComment($id, $pseudo, $message)
        {
            $commentManager = new \projetfour\model\CommentManager();
            $affectedLines = $commentManager->postComment($id, $pseudo, $message);
            if ($affectedLines === false) {
                throw new Exception('Impossible d\'ajouter le commentaire !');
            } else {
                header('Location: index.php?action=postView&id=' . $id);
            }
        }
    }