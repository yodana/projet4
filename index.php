<?php
    require('controller/postController.php');
    require('controller/commentController.php');
    try{
        if(isset($_GET['action']))
        {
            if(isset($_GET['id']) AND $_GET['action'] == "postView")
            {
                if($_GET['id'] > 0)
                {
                    $controller = new projetfour\controller\Controller();
                    $controller->post();
                }
            }
            elseif ($_GET['action'] == "addComment") 
            {
                $controller = new projetfour\controller\CommentController();
                $controller->addComment($_POST['id_post'], "Except Session pseudo", $_POST['message']);
            }
            else if($_GET['action'] == "subscribe" AND !isset($_SESSION['id']))
            {
                $controller = new projetfour\controller\CommentController();
                $controller->formSubscribe();
            }
        }
        else
        {
            $controller = new projetfour\controller\PostController();
            $controller->listPost();
        }
    }
    catch (Exception $e){
        echo 'Erreur :' . $e->getMessage();
    }
?>