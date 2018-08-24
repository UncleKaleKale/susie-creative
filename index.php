

<!DOCTYPE html>		
<html>			
	<head>	
	<title>A contact form</title>
	</head>		
	 <body>		
	 	<?php
if (empty ($_POST) === false) {
   $errors = array();

  $Name 		= $_POST['name'];
	$Email 		= $_POST['email'];
	$message 	= $_POST['message'];


	if(empty($name) === true || empty ($email) === true || empty(message) === true){

		{else}
	}
 }
 ?>
	<form action=""	method="post">
		<P>		
		<label	for="name">Name:</label><br>
		<input	type:="text" name="name" id="name">
		</p>		
		<P>		
		<label	for="email">Email:</label><br>
		<input	type:="text" name="email" id="email">
		</p>		
		<P>		
		<label	for="message">Message:</laber><br>
		<textarea name="message" id="message"></textarea>
		</p>		
		<P>		
		<input	type:="submit" value="Submit">
</p>
</form>

</body>
</html>
