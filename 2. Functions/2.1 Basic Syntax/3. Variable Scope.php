PHP has three variable scopes: 
	+ the global scope
	+ function scope
	+ class scope.
The global scope is, as its name implies, available to all parts of the script; if you declare or assign a value to a variable outside of a function or class, that variable is created in the global scope.

However, any time you enter a function, PHP creates a new scope — a "clean slate" that, by default, contains no variable and that is completely isolated from the global scope.
Any variable defined within a function is no longer available after the function has finished executing.
This allows the use of names which may be in use elsewhere without having to worry about conflicts.
<?php
$a = "Hello World";
function hello()
{
	$a = "Hello Reader";
	$b = "How are you";
}
hello();
echo $a; // Will output Hello World
echo $b; // Will emit a warning
?>

-------------------------
(*) a clean slate: xóa bỏ sai trái trong quá khứ dễ dàng
(*) isolated /ˈīsəˌlātid/ bị cô lập
-------------------------

There are two ways to access variables in the global scope from inside a function;
the first consists of "importing" the variable inside the function's scope by using the global statement:
<?php
$a = "Hello";
$b = "World";
function hello()
{
	global $a, $b;
	echo "$a $b";
}
hello(); // Displays "Hello World"
?>