<?php

	//check if there is variable in the URL
	if (isset ($_GET["message"])){
		
		//only if there is message in the URL
		echo "there is message";
		
		// if it is empty
		if (empty ($_GET["message"])){
			//it is empty
			echo "Please enter the message!";
		}else{
			//It is not empty
			echo "Message: ".$_GET["message"]."<br>";
		}
	}else{
		//echo "There is no such thing as message";
	}
	
	}
	
	
	
	//Getting the message from the address
	//if there is $name= .. then $_GET ["name"]
	$my_message = $_GET ["message"];
	$to = $_GET ["to"];
	$urgency = $_GET ["urgency"];
	echo "My message is " .$my_message. " and it is to " .$to;
	
	
?>

<h2> First Application </h2>

<form method="get">
	<label for="to">To* <label><br>
	<input type="text" name="to"><br>
	
	<label for="message">Message* <label><br>
	<input type="text" name="message"><br>
	
	<label for="urgency">Urgency* <label><br>
	<input type="text" name="Urgency"><br>
	
	<input type="submit" value="save to DB">
	
	
	



<form>