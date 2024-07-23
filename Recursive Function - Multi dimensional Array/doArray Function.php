<?php
function doArray($first, $second, $target_key, $search_key, $optional_key = null) {
	$temp = array();
    Global $result; 

	foreach($first as $outerArr){
		foreach($second as $innerArr) {
			$outer_key = (!is_null($optional_key)) ? $optional_key : $search_key; // To handle workspace category key

			if($innerArr[$search_key] == $outerArr[$outer_key]) { // Do we have matching target?
				//echo "outer " . $outer_key . " " . $outerArr[$outer_key] . "<br>";
				//echo "inner " . $search_key . " " . $innerArr[$search_key] . "<br>";
				//print_r($innerArr) . "<br>";
				array_push($outerArr[$target_key],$innerArr);
			}
		}
		array_push($temp, $outerArr);
	}

	$result = $temp;
	unset($temp);
}

$result = array();

// Work the array from inner most arrays to outer arrays
doArray($ticket, $label, "label", "ticket_id");
doArray($result, $people, "people", "ticket_id");
doArray($workspace, $result, "ticket_list", "category_id", "ticket_category_id");

print_r(json_encode($result));

/*
* $GLOBALS - https://www.w3schools.com/php/php_superglobals.asp
*
* Not sure what you use but you can use this website to view the json output
* http://jsonviewer.stack.hu/
*/
?>
