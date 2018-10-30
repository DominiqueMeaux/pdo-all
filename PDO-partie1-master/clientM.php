<?php

/**
 * Description of clientM
 *
 * @author cedric
 */
class clientM {

    public function __construct() {
        ;
    }

    public function getClientM() {
        /**
         * instansiation de la bdd
         */
        $colyseumDb = NEW PDO('mysql:host=127.0.0.1;dbname=colyseum', 'root', 'couz02072014');
        // stockage de la requète sql dans une variable
        $clientM = 'SELECT `lastName`, `firstName`'
                . 'FROM `clients`'
                . 'WHERE `M%` IN `lastName`'
                . 'ORDER BY ASC';
        // on execute la requete et on stock le resultat (objet pdo) dans une variable
        $reqClientM = $colyseumDb->query($clientM);
        return $reqClientM;
    }

    public function __destruct() {
        ;
    }

}
