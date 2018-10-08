<?php
    require('controller/frontend.php');
    try{
        listPost();
    }
    catch (Exception $e){
        echo 'Erreur :' . $e->getMessage();
    }
?>