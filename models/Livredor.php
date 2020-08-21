<?php
require_once( 'models/Database.php' );

class Livredor {
    
    public static $connection;

    public static function BddConnect()
    {
        if (!isset($connection)) { 
            $bdd = new Database();
            self::$connection = $bdd->getConnection();
        }
    }

}