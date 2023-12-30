<?php

class Bdd
{
    public static function connexion()
    {
        try {
            return new PDO("mysql:host=localhost;dbname=Smartbike", "root", "");
        } catch (Exception $e) {
            return $e->getMessage();

        }
    }

}

$bdd = Bdd::connexion();