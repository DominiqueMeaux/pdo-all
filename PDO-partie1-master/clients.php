<?php

/**
 * Description of client
 *
 * @author cedric
 */
class clients {

    private $connexion;
    public $lastName;
    public $firstName;
    public $birthDate;
    public $card;
    public $cardNumber;
    public $id;

    public function __construct() {
        /**
         * instansiation de la bdd try-catch -> gestion de message d'erreur pour eviter l'affichage de données sensibles.
         */
        try {
            $this->connexion = NEW PDO('mysql:host=127.0.0.1;dbname=colyseum', 'root', 'couz02072014');
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * methode getClients pour récupérer les valeurs
     * @return type
     */
    public function getClients() {

// stockage de la requète sql dans une variable
        $clientsResult = $this->connexion->query('SELECT `lastName`, `firstName` FROM `clients`');

// on execute la requete et on stock le resultat (objet pdo) dans une variable
        return $clientsResult->fetchAll(PDO::FETCH_OBJ);
    }

    public function getTwentyClients() {
        $twentyClientsResult = $this->connexion->query('SELECT `lastName`, `firstName` FROM `clients` LIMIT 20');
        return $twentyClientsResult->fetchAll(PDO::FETCH_OBJ);
    }

    public function getFidelityCArd() {
        $isObjectResult = array ();
        $fidelityCardResult = $this->connexion->query('SELECT `ct`.`type`, `c`.`cardNumber`, `cl`. `lastName`, `cl`.`firstName`'
                . 'FROM `cardTypes` AS `ct`'
                . 'INNER JOIN `cards` AS `c`'
                . 'ON `ct`.`id` = `c`.`cardTypesId`'
                . 'INNER JOIN `clients` AS `cl`'
                . 'ON `c`.`cardNumber` = `cl`.`cardNumber`'
                . 'WHERE `ct`.`id` = 1');
        if (is_object($fidelityCardResult)) {
            $isObjectResult = $fidelityCardResult->fetchAll(PDO::FETCH_OBJ);
        }
        return $isObjectResult;
    }

    public function getClientM() {
        $clientMResult = $this->connexion->query('SELECT `lastName`, `firstName`'
                . 'FROM `clients`'
                . 'WHERE `lastName` LIKE \'m%\''
                . 'ORDER BY `lastName` ASC');
        return $clientMResult->fetchAll(PDO::FETCH_OBJ);
    }

    public function getClientsInfo() {
        $clientInfoResult = $this->connexion->query('SELECT `clients`.`lastName`, `clients`.`firstName`, `clients`.`birthDate`, `clients`.`cardNumber`, `clients`.`card`, '
                . 'IF(`cards`.`cardTypesId` = 1, \'OUI\', \'NON\' ) AS `cardTypesId`'
                . ' FROM `clients`'
                . ' LEFT JOIN `cards` '
                . 'ON `clients`.`cardNumber`=`cards`.`cardNumber`'); 
     
                
                /* . '(CASE '
                . 'WHEN `cards`.`cardTypesId`= 1'
                . ' THEN \'Oui\' '
                . 'ELSE \'Non\' '
                . 'END) AS \'case\''
                 * /
                 */
             
        return $clientInfoResult->fetchAll(PDO::FETCH_OBJ);
    }

    public function __destruct() {
        
    }

}

?>
