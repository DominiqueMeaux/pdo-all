<?php
/**
 * Création de la classe showTypes
 */
class showTypes{
    //Liste des attributs
    private $connexion;
    public $id;
    public $type;   
    /**
     * Méthode construct
     */
    public function __construct(){
        //On test les erreurs avec le try/catch 
        //Si tout est bon, on est connecté à la base de donnée
        /**
         * new pdo= instenciation de la base de données
         */
        try{
            $this->connexion = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'dom', '123');
        }
        //Autrement, un message d'erreur est affiché a l aide de catch
        catch(Exception $e){
            die($e->getMessage());
        }
    }
    /**
     * Méthode getClientsList pour récupérer le résultat de la requête
     * @return type
     */
    public function getshowList(){
        $isObjectResult = array();
        /**
         * on met la requete
         */
        $PDOResult = $this->connexion->query('SELECT `id` ,`type` FROM `showTypes`');
        /*
         * verifie que $PDOResult est un objet
         */
        // Vérifie que $PDOResult est un objet
        if (is_object($PDOResult)) {
          // Stocke la requête dans $PDOResult
          $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }
        /*
         * fetchAll est utilisé pour affiché toute les reponses
         * cela renvoie un booleen quand il y a une erreur
         * (PDO::FETCH_OBJ)  :  
         */
    
    /**
     * Méthode destruct
     */
    public function __destruct(){
        ;
    }
}
?>
