1. Constructors (P118)

-------------------------
https://freetuts.net/ham-khoi-tao-va-ham-huy-trong-lap-trinh-huong-doi-tuong-php-36.html

(*) unified /ˈjuːnəˌfaɪ/ thống nhất
unifies; unified; unifying
unified constructor : kiến trúc thống nhất

(*)
construct /ˈkɑːnˌstrʌkt/
constructor
destruction /dɪˈstrʌkʃən/
destructor

(*) respectively /rɪˈspɛktɪvli/ tương ứng

(*) initializing /iˈniʃəˌlaɪz/
-------------------------

PHP 5 introduces the concept of the unified constructor and, along with it, a new destructor for objects.
The constructor and destructor are special class methods that are called, as their names suggest, on object creation and destruction, respectively.
Constructors are useful for initializing an object's properties, or for performing start up procedures, such as, for example, connecting to a database, or opening a remote file.

The concept of the constructor is, of course, not new to PHP 5.
In PHP 4, it was possible to define a class method whose name was the same as the class itself;
PHP would then consider this method to be the class' constructor and call it whenever a new instance of the class was created.
This approach had several drawbacks - for example, if you decided to rename your class, you would also have to rename your constructor.

-------------------------
(*) approach /əˈproʊtʃ/

(*) several /ˈsɛvərəl/

(*) drawback /ˈdrɑːˌbæk/ hạn chế

(*) regardless of /rɪˈgɑɚdləs/ bất kể

(*) simplify /ˈsɪmpləˌfaɪ/ đơn giản hóa

(*) mechanism /ˈmɛkəˌnɪzəm/ cơ chế

(*) a consistent manner : một cách nhất quán
consistent /kənˈsɪstənt/
always acting or behaving in the same way

manner /ˈmænɚ/ - often used after in
-------------------------

To avoid these problems, PHP 5 now uses the magic __construct() method as the constructor for any class regardless of the class' name.
This greatly simplify things, and provides you with a standard mechanism to recognize and call con1structors in a consistent manner:

Điều này đơn giản hóa rất nhiều thứ và cung cấp cho bạn cơ chế chuẩn để nhận biết và gọi constructors 1 cách nhất quán
<?php
class foo {
    function __construct() {
        echo '<pre>';
        echo __METHOD__;
        echo '</pre>';
    }
    function foo() {
        // PHP 4 style constructor
    }
}
new foo();
?>

This example will display foo::__construct (the __METHOD__ constant is replaced at compilation time with the name of the current class method).
Note that, if the __construct() method is not found, PHP will look for the old PHP 4 - style constructor (foo) and call that instead.

-------------------------
(*) compilation /ˌkɑːmpəˈleɪʃən/ biên dịch
