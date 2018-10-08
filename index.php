<?php
    require('controller/frontend.php');
    try{
        if(isset($_GET['action']))
        {
            if(isset($_GET['id']))
            {
                if($_GET['id'] > 0)
                    post();
            }
            elseif ($_GET['action'] == "addComment") 
            {
                addComment($_POST['id_post'], $_SESSION['pseudo'], $_POST['message']);
            }
        }
        else
            listPost();
    }
    catch (Exception $e){
        echo 'Erreur :' . $e->getMessage();
    }
?>