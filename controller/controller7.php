<?php
/**
 * création du controller qui fait le lien entre la vue et le model
 * 
 * on instancie l objet clients
 */
$client = NEW clients();
/*
 * declaration de la variable de l instanciation getClientsList
 */
$clientList = $client->getClientsList();

?>