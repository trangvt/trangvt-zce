Function syntax is, at its most basic, very simple.
To create a new function, we simply use the keyword function, followed by an identifier, a pair of parentheses and braces:
<?php
function name() { }
?>

PHP function names are not case-sensitive.
As with all identifiers in PHP, the name must consist only of letters (a-z), numbers and the underscore character, and must not start with a number.
To make your function do something, simply place the code to be execute between the braces, then call it.
<?php
function hello()
{
	echo "Hello World!";
}
hello(); // Displays "Hello World!"
?>