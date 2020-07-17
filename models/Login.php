<?php 
require_once( 'models/Database.php' );

class Login
{

    public static function Lover( $params )
    {
        $bdd        = new Database();
        $connection = $bdd->getConnection();

        $result = $connection->prepare( 'SELECT * FROM users WHERE name = :login AND hash_pass = :password' );
        $result->execute($params);

        return $result ? $result->fetch( PDO::FETCH_ASSOC ) : null;
    }
}