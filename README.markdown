String Calculator Tabula Rasa
=============================

Contained herein are implementations of the String Calculator Kata
in several languages. It is used as a live coding exercise during
interviews to explore a candidate's approach to test-driven
development, incremental design, and refactoring.

The kata itself was created by Roy Osherove. The full problem
statement lives at <https://osherove.com/tdd-kata-1>.

Before You Start
----------------

* Try not to read ahead.
* Do one task at a time. The trick is to learn to work incrementally.
* Only test for **correct inputs** &mdash; there is no need to test for
  invalid inputs for this kata.
* Remember to refactor after each passing test.

The Kata
--------

1. Create a simple String calculator with a method `add(numberString)`
   that returns an integer.
   * The method can take 0, 1, or 2 numbers and will return their sum.
     An empty string returns `0`. For example: `""`, `"1"`, or `"1,2"`.
   * Start with the empty-string case, then one number, then two.
2. Allow the `add` method to handle an unknown amount of numbers.
3. Allow the `add` method to handle newlines between numbers in
   addition to commas. For example, `"1\n2,3"` should equal `6`.
4. Support different delimiters. To change a delimiter, the beginning
   of the string contains a line of the form `"//[delimiter]\n"`.
   For example, `"//;\n1;2"` should return `3`. The first line is
   optional; all previous scenarios should still work.
5. Calling `add` with a negative number should throw an exception
   containing all of the negatives that were passed in.

_Stop here if you are a beginner. Continue if you finished the steps
above in under 30 minutes._

6. Numbers bigger than 1000 should be ignored: `2 + 1001 = 2`.
7. Delimiters can be of any length, given in the form `"//[delimiter]\n"`.
   For example, `"//[***]\n1***2***3"` should return `6`.
8. Allow multiple delimiters, given as `"//[delim1][delim2]\n"`.
   For example, `"//[*][%]\n1*2%3"` should return `6`.
9. Make sure multi-character delimiters also work when there are
   multiple of them.

Implementations
---------------

* **[js/](js)** &mdash; JavaScript with QUnit. Open `start.html` for the
  empty starter or `index.html` for a worked example.
* **[php/](php)** &mdash; PHP with PHPUnit. Run `rake` from the `php/`
  directory.
* **[python/](python)** &mdash; Python 3 with `unittest`. Run
  `python -m unittest` from the `python/` directory.

Credit
------

Based on the [String Calculator TDD Kata](https://osherove.com/tdd-kata-1)
by Roy Osherove.
