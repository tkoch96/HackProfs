<?php
	header("Location: http://localhost/HackProfs/HackProfs/index.html#submittab");
	if(isset($_POST['fieldone']) && isset($_POST['fieldtwo']) && isset($_POST['fieldthree']) && isset($_POST['fieldfour']) && isset($_POST['fieldfive']) && isset($_POST['fieldsix'])) {
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
		if($_POST['fieldthree'] == '') {
			echo 'Please enter text for field three';
		} else {
			$fieldthree = $_POST['fieldthree'];
		}
		if($_POST['fieldfour'] == '') {
			echo 'Please enter text for field four';
		} else {
			$fieldfour = $_POST['fieldfour'];
		}
		if($_POST['fieldfive'] == '') {
			echo 'Please enter text for field five';
		} else {
			$fieldfive = $_POST['fieldfive'];
		}
		if($_POST['fieldsix'] == '') {
			echo 'Please enter text for field six';
		} else {
			$fieldsix = $_POST['fieldsix'];
		}
		$person = $_POST['profname'];
		$personfilename = $person. '.txt';
		
		$fp = fopen($personfilename,'a+');
		
		if(true) {
			fwrite($fp, "Here is how well spoken a student thought you are. \n");
			fwrite($fp, $fieldone);
			fwrite($fp, "\nHere is how fair the student thought you are as a grader.\n");
			fwrite($fp, $fieldtwo."\n");
			fwrite($fp, "\nHere is how a student sees class notes, how valuable class time is, and how engaging the class is.\n");
			fwrite($fp, $fieldthree."\n");
			fwrite($fp, "\nHere is how fair a student deems your assessments and how well they reflect course material.\n");
			fwrite($fp, $fieldfour."\n");
			fwrite($fp, "\nHere is what a student deems your strengths to be.\n");
			fwrite($fp, $fieldfive."\n");
			fwrite($fp, "\nHere is what a student deems your weaknesses to be.\n");
			fwrite($fp, $fieldsix."\n");
			fclose($fp);
		}
		else {
			echo 'Could not find file';
		}
		
		header("Location: http://localhost/HackProfs/HackProfs/thankspage.html");
	} else {
		echo 'Error, fields not set';
	}
	
	
	