<?php
    session_start();
    require('controller/postController.php');
    require('controller/commentController.php');
    require('controller/membersController.php');
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
                $controller->addComment($_POST['id_post'], $_POST['pseudo'], $_POST['message']);
            }
            else if($_GET['action'] === "subscribe" AND !isset($_SESSION['id']))
            {
                $controller = new projetfour\controller\MembersController();
                if(!isset($_GET['resultat']))
                {
                    $controller->formSubscribe();
                }
                else if(isset($_GET['resultat']))
                {
                        if($controller->verifSubscribe($_POST['pseudo'],$_POST['password'],$_POST['password2'],$_POST['email']) === 'ok')
                            $controller->addMember($_POST['pseudo'],$_POST['password'],$_POST['email']);
                }
            }
            else if($_GET['action'] === "connection" AND !isset($_SESSION['id']))
            {
                $controller = new projetfour\controller\MembersController();
                if(!isset($_GET['resultat']))
                {
                    $controller->formConnect();
                }
                else if($_GET['resultat'] === "ok")
                {
                    if($controller->verifConnect(htmlspecialchars($_POST['pseudo']),htmlspecialchars($_POST['password'])))
                        $controller->connect(htmlspecialchars($_POST['pseudo']));
                }
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