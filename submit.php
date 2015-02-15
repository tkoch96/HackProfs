<?php
	
	if(isset($_POST['fieldone']) && isset($_POST['fieldtwo'])) {
		if($_POST['fieldone'] == '') {
			echo 'Please enter text for field one';
		}
		else {
			$fieldone = $_POST['fieldone'];
		}
		if($_POST['fieldtwo'] == '') {
			echo 'Please enter text for field two';
		} else {
			$fieldtwo = $_POST['fieldtwo'];
		}
		
		$person = $_POST['profname'];
		$personfilename = $person. '.txt';
		
		$fp = fopen($personfilename,'a+');
		
		if(true) {
			fwrite($fp, "Here are some things a student liked. \n");
			fwrite($fp, $fieldone);
			fwrite($fp, "\nHere are some things a student thought you could improve upon.\n");
			fwrite($fp, $fieldtwo."\n");
			fclose($fp);
		}
		else {
			echo 'Could not find file';
		}
	} else {
		echo 'Error, fields not set';
	}
	
	
	