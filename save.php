<?php 
session_start(); 

//Save the data in a dynamic session 
if(isset($_GET['id_product'])) {

	//Add test : If product exist remove it if not add it
	$_SESSION[ 'juices' ][ $_GET['page'] ][ $_GET['id_product'] ] = $_GET['name_product'];

	//Save the data in a database
	//and remove session array , you dont need it anymore
}

$page = "index";
if(isset($_GET['page'])) {
	$page = $_GET['page'];
} 
//redirect to index 
header('location: ' . basename($page));

?>