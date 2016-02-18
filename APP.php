<?php


	//Getting the message from the address
	//if there is $name= .. then $_GET ["name"]
	$my_message = $_GET ["message"];
	$to = $_GET ["to"];
	$urgency = $_GET ["urgency"];
	echo "My message is " .$my_message. " and it is to " .$to. "IT IS URGENT!!!" .$urgency;
	
	
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