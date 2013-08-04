<?php

	$config = array();

	$config['owner_email'] = 'iain.farrell@gmail.com'; 				// Your email
	$config['name'] = 'MotoGP Weekly Standings'; 						// The Title of the publication
	$config['description'] = 'The latest standings in the MotoGP world Championship.'; 		// The description of the publication
	$config['delivered_on'] = 'mondays'; 						// When is the publication delivered? Complete the sentence in English (like 'mondays' or '3rd and 5th of the month')
	$config['send_timezone_info'] = 'false'; 					// Send an ISO 8601 timestamp to the /edition/ endpoint?
	$config['send_delivery_count'] = 'false'; 					// Send the number of deliveries so far?

	$config['external_configuration'] = 'default';
?>
