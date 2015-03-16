<?php

class LuhnTest extends PHPUnit_Framework_TestCase {
	/**
	 * Return true for manually-checked credit cards
	 */
	public function testShouldReturnTrue()
	{
		$this->assertTrue(luhn(''7992739877'));
		$this->assertTrue(luhn(''79927398712'));
	}

	/**
	 * Return false for manually-checked credit cards
	 */
	public function testShouldReturnFalse()
	{
		$this->assertFalse(luhn('7992739871'));
		$this->assertFalse(luhn('79927398710'));
		$this->assertFalse(luhn('79927398711'));
		$this->assertFalse(luhn('79927398713'));
	}

	/**
	 * Return false for manually-checked credit cards
	 */
	public function testShouldReturnFalseForBlankStrings()
	{
		$this->assertFalse(luhn());
		$this->assertFalse(luhn(''));
	}
}
