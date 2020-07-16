<?php
require_once('models/Bdd.php');


class Reservation
{
    public static function getReservations()
    {
        $bdd = new Bdd();
        $connection = $bdd->getConnection();
        $result = $connection->query('SELECT * FROM reservation ORDER BY id ASC');
        return $result ? $result->fetchAll(PDO::FETCH_ASSOC) : null;
    }

    public static function getReservation($reservationId)
    {
        $bdd = new Bdd();
        $connection = $bdd->getConnection();
        $result = $connection->query('SELECT * FROM reservation where id = ' . $reservationId);
        return $result ? $result->fetch(PDO::FETCH_ASSOC) : null;
    }

    public static function getReservationsByClient($clientId)
    {
        $bdd = new Bdd();
        $connection = $bdd->getConnection();
        $result = $connection->query('SELECT * FROM reservation where id_client = ' . $clientId);
        return $result ? $result->fetch(PDO::FETCH_ASSOC) : null;
    }

    public static function changeReservation($reservationId, $params)
    {
        $bdd = new Bdd();
        $connection = $bdd->getConnection();
        $result = $connection->prepare("UPDATE reservation SET id_client = :client , id_chambre = :chambre , date_debut = :debut, date_fin = :fin where id = $reservationId");
        $result -> execute($params);
    }

    public static function ajouterReservation( $params )
    {
        $bdd        = new Bdd();
        $connection = $bdd->getConnection();

        $result =
            $connection->prepare( 'INSERT INTO reservation(id_client, id_chambre, date_debut, date_fin) VALUES(:client, :chambre, :debut, :fin)' );
        $result->execute( $params );
    }

    public static function supprimerReservation( $id )
    {
        $bdd        = new Bdd();
        $connection = $bdd->getConnection();

        $result = $connection->prepare( 'DELETE FROM reservation WHERE id = :id' );
        $result->execute( array(
            'id' => $id,
        ) );
    }

    public static function end( $id ){
        $bdd        = new Bdd();
        $connection = $bdd->getConnection();

        $statement  = $connection->prepare("UPDATE reservation SET termine = 'oui' WHERE id =$id");
        $statement->execute();
    }
}
