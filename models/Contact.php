<?php
require_once( 'models/Database.php' );

// this class is used for stock message send with "contact/contact.php"
class Message {
    
    public static $connection;

    public static function BddConnect()
    {
        if (!isset($connection)) { 
            $bdd = new Database();
            self::$connection = $bdd->getConnection();
        }
    }

    public static function getMessages()
    {
        self::BddConnect();
        $result = self::$connection->query('SELECT * FROM mails ORDER BY id ASC');
        return $result ? $result->fetchAll(PDO::FETCH_ASSOC) : null;
    }

    public static function getMessage($messageId)
    {
        self::BddConnect();
        $result = self::$connection->query('SELECT * FROM mails where id = ' . $messageId);
        return $result ? $result->fetch(PDO::FETCH_ASSOC) : null;
    }

    public static function getMessageByName($messageName)
    {
        self::BddConnect();
        $result = self::$connection->query('SELECT * FROM mails where name = ' . $messageName);
        return $result ? $result->fetch(PDO::FETCH_ASSOC) : null;
    }
}