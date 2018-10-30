<?php

/**
 * Description of show
 *
 * @author cedric
 */
class showTypes {

    private $connexion;
    public $title;
    public $performer;
    public $date;
    public $showTypesId;
    public $firstGenreId;
    public $secondGenreId;
    public $duration;
    public $startTime;

    public function __construct() {
        try {
            $this->connexion = NEW PDO('mysql:host=127.0.0.1;dbname=colyseum', 'root', 'couz02072014');
        } catch (Exception $ex) {
            die($e->getMessage());
        }
    }

    public function getShowTypes() {
        $object = array(); // initialisation d'un tableau vide qui s'affichera en cas d'erreur
        $showTypesResult = $this->connexion->query('SELECT `type` FROM `showTypes`');
        if (is_object($showTypesResult)) {
            $object = $showTypesResult->fetchAll(PDO::FETCH_OBJ);
        }
        return $object; // affichage du tableau, vide s'il y a erreur
    }

    public function __destruct() {
        ;
    }

}
