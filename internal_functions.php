<?php

// TODO: Create your inspect() function here
function inspect($element) {
	if(is_string($element)) {
		return "The string is '$element'." . PHP_EOL;
	} else if(is_int($element)) {
		return "The num is '$element'." . PHP_EOL;
	} else if(is_null($element)) {
		return "The value is NULL" . PHP_EOL;
	} else if(is_array($element)) {
		return "The value is an Array" . PHP_EOL;
	} else if(is_bool($element)) {
		if ($element == true) {
			return "TRUE";
		}
		return "The value is $element" . PHP_EOL;
	} else if(empty($element)) {
		return "The value is an empty array" . PHP_EOL;
	}
}

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;
echo inspect($num1);

echo 'Inspecting $num2:' . PHP_EOL;
echo inspect($num2);

echo 'Inspecting $num3:' . PHP_EOL;
echo inspect($num3);

echo 'Inspecting $num4:' . PHP_EOL;
echo inspect($num4);

echo 'Inspecting $null:' . PHP_EOL;
echo inspect($null);

echo 'Inspecting $bool1' . PHP_EOL;
echo inspect($bool1);

echo 'Inspecting $bool2' . PHP_EOL;
echo inspect($bool2);

echo 'Inspecting $string1' . PHP_EOL;
echo inspect($string1);

echo 'Inspecting $string2' . PHP_EOL;
echo inspect ($string2);

echo 'Inspecting $array1' . PHP_EOL;
echo inspect ($array1);

echo 'Inspecting $array2' . PHP_EOL;
echo inspect ($array2);