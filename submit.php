<?php
	header("Location: http://localhost/HackProfs/HackProfs/index.html#submittab");
	if(isset($_POST['fieldone']) && isset($_POST['fieldtwo']) && isset($_POST['fieldthree']) && isset($_POST['fieldfour']) && isset($_POST['fieldfive']) && isset($_POST['fieldsix'])) {
		
		$person = $_POST['profname'];
		if(!file_exists($person.'txt')){
			$personfilename = $person. '.txt';
		}
		$fieldone = $_POST['fieldone'];
		$fieldtwo = $_POST['fieldtwo'];
		$fieldthree = $_POST['fieldthree'];
		$fieldfour = $_POST['fieldfour'];
		$fieldfive = $_POST['fieldfive'];
		$fieldsix = $_POST['fieldsix'];
		if(!file_exists('ProfEmails.txt');
			shell_exec('touch ProfEmails.txt');
		}
		$fp = fopen('ProfEmails.txt','w');
		fwrite($fp, $person."\n");
		fclose($fp);
		
		
		$fp = fopen($personfilename,'a+');
		
		if($fieldone != '') {
			fwrite($fp, "Here is how well spoken a student thought you are. \n");
			fwrite($fp, $fieldone);
		}
		if($fieldtwo != '') {
			fwrite($fp, "\nHere is how fair the student thought you are as a grader.\n");
			fwrite($fp, $fieldtwo."\n");
		}
		if($fieldthree != '') {
			fwrite($fp, "\nHere is how a student sees class notes, how valuable class time is, and how engaging the class is.\n");
			fwrite($fp, $fieldthree."\n");
		}
		if($fieldfour != '') {
			fwrite($fp, "\nHere is how fair a student deems your assessments and how well they reflect course material.\n");
			fwrite($fp, $fieldfour."\n");
		}
		if($fieldfive != '') {
			fwrite($fp, "\nHere is what a student deems your strengths to be.\n");
			fwrite($fp, $fieldfive."\n");
		}
		if($fieldsix != '') {
			fwrite($fp, "\nHere is what a student deems your weaknesses to be.\n");
			fwrite($fp, $fieldsix."\n");
		}
			fclose($fp);

		
		header("Location: http://localhost/HackProfs/HackProfs/thankspage.html");
	} else {
		echo 'Error, fields not set';
	}
	
	
	