All functions in PHP return a value — even if you don’t explicitly cause them to.
Thus, the concept of "void" functions does not really apply to PHP.
You can specify the return value of your function by using the return keyword:
<?php
function hello()
{
	return "Hello World"; // No output is shown
}

$txt = hello(); // Assigns the return value "Hello World" to $txt
echo hello(); // Displays "Hello World"
?>

Naturally, return also allows you to interrupt the execution of a function and exit it even if you don't want to return a value:
<?php
function hello($who)
{
	echo "Hello $who";
	if ($who == "World") {
		return; // Nothing else in the function will be processed
	}
	echo ", how are you";
}

hello("World"); // Displays "Hello World"
hello("Reader") // Displays "Hello Reader, how are you?"
?>

-------------------------
(*) interrupt /ˌintəˈrəpt/ ngắt, làm gián đoạn

-------------------------

Note, however, that even if you don't return a value, PHP will still cause your function to return NULL.

Functions can also be declared so that they return by reference; this allows you to return a variable as the result of the function, instead of a copy (returning a copy is the default for every data type except objects).
Functions có thể khai báo nên chúng có thể return bằng tham chiếu; nó cho phép bạn return 1 biến như là 1 result của hàm, thay vì 1 copy
(What is the difference between a reference and a pointer?)

Typically, this is used for things like resources (like database connections) and when implementing the Factory pattern.
However, there is one caveat: you must return a variable — you cannot return an expression
by reference, or use an empty return statement to force a NULL return value:
Tuy nhiên, có một lưu ý: bạn phải return 1 biến - bạn không thể return một expression bằng reference, hoặc dùng một return trống để bắt return một giá trị NULL
<?php 
function &query($sql)
{
	$result = mysql_query($sql);
	return $result;
}
// The following is incorrect and will cause PHP to emit a notice when called.
function &getHello()
{
	return "Hello World";
}
// This will also cause the warning to be issued when called
function &test()
{
	echo 'This is a test';
}
?>
-------------------------
caveat /ˈkavēˌät/: cẩn thận, sự báo trước