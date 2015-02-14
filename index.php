<?php
	
	if(isset($_GET['fruit']) && isset($_GET['age']))
	{
		if($_GET['fruit'] == '')
		{
			
		}
		else{
			if($_GET['age'] == '')
			{
				die('Please enter an age')
			}
			else if($_GET['fruit']==''){
				die('Please enter a fruit');
			}
			else {
				echo("Values were entered");
			}
		}
	}
	else {
		die('ERORR');
	}
	
	/*
		end of file
	*/