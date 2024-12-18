# PHP Array Modification: Pass-by-Reference vs. Pass-by-Value

This repository demonstrates a common PHP error related to array modification within functions and the distinction between pass-by-reference and pass-by-value.

The `bug.php` file shows the problematic code, highlighting the unintended consequence of passing an array by value when modification is expected.  The solution, in `bugSolution.php`, corrects the issue by using pass-by-reference.