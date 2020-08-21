<?php
require_once( 'models/Database.php' );

// this model is used for create/edit/delete projects visible at "portfolio/portfolio.php"
class Project {
    
    public static $connection;

    public static function BddConnect()
    {
        if (!isset($connection)) { 
            $bdd = new Database();
            self::$connection = $bdd->getConnection();
        }
    }

    public static function getProjects()
    {
        self::BddConnect();
        $result = self::$connection->query('SELECT * FROM projects ORDER BY id ASC');
        return $result ? $result->fetchAll(PDO::FETCH_ASSOC) : null;
    }

    public static function getProject($projectId)
    {
        self::BddConnect();
        $result = self::$connection->query('SELECT * FROM projects where id = ' . $projectId);
        return $result ? $result->fetch(PDO::FETCH_ASSOC) : null;
    }

    public static function addProject( $params )
    {
        self::BddConnect();
        $result = self::$connection->prepare( 'INSERT INTO projects(name, img, img_alt, txt, link) VALUES( :name, :img, :img_alt, :txt, :link )' );
        $result->execute( $params );
    }

    public static function editProject($projectId, $params)
    {
        self::BddConnect();
        $result = self::$connection->prepare("UPDATE projects SET name = :name , img = :img , img_alt = :img_alt, txt = :txt , link = :link where id = $projectId");
        $result -> execute($params);
    }

    public static function deleteProject( $projectId )
    {
        self::BddConnect();

        $result = self::$connection->prepare( 'DELETE FROM projects WHERE id = :id' );
        $result->execute( array(
            'id' => $projectId,
        ) );
    }
}