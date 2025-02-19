# Ambiguous Error Handling with PHP's `fopen()`

This repository demonstrates a common, yet subtle, error in PHP's file handling. The `fopen()` function returns `false` upon failure, but this doesn't provide specific details about the cause of the failure.  This ambiguity complicates robust error handling.

The `bug.php` file showcases the problem, while `bugSolution.php` offers an improved solution.

## Problem

The core issue is the lack of specificity when `fopen()` fails.  The calling code only knows that something went wrong; it doesn't know *why*.

## Solution

The solution involves using `error_get_last()` to capture more detailed error information after a failed `fopen()` call. This allows for more specific and informative error handling.  