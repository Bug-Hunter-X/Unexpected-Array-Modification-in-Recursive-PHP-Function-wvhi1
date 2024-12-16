# Unexpected Array Modification in Recursive PHP Function

This repository demonstrates a subtle bug in a PHP function that recursively processes an array. The function unexpectedly modifies the original input array due to pass-by-reference behavior. 

The `bug.php` file contains the problematic code.  The `bugSolution.php` file provides a corrected version that addresses the issue.

## Bug Description
The `processData` function intends to process nested arrays and convert comma-separated strings into arrays. However, due to how PHP handles arrays passed into functions, the original `$data` array is modified unexpectedly in the recursive processing.  The solution introduces a safer way to handle this.