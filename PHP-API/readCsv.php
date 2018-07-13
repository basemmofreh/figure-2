
<?php
 header('Access-Control-Allow-Origin: *'); 
//converts csv file into json data
$csv = array_map('str_getcsv', file('sample (3).csv'));

//converting array of arrays to object of objects
		for ($i = 0 ;$i<count($csv);$i++)
		{
			$csv[$i]= (object)$csv[$i];
		}
//		$csv = (object)$csv;
	echo json_encode($csv);
?>