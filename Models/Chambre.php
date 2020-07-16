<?php
require_once('models/Bdd.php');


class Chambre
{
    public static function getChambres()
    {
        $bdd = new Bdd();
        $connection = $bdd->getConnection();
        $result = $connection->query('SELECT * FROM chambre ORDER BY id ASC');
        return $result ? $result->fetchAll(PDO::FETCH_ASSOC) : null;
    }

    public static function getChambre($chambreId)
    {
        $bdd = new Bdd();
        $connection = $bdd->getConnection();
        $result = $connection->query('SELECT * FROM chambre where id = ' . $chambreId);
        return $result ? $result->fetch(PDO::FETCH_ASSOC) : null;
    }

    public static function getChambreByType($typeId)
    {
        $bdd = new Bdd();
        $connection = $bdd->getConnection();
        $result = $connection->query('SELECT * FROM chambre where id_type = ' . $typeId);
        return $result ? $result->fetch(PDO::FETCH_ASSOC) : null;
    }

    /* public function getValidChambreByType($typeId)
    {
        $bdd = new Bdd();
        $connection = $bdd->getConnection();
        $result = $connection->query('SELECT * FROM chambre where id_type = ' . $typeId);
        return $result ? $result->fetch(PDO::FETCH_ASSOC) : null;
    } */

    public static function changeChambre($chambreId, $params)
    {
        $bdd = new Bdd();
        $connection = $bdd->getConnection();
        $result = $connection->prepare("UPDATE chambre SET etat = :etat , id_type = :type , info = :info where id = $chambreId");
        $result -> execute($params);
    }

    public static function ajouterChambre( $params )
    {
        $bdd        = new Bdd();
        $connection = $bdd->getConnection();

        $result =
            $connection->prepare( 'INSERT INTO chambre(etat, id_type, info) VALUES(:etat, :type, :info)' );
        $result->execute( $params );
    }

    public static function supprimerChambre( $id )
    {
        $bdd        = new Bdd();
        $connection = $bdd->getConnection();

        $result = $connection->prepare( 'DELETE FROM chambre WHERE id = :id' );
        $result->execute( array(
            'id' => $id,
        ) );
    }
}
