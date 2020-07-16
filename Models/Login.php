<?php
require_once( 'models/Bdd.php' );

class Login
{

    public static function Admin( $params )
    {
        $bdd        = new Bdd();
        $connection = $bdd->getConnection();

        $result = $connection->prepare( 'SELECT * FROM users WHERE email = :mail AND hash_pass = :password' );
        $result->execute($params);

        return $result ? $result->fetch( PDO::FETCH_ASSOC ) : null;
    }
}
