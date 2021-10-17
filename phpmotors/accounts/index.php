<?php
// Get the database connection file
 require_once '../library/connections.php';
 // Get the PHP Motors model for use as needed
 require_once '../model/main-model.php';

 // Get the array of classifications
 $classifications = getClassifications();

 /*var_dump($classifications);
	exit;*/

// Build a navigation bar using the $classifications array
$navList = '<ul class="d-flex list-unstyled">';
$navList .= "<li><a class='txt-decoration-none txt-blanco p-2 d-block fs-6' href='/phpmotors/index.php' title='View the PHP Motors home page'>Home</a></li>";
foreach ($classifications as $classification) {
 $navList .= "<li><a class='txt-decoration-none txt-blanco p-2 d-block fs-6' href='/phpmotors/index.php?action=".urlencode($classification['classificationName'])."' title='View our $classification[classificationName] product line'>$classification[classificationName]</a></li>";
}
$navList .= '</ul>';

$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
 }

 switch ($action){
	case 'loginHome':
		include '../view/login.php';
	 break;
	
	 case 'registerHome':
		include '../view/register.php';
		break;
   }