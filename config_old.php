<?php

	// This is the configuration page for the Little Printer installation
	// You can change these settings and they will be reflected accross the publication

	$config = array();

	$config['owner_email'] = 'iain.farrell@gmail.com'; 				// Your email
	$config['name'] = 'MotoGP Weekly Standings'; 						// The Title of the publication
	$config['description'] = 'The latest standings in the MotoGP world Championship.'; 		// The description of the publication
	$config['delivered_on'] = 'mondays'; 						// When is the publication delivered? Complete the sentence in English (like 'mondays' or '3rd and 5th of the month')
	$config['send_timezone_info'] = 'false'; 					// Send an ISO 8601 timestamp to the /edition/ endpoint?
	$config['send_delivery_count'] = 'false'; 					// Send the number of deliveries so far?
	$config['external_configuration'] = 'default';
	
	// 'default' - choose automatically
	// 'true' - override true
	// 'false' - override false 

	/*	What options should the user have when subscribing to your publication?
	  	If no configuration is required, comment out the next section 

	  	Here are some examples:

	*/

	// $config['config'][] = array(
	// 	'type' => 'select', // Type, can be text, radio, select, checkbox
	// 	'name' => 'test_select', // What will the value be stored as?
	// 	'label' => 'Please pick one', // What will be shown to the user?
	// 	'options' => array(
	// 		'Option One' => 'option_one',
	// 		'Option Two' => 'option_two',
	// 		'Option Three' => 'option_three'
	// 	)
	//);

	// $config['config'][] = array(
	// 	'type' => 'text', // Type, can be text, radio, select, checkbox
	// 	'name' => 'test_text', // What will the value be stored as?
	// 	'label' => 'Write Something Here', // What will be shown to the user?
		
		// The following are not sent to BERGCloud, but are used in the validate_config endpoint.
		// If you do not need to use these, remove the comma from the end of the previous line

	// 	'maxlength' => 50,
	// 	'minlenth' => 10,

		// Want to use a regex to check the input? Put the regex here:
	// 	'regex' => "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*(\+[a-z0-9-]+)?@[a-z0-9-]+(\.[a-z0-9-]+)*$/i" // This one checks whether or not it is a valid email

	//);

	// End copy and paste

?>
