<?php
/**
 * création du controller qui fait le lien entre la vue et le model
 * instenciation de la class
 * declaration de l instance clients
 */
$client = NEW clients();
/*
 * declaration de la variable de l instanciation getClientsList
 */
$clientList = $client->getClientsByFirstLetterList();

?>
