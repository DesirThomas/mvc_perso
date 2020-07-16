<?php
require_once('models/Bdd.php');


class Client
{
    public static function getClients()
    {
        $bdd = new Bdd();
        $connection = $bdd->getConnection();
        $result = $connection->query('SELECT * FROM client ORDER BY id ASC');
        return $result ? $result->fetchAll(PDO::FETCH_ASSOC) : null;
    }

    public static function getClient($clientId)
    {
        $bdd = new Bdd();
        $connection = $bdd->getConnection();
        $result = $connection->query('SELECT * FROM client where id = ' . $clientId);
        return $result ? $result->fetch(PDO::FETCH_ASSOC) : null;
    }

    public static function changeClient($clientId, $params)
    {
        $bdd = new Bdd();
        $connection = $bdd->getConnection();
        $result = $connection->prepare("UPDATE client SET name = :nom , email = :mail , hash_pass = :pass, add_postale = :addresse, tel = :tel, `c.id_passport` = :idpass where id = $clientId");
        $result -> execute($params);
    }

    public static function ajouterClient( $params )
    {
        $bdd        = new Bdd();
        $connection = $bdd->getConnection();

        $result =
            $connection->prepare( 'INSERT INTO client(name, email, hash_pass, add_postale, tel, `c.id_passport`) VALUES(:nom, :mail, :pass, :addresse, :tel, :idpass)' );
        $result->execute( $params );
    }

    public static function supprimerClient( $id )
    {
        $bdd        = new Bdd();
        $connection = $bdd->getConnection();

        $result = $connection->prepare( 'DELETE FROM client WHERE id = :id' );
        $result->execute( array(
            'id' => $id,
        ) );
    }
}
