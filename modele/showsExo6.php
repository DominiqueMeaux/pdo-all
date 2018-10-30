<?php
/**
 * Création de la classe shows
 */
class shows{
    //Liste des attributs
    private $connexion;
    public $id;
    public $title;
    public $performer;
    public $Date;
    public $startTime;
    
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
    public function getShowsList(){
        $PDOResult = $this->connexion->query('SELECT `id`, `title`, `performer`, '
                . 'DATE_FORMAT (`date`, \'%d/%m/%Y\') AS `date`, '
                . 'TIME_FORMAT(`startTime`, \'%Hh%i\') AS `startTime` '
                . 'FROM `shows` '
                . 'ORDER BY `title`');
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



