<?php

// Fichier(s) communs.
include 'data.php';
include 'utilities.php';


$movies = array_filter($movies, function($movie)
{
	return $movie['duration'] <= $_POST['duration'];
});


// Sélection du template à afficher.
include 'search-duration.phtml';