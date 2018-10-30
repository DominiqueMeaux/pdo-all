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
        $PDOResult = $this->connexion->query('SELECT `clients`.`lastName`, `clients`.`card` FROM `clients` INNER JOIN `cards` ON clients.cardNumber = cards.cardNumber WHERE `cards`.`cardTypesId` = 1');
        return $PDOResult->fetchAll(PDO::FETCH_OBJ);
        /*
         * inner join existe dans les deux tables
         */
    }
    /**
     * Méthode destruct
     */
    public function __destruct(){
        /*
         * permet de se deconnecter de la base de données a la destruction de la class
         */
        $this->connexion =NULL;
    }
}
?>
