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
        $result = self::$connection->query('SELECT * FROM messages ORDER BY id ASC');
        return $result ? $result->fetchAll(PDO::FETCH_ASSOC) : null;
    }

    public static function getMessage($messageId)
    {
        self::BddConnect();
        $result = self::$connection->query('SELECT * FROM messages where id = ' . $messageId);
        return $result ? $result->fetch(PDO::FETCH_ASSOC) : null;
    }

    public static function deleteMessage( $messageId )
    {
        self::BddConnect();

        $result = self::$connection->prepare( 'DELETE FROM messages WHERE id = :id' );
        $result->execute( array(
            'id' => $messageId,
        ) );
    }

    /* public static function getMessageByName($messageName)
    {
        self::BddConnect();
        $result = self::$connection->query('SELECT * FROM messages where name = ' . $messageName);
        return $result ? $result->fetch(PDO::FETCH_ASSOC) : null;
    } */
}