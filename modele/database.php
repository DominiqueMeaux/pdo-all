<?php

class DATABASE{
    

    $this->$db
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
        
         /**
     * Méthode destruct
     */
    public function __destruct(){
        ;
    }
}
?>
