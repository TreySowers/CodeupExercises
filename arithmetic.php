<?php


function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	return $a + $b;
	} else {
		return "ERROR: Both arguments must be numbers\n";
	}
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	return $a - $b;
	} else {
		return "ERROR: Both arguments must be numbers. \$a was {$a} \$b was {$b}\n";
	}
}

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	return $a * $b;
    } else {
		return "ERROR: Both arguments must be numbers. \$a was {$a} \$b was {$b}\n";
	}
}

function divide($a, $b) {
	$message = '';
	if ($b == 0) {
		return "Cant divide by zero. Input non-zero number for divisor. \$a was {$a} \$b was {$b}\n";
    	return $a / $b;
    } else {
		return "ERROR: Both arguments must be numbers. \$a was {$a} \$b was {$b}\n";
	}	
}

function modulus($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		if ($b == 0) {
			return throwErrorMessage($a, $b, 'divisorError');	
		}
		return $a % $b;
	} else {
		return throwErrorMessage($a, $b);
	}
}

function throwErrorMessage($error = 'number', $a, $b, $error = 'number') {
	if($error == 'numericError') {
		return "Your inputs must be numeric. \$a was {$a} \$b was {$b}\n";
	} else if($error == 'divisor') {
		return "Cant divide by zero. \$a was {$a} \$b was {$b}\n";
	}
}
echo modulus(10, 0) . PHP_EOL;