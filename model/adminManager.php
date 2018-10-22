<?php
namespace projetfour\model;

    require_once('Manager.php');
class AdminManager extends Manager
{
    public function reportComments()
    {
        $db = $this->dbConnect();
        $comments = $db->query('SELECT * FROM commentaires WHERE strikes > 0');
        return $comments;
    }
}