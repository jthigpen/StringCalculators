# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Purpose

This repo is a live-coding interview exercise based on Roy Osherove's String Calculator TDD Kata (<https://osherove.com/tdd-kata-1>). Each language subdirectory is a self-contained implementation — there is no shared build system or cross-language tooling.

Candidates drive the session. The repo's job is to provide a minimal starting point in each language and (optionally) a reference completed solution. Preserve that split when making changes.

## Layout and per-language conventions

- `js/` &mdash; JavaScript with QUnit loaded via CDN.
  - `start.html` is the empty starter shown to candidates (kata instructions in the body, one example test).
  - `index.html` is a worked reference implementation.
  - `aimee-1.html` is a preserved in-progress candidate session; do not "fix" it.
- `php/` &mdash; PHP with PHPUnit.
  - Run tests: `cd php && rake` (which runs `phpunit --strict Test.php`).
  - `Test.php` uses a shared `calculatorShouldAddNumbersCorrectly($input, $expected)` helper to parameterize cases &mdash; match this pattern when adding tests.
- `python/` &mdash; Python 3 with the stdlib `unittest` module (no third-party deps).
  - Run tests: `cd python && python3 -m unittest`.
  - Run a single test: `cd python && python3 -m unittest test_string_calculator.StringCalculatorTest.test_accepts_newline_as_delimiter`.
  - Follows the same parameterized-helper pattern as the PHP tests (`calculator_should_add_numbers_correctly`).

## When adding a new language

Mirror the PHP/Python structure: one implementation file, one test file using that ecosystem's standard test runner, and a parameterized helper that takes `(input_string, expected_sum)`. Update `README.markdown`'s "Implementations" section with the run command. Reference implementations should cover at least steps 1–4 of the kata (empty string, single number, comma-separated, newline delimiter, custom single-char delimiter) to match the existing JS/PHP/Python solutions &mdash; they intentionally stop short of negatives, the 1000 cap, and multi-char delimiters.

## Kata instructions

The canonical list of steps lives in `README.markdown`. The body of `js/start.html` contains an HTML copy shown to candidates mid-interview; keep the two in sync when editing the problem statement.
