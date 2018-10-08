<?php
namespace www\tests\super_blog\model;
use \PDO as PDO;
    class Manager
    {
        protected function dbConnect()
        {
            $db = new PDO('mysql:host=localhost;dbname=first;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $db;
        }
    }