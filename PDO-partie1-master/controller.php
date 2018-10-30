<?php

//instansiation de la classe clients
$clients = NEW clients();
$clientsList = $clients->getClients();
//instansiation de la classe showType
$showTypes = NEW showTypes();
$showTypesList = $showTypes->getShowTypes();
//instansiation de la classe twentyCards
$twentyClients = NEW clients();
$twentyClientsList = $clients->getTwentyClients();
//instansiation de la classe fidelityCard
$fidelityCard = NEW clients();
$fidelityCardList = $clients->getFidelityCArd();
//instansiation de la classe clientM
$clientM = NEW clients();
$clientMList = $clients->getClientM();
//instansiation de la classe shows
$shows = NEW shows();
$showsList = $shows->getShows();
//instansiation de la classe clients
$clients = NEW clients();
$clientsInfoList = $clients->getClientsInfo();

//  /!\ ici plusieurs controlleur car plusieurs vues gérées par materialize sur la même page index.php.
// utiliser un controller par vue sinon  /!\s
?>