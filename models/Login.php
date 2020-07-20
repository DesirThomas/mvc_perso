<?php 
require_once( 'models/Database.php' );

class Login
{

    public static function Lover( $params )
    {
        $bdd        = new Database();
        $connection = $bdd->getConnection();

        $result = $connection->prepare( 'SELECT * FROM lovers WHERE name = :login AND pass = :password' );
        $result->execute($params);

        return $result ? $result->fetch( PDO::FETCH_ASSOC ) : null;
    }
}