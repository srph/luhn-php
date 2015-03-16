<?php

class LuhnTest extends PHPUnit_Framework_TestCase {
	/**
	 * Return true for manually-checked credit cards
	 */
	public function testShouldReturnTrue()
	{
		$this->assertTrue(SRPH\Luhn\luhn('7992739877'));
		$this->assertTrue(SRPH\Luhn\luhn('79927398712'));
	}

	/**
	 * Return false for manually-checked credit cards
	 */
	public function testShouldReturnFalse()
	{
		$this->assertFalse(SRPH\Luhn\luhn('7992739871'));
		$this->assertFalse(SRPH\Luhn\luhn('79927398710'));
		$this->assertFalse(SRPH\Luhn\luhn('79927398711'));
		$this->assertFalse(SRPH\Luhn\luhn('79927398713'));
	}

	/**
	 * Return false for manually-checked credit cards
	 */
	public function testShouldReturnFalseForBlankStrings()
	{
		$this->assertFalse(SRPH\Luhn\luhn());
		$this->assertFalse(SRPH\Luhn\luhn(''));
	}
}
