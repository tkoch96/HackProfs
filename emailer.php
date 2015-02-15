<?php

	//would need list of emails of professors
	
	$profarrays = array( 
		array(
			'person' => 'koch.txt',
			'email' => 'tomkoch123@gmail.com'
		)
		//insert more professors here
	)
			
	foreach($profarrays as $person) {
		$fp = fopen($person['person'],r);
		$rawData = fread($fp,filesize($fp));
		
		mail($person['person'], Student Reviews, $rawData);
		fclose($fp);
	
	}
	