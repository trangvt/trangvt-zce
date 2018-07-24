5. Declaring and Accessing Properties (P122)

Properties are declared in PHP using one of the PPP operators, followed by their name:

<?php
class foo {
    public $bar;
    protected $baz;
    private $bas;

    public $var1 = "Test"; // String
    public $var2 = 1.23; // Numeric value
    public $var3 = array (1, 2, 3);
}
?>

Note that, like a normal variable, a class property can be initialized while it is being declared.

However, the initialization is limited to assigning values (but not by evaluating expressions).

You can’t, for example, initialize a variable by calling a function—
that’s something you can only do within one of the class’ methods (typically, the constructor).

Bạn không thể, ví dụ, khởi tạo một biến bằng cách gọi một hàm-
