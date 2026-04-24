import unittest

from string_calculator import StringCalculator


class StringCalculatorTest(unittest.TestCase):
    def calculator_should_add_numbers_correctly(self, number_string, expected_result):
        calculator = StringCalculator()
        result = calculator.add(number_string)
        self.assertEqual(expected_result, result)

    def test_returns_zero_when_empty_string_passed_in(self):
        self.calculator_should_add_numbers_correctly("", 0)

    def test_returns_number_when_single_number_passed_in(self):
        self.calculator_should_add_numbers_correctly("1", 1)

    def test_returns_sum_when_two_numbers_passed_in(self):
        self.calculator_should_add_numbers_correctly("1,2", 3)

    def test_accepts_newline_as_delimiter(self):
        self.calculator_should_add_numbers_correctly("1\n2,3", 6)

    def test_accepts_custom_delimiters(self):
        self.calculator_should_add_numbers_correctly("//;\n1;2;3", 6)


if __name__ == "__main__":
    unittest.main()
