<?php
include('StringCalculator.php');

class StackTest extends PHPUnit_Framework_TestCase {
  public function calculatorShouldAddNumbersCorrectly($numberString, $expectedResult) {
    $calculator = new StringCalculator();
    $result = $calculator->add($numberString);
    $this->assertEquals($expectedResult, $result);
  }

  public function testReturnsZeroWhenEmptyStringPassedIn() {
    $this->calculatorShouldAddNumbersCorrectly("", 0);
  }

  public function testResturnsNumberWhenSingleNumberPassedIn() {
    $this->calculatorShouldAddNumbersCorrectly("1", 1);
  }

  public function testReturnsSumWhenTwoNumbersPassedIn() {
    $this->calculatorShouldAddNumbersCorrectly("1,2", 3);
  }

  public function testAcceptsNewlineAsDelimiter() {
    $this->calculatorShouldAddNumbersCorrectly("1\n2,3", 6);
  }

  public function testAddShouldAcceptCustomDelimiters() {
    $this->calculatorShouldAddNumbersCorrectly("//;\n1;2;3", 6);
  }
}
?>
