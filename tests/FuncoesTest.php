<?php
require_once __DIR__ . '/../src/Funcoes.php';

use PHPUnit\Framework\TestCase;

class FuncoesTest extends TestCase
{
    public function testIsEven()
    {
        $this->assertTrue(Funcoes::isEven(2));
        $this->assertFalse(Funcoes::isEven(3));
    }

    public function testIsEvenInvalidInput()
    {
        $this->expectException(TypeError::class);
        Funcoes::isEven("string");
    }

    public function testFactorial()
    {
        $this->assertEquals(120, Funcoes::factorial(5));
        $this->assertEquals(1, Funcoes::factorial(0));
    }

    public function testFactorialInvalidInput()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::factorial(-1);
    }

    public function testIsPalindrome()
    {
        $this->assertTrue(Funcoes::isPalindrome("radar"));
        $this->assertFalse(Funcoes::isPalindrome("hello"));
    }

    public function testIsPalindromeWithSpecialCharacters()
    {
        $this->assertTrue(Funcoes::isPalindrome("A man, a plan, a canal: Panama"));
    }

    public function testFahrenheitToCelsius()
    {
        $this->assertEquals(0, Funcoes::fahrenheitToCelsius(32));
        $this->assertEquals(100, Funcoes::fahrenheitToCelsius(212));
    }

    public function testFahrenheitToCelsiusInvalidInput()
    {
        $this->expectException(TypeError::class);
        Funcoes::fahrenheitToCelsius("string");
    }

    public function testCalculateDiscount()
    {
        $this->assertEquals(90, Funcoes::calculateDiscount(100, 10));
        $this->assertEquals(50, Funcoes::calculateDiscount(50, 0));
    }

    public function testCalculateDiscountInvalidInput()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::calculateDiscount(-100, 10);
    }
}
