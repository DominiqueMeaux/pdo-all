<?php
/**
 * création du controller qui fait le lien entre la vue et le model
 * on instencie l objet clients
 */
$client = NEW clients();
/*
 * methode getClientsList
 * appele de la méthode ( ou fonction ) par stockage dans une variable.
 */
$clientList = $client->getClientsList();

?>
