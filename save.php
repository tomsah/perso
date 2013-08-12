<?php 
session_start(); 

//Save the data in a dynamic session 
if(isset($_POST['save'])) {
	$_SESSION[ 'juices' ][ $_POST['page'] ] = $_POST['juice'];

	//Save the data in a database
	//and remove session array , you dont need it anymore
}

//redirect to index 
header('location: index.php');

?>



