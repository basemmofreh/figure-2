<?php
 header('Access-Control-Allow-Origin: *');  	
//includes
include_once "./connection/connection.php";
include_once "./connection/GET.php";



//connection instantiation
$connection = new conneDb();
$db = $connection->connect();

//storing values
$arrayData = array();

//HTTP requests
if($_SERVER['REQUEST_METHOD']=='GET')

{
	$get = new getData($db);
	$result = $get->read();
		while($row = mysqli_fetch_assoc($result))
			array_push($arrayData,$row);
		echo json_encode($arrayData);
}



//************************************
if($_SERVER['REQUEST_METHOD']=='POST')
{
	//For future implementation
	return 0;
}
if($_SERVER['REQUEST_METHOD']=='patch')
{
	//For future implementation
	return 0;
}
if($_SERVER['REQUEST_METHOD']=='DELETE')
{
	//For future implementation
	return 0;
}
?>
