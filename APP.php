<?php


	//Getting the message from the address
	//if there is $name= .. then $_GET ["name"]
	$my_message = $_GET ["message"]
	
	echo "My message is " .$my_message;

?>

<h2> First Application </h2>

<form method="get">
	<label for="message">Message* <label><br>
	<input type="text" name="message"><br>
	<label for="to">To* <label><br>
	<input type="text" name="is for"><br>
	<input type="submit" value="save to DB">
	
	
	



<form>