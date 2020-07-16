<?php
require_once('models/Bdd.php');


class Facture
{
    public static function getFactures()
    {
        $bdd = new Bdd();
        $connection = $bdd->getConnection();
        $result = $connection->query('SELECT * FROM facture ORDER BY id ASC');
        return $result ? $result->fetchAll(PDO::FETCH_ASSOC) : null;
    }

    public static function getFacture($factureId)
    {
        $bdd = new Bdd();
        $connection = $bdd->getConnection();
        $result = $connection->query('SELECT * FROM facture where id = ' . $factureId);
        return $result ? $result->fetch(PDO::FETCH_ASSOC) : null;
    }

    public static function getFacturesByClient($clientId)
    {
        $bdd = new Bdd();
        $connection = $bdd->getConnection();
        $result = $connection->query('SELECT * FROM facture INNER JOIN client ON client.name = facture.name_client WHERE client.id = ' . $clientId);
        return $result ? $result->fetch(PDO::FETCH_ASSOC) : null;
    }
}
