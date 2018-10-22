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
    public function addArticle($titre,$article,$resume)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO billets (titre,contenu,date_creation,resume) VALUES (:titre,:article,NOW(),:resume)');
        $req->execute(array(
            'titre' => $titre,
            'article' => $article,
            'resume' => $resume
        ));
    }
}