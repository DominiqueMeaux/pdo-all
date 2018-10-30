<?php

/**
 * Description of showTypes
 *
 * @author cedric
 */
class shows {

    public $connexion;
    public $title;
    public $performer;
    public $date;
    public $showTypesId;
    public $firstGenresId;
    public $secondGenreId;
    public $duration;
    public $startTime;

    public function __construct() {
        /**
         * instansiation de la bdd; try-catch -> gestion de message d'erreur pour eviter l'affichage de données sensibles.
         */
        try {
            $this->connexion = NEW PDO('mysql:host=127.0.0.1;dbname=colyseum', 'root', 'couz02072014');
            ;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function getShows() {
        // stockage de la requète sql dans une variable
        $showsResult = $this->connexion->query('SELECT `title`, `performer`, DATE_FORMAT(`date`, \'%d/%m/%Y\') AS `date`, DATE_FORMAT(`startTime`, \'%H:%i\') AS `startTime`'
                . 'FROM `shows`'
                . 'ORDER BY `title` ASC');
        return $showsResult->fetchAll(PDO::FETCH_OBJ);
    }

    public function __destruct() {
        
    }

}

?>
