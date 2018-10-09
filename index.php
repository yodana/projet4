<?php
    require('controller/frontend.php');
    try{
        if(isset($_GET['action']))
        {
            if(isset($_GET['id']) AND $_GET['action'] == "postView")
            {
                if($_GET['id'] > 0)
                    post();
            }
            elseif ($_GET['action'] == "addComment") 
            {
                addComment($_POST['id_post'], "Except Session pseudo", $_POST['message']);
            }
        }
        else
            listPost();
    }
    catch (Exception $e){
        echo 'Erreur :' . $e->getMessage();
    }
?>