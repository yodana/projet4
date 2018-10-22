<?php
namespace projetfour\controller;
    require_once('Controller.php');
    require_once('model\AdminManager.php');
    class AdminController extends Controller
    {
        public function backend()
        {
            $adminManager = new \projetfour\model\AdminManager();
            $reportComments = $adminManager->reportComments();
            require('view/backend/backendView.php');
        }
        public function modifArticle()
        {
            $adminManager = new \projetfour\model\AdminManager();
            require('view/backend/modifArticleView.php');
        }
        public function create()
        {
            require('view/backend/formNewArticleView.php');
        }
        public function newArticle($newTitle,$newArticle,$newResume)
        {
            $adminManager = new \projetfour\model\AdminManager();
            $adminManager->addArticle($newTitle,$newArticle,$newResume);
            header('Location:index.php?action=admin&resultat=okArticle');
        }
    }