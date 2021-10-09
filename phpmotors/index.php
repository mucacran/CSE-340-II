<?php
// Get the database connection file
 require_once 'library/connections.php';
 // Get the PHP Motors model for use as needed
 require_once 'model/main-model.php';

 // Get the array of classifications
 $classifications = getClassifications();

 var_dump($classifications);
	exit;