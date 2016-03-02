<?php

//$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
//foreach ($things as $datum) {
//	if (is_int($datum)) {
//		echo "{$datum} is a integer\n";
//	} else if (is_float($datum)) {
//		echo "{$datum} is a float\n";
//	} else if (is_array($datum)) {
//		echo "{$datum} is a array\n";
//	} else if (is_null($datum)) {
//		echo "{$datum} is null\n";
//	} else if (is_string($datum)) {
//		echo "{$datum} is a string\n";
//	}
//}

//$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
//foreach ($things as $datum) {
//	if (is_scalar($datum)) {
//		echo "{$datum} is a string, integer, float, or boolean\n";
//	}
//}

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($things as $datum) {
	if (is_array($datum)) {
		echo "Array\n";
		foreach ($datum as $item) {
		 	echo "  {$item}\n";
		}
	} else {
		echo "{$datum}\n";
	}
}

