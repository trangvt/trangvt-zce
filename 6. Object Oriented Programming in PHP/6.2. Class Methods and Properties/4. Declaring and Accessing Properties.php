4. Declaring and Accessing Properties (P122)

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
You can’t, for example, initialize a variable by calling a function - that's something you can only do within one of the class' methods (typically, the constructor).

Lưu ý, giống như 1 variable thường, 1 class property có thể khởi tạo trong khi nó được khai báo.
Tuy nhiên, sự khởi tạo giới hạn trong các phép gán (nhưng không phải bằng các evaluating expressions)
Bạn không thể, ví dụ, khởi tạo một biến bằng cách gọi một hàm - điều bạn chỉ có thể làm trong method của class (thông thường, trong constructor)
