<?php namespace SRPH\Luhn;

/**
 * Implementation of Luhn algorithm (aka mod-10 algorithm)
 *
 * @param string $value Value to be validated
 * @return boolean
 */
function luhn($value = '')
{
	// We'll just have to return false if the provided value
	// is blank nor a valid string
	if ( !is_string($value) || !strlen($value) )
	{
		return false;
	}

	// Start the first number as an even position
	$isEven = true; // even-position flag
	$total = 0; // Total value of all the digits
	// Used only to store the result of the doubled value for even positions
	$buffer;

	// We'll reverse the string order since
	// he itration will start from last to first.
	foreach(strrev($value) as $val)
	{
		// We'll just add normally if the current value is an odd position.
		// Otherwise, double the current value, and then add both digits if greater than 10
		// e.g, 6 => 12 => 1 + 2 => 3
		// e..g, 3 => 6
		$total += !$isEven
			? $val
			: ($buffer = $val * 2) > 9 ? $buffer[0] + $buffer[1] : $buffer

		// Indicate that the next iteration will be an odd position
		$isEven = !$isEven;
	}

	// We'll now check if the number is valid
	return $total % 10;
}
