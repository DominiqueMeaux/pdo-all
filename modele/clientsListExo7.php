<?php

/**
 * Création de la classe clients
 */
class clients{
    //Liste des attributs
    private $connexion;
    public $id;
    public $lastName;
    public $firstName;
    public $birthDate;
    public $card;
    public $cardNumber;
    /**
     * Méthode construct
     */
    public function __construct(){
        //On test les erreurs avec le try/catch
        //Si tout est bon, on est connecté à la base de donnée
        try{
            $this->connexion = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'dom', '123');
        }
        //Autrement, un message d'erreur est affiché
        catch(Exception $e){
            die($e->getMessage());
        }
    }
    /**
     * Méthode getClientsList pour récupérer le résultat de la requête
     * @return type
     */
    public function getClientsList(){
        $PDOResult = $this->connexion->query('SELECT `clients`.`lastName`, `clients`.`firstName`, '
                . 'DATE_FORMAT(`clients`.`birthDate`, "%d/%m/%Y") AS `birthDate`, `clients`.`cardNumber`, `clients`.`card`, '
                . '(CASE WHEN `cards`.`cardTypesId`= 1 THEN "OUI" ELSE "NON" END) AS `case` '
                . 'FROM `clients` '
                . 'LEFT JOIN `cards` ON `clients`.`cardNumber`=`cards`.`cardNumber` '
                . 'ORDER BY `lastName` ASC');
        return $PDOResult->fetchAll(PDO::FETCH_OBJ);
    }
    /**
     * Méthode destruct
     */
    public function __destruct(){
        ;
    }
}
?>
