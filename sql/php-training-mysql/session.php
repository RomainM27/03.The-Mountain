<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

$utilisateurConnu = false;
// On récupère nos variables de session
if (isset($_SESSION['login'])) {

	// On teste pour voir si nos variables ont bien été enregistrées
	
    $utilisateurConnu = true;
	// On affiche un lien pour fermer notre session

}
?>