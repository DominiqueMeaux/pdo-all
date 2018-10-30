<?php
/**
 * création du controller qui fait le lien entre la vue et le model
 * instenciation de la class shows
 */
$show = NEW shows();
/*
 * appel de la methode getShowsList
 */
$showList = $show->getShowsList();

?>
