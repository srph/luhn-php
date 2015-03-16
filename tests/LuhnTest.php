<?php

class LuhnTest extends PHP_Unit_TestSuite {
	/**
	 * Return true for manually-checked credit cards
	 */
	public function testShouldReturnTrue()
	{
		$this->assertTrue(luhn('3123141456'));
		$this->assertTrue(luhn('3123141456'));
	}

	/**
	 * Return false for manually-checked credit cards
	 */
	public function testShouldReturnFalse()
	{
		$this->assertFalse(luhn('3123141456'));
		$this->assertFalse(luhn('3123141456'));
		$this->assertFalse(luhn('3123141456'));
		$this->assertFalse(luhn('3123141456'));
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
