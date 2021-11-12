<?php
/* This is a function to get the number of Category Contents
	Params: 
			$category: desired category to display
			$limit: positive number of category description to display
	Returns:
			none, prints out directly to standard out.
*/
function getCategoryContents($category, $limit) {
	//Checking if limit is an positive integer
	if ($limit < 1 or !ctype_digit(strval($limit))) {
		print_r("Limit must be a positive integer.\n");
		exit(-1);
	}
	//GET data from API
	$api_url = "https://api.publicapis.org/entries";
	//Get the file content
	$json_data = file_get_contents($api_url);
	$response = json_decode($json_data); //Decode JSON
	$category_data = $response->entries; //GET the list entries.
	$x = 0; //Index number keeping track of limit
	$out = array();
	foreach ($category_data as $cat) {
		if ($x == $limit) {
			break;
		}
		if (strtolower($cat->Category) == strtolower($category)) {
			//print_r($cat);
			$temp = "API: ".$cat->API."\nDescription: ".$cat->Description."\nAuth: ".$cat->Auth."\nHTTPS: ".$cat->HTTPS."\nCors: ".$cat->Cors."\nLink: ".$cat->Link."\nCategory: ".$cat->Category."\n";
			$out[$cat->API] = $temp;
			$x += 1;
		}
	}
	if ($x == 0) {
		print_r("No results\n");
	} else {
		//Allow descending order based on the api as key
		krsort($out);
		foreach ($out as $api => $cat_val) {
			echo $cat_val."\n"; //display the result to standard out
		}
	}
}

getCategoryContents($argv[1], $argv[2]);
?>