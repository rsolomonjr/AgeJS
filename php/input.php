<!DOCTYPE html>
<html>
<head>
	<title>JS &amp; PHP Project Project</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/styles.css"> <!-- main stylesheet --> 
</head>
<body>
	<?php
		
		function getAge($age){

		echo "Consider the following: " . "<br>";	
	    
	    $message = null; # define the $message variable 
	    
	    if ($age <= 23)
	    {
	        $message = "You're still a pup! Stay in school.";
	        
	    }
		
		    elseif ($age > 24 && $age <= 38)
		    {
		       $message = "This is the prime of your life-- Enjoy it!"; 
		    }
		    elseif ($age > 38 && $age <= 49)
		    {
		        $message = "This is the time to focus on your career!";
		    }
		    elseif ($age > 49 && $age <= 59)
		    {
		        $message = "These might be your prime earning years.";
		    }
		    elseif ($age > 59 && $age <= 65)
		    {
		        $message = "Time to get ready for retirement.";
		    }
	    
	    else
	    {
	        $message = "What's life's next adventure?";
	    }

	    	giveMessage($message); 
		}
		
		getAge($_POST["age"]); # get from html form
		
		#DRY adding class to message
		#After creating the function, I added extra styling to the message
		
		function giveMessage($message){
			echo("<span class='message'>" . $message . "</span>"); 
		}
	?>
</body>
</html>