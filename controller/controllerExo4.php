<?php
/**
 * création du controller qui fait le lien entre la vue et le model
 * instenciation de la class clients
 */
$client = NEW clients();
$clientList = $client->getClientsList();

?>