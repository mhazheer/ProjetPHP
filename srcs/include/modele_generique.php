<?php
ini_set('display_errors', 1);
ini_set('display_errors', 'ISO-8859-15');//gestion des accents
include_once __dir__.'\config.php';

class ModeleGenerique {
    protected static $bdd;
    
    public function __construct() {

    }

    public static function initConnexion(){
        try{
           // $bdd=new PDO('mysql:dbname='.DB_NAME.';host='.DB_HOST.';',DB_USER,DB_PASSWORD);
            self::$bdd=new PDO('mysql:dbname=dutinfopw201628;host=localhost','root','root');
            self::$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e) {
            echo 'La Connection a échoué: ' . $e->getMessage();
        }

    }
}
?>