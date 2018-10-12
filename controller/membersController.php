<?php
    namespace projetfour\controller;
    require_once('Controller.php');
    require_once('model/membersManager.php');
    class MembersController extends Controller
    {
        public function formSubscribe()
        {
            require('view/frontend/formSubscribeView.php');
        }
        public function verifSubscribe($pseudo,$password,$password2,$email)
        {
            if($this->securePseudo($pseudo) !== true)
            {
                $verif = $this->securePseudo($pseudo);
                header('Location:index.php?action=subscribe&error=' . $verif);
            }
            else if($this->securePassword($password,$password2) !== true)
            {
                $verif = $this->securePassword($password,$password2);
                header('Location:index.php?action=subscribe&error=' . $verif);
            }
            else if(parent::secureEmail($email) !== true)
            {
                $verif = parent::secureEmail($email);
                header('Location:index.php?action=subscribe&error=' . $verif);
            }
                return 'ok';
        }
        public function addMember($pseudo,$password,$email)
        {
            $memberManager = new \projetfour\model\MembersManager();
            $memberManager->addMember($pseudo,$password,$email);
            header('Location:index.php');
        }
        public function formConnect()
        {
            require('view/frontend/formConnectView.php');
        }
        public function verifConnect($pseudo,$password)
        {
            $memberManager = new \projetfour\model\MembersManager();
            $pseudos = $memberManager->pseudo();
            $verif = NULL;
            while($data = $pseudos->fetch())
            {
                if($data['pseudo'] === $pseudo)
                {
                    $verif = "checkPseudo";
                }
            }
            if($verif === "checkPseudo")
            {
                $data = $memberManager->password($pseudo);
                if(password_verify($password,$data['pass']))
                    return 'ok';
            }
            header('Location:index.php?action=connection&error=false');
        }
        public function connect($pseudo)
        {
            $memberManager = new \projetfour\model\MembersManager();
            session_start();
            $_SESSION['id'] = $memberManager->id();
            $_SESSION['pseudo'] = $pseudo;
            header('Location:index.php');
        }
    }