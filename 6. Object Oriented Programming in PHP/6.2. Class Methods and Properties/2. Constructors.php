2. Constructors (P118)

PHP 5 introduces the concept of the unified constructor(1) and, along with it,
a new destructor(2) for objects.

The constructor and destructor are special class methods that are called, as their names suggest,
on object creation and destruction, respectively(3).

Constructors are useful for initializing(4) an object’s properties, or for performing start up procedures, such as, for example, connecting to a database, or opening a remote file.

-------------------------
https://freetuts.net/ham-khoi-tao-va-ham-huy-trong-lap-trinh-huong-doi-tuong-php-36.html

(1) unify /ˈjuːnəˌfaɪ/
unifies; unified; unifying
to cause (people or things) to be joined or brought together

unified constructor : kiến trúc thống nhất
(2)
construct /ˈkɑːnˌstrʌkt/
constructor
destruction /dɪˈstrʌkʃən/
destructor

(3) respective /rɪˈspɛktɪv/
respectively /rɪˈspɛktɪvli/
belonging or relating to each one of the people or things that have been mentioned

(4) initialize /iˈniʃəˌlaɪz/
initializing
-------------------------

The concept of the constructor is, of course, not new to PHP 5.

In PHP 4, it was possible to define a class method whose name was the same as the class itself;
PHP would then consider this method to be the class’ constructor and call it whenever
a new instance of the class was created.

This approach(5) had several(6) drawbacks(7)—for example,
if you decided to rename your class, you would also have to rename your constructor.


To avoid these problems, PHP 5 now uses the magic __construct() method as the constructor
for any class regardless(8) of the class’ name.
This greatly simplify(9) things, and provides you with a standard mechanism(10) to
recognize and call constructors in a consistent manner(11):

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

This example will display foo::__construct (the __METHOD__ constant is replaced at
compilation(12) time with the name of the current class method).

Note that, if the __construct() method is not found, PHP will look for the old PHP 4-style constructor ( foo ) and call that instead.

-------------------------
(5) approach /əˈproʊtʃ/

(6) several /ˈsɛvərəl/

(7) drawback /ˈdrɑːˌbæk/

(8) regardless of /rɪˈgɑɚdləs/
without being stopped or affected by (something)

(9) simplify /ˈsɪmpləˌfaɪ/
to make (something) easier to do or understand

(10) mechanism /ˈmɛkəˌnɪzəm/
a way of acting, thinking, or behaving that helps or protects a person in a specified way

(11) a consistent manner : một cách nhất quán
consistent /kənˈsɪstənt/
always acting or behaving in the same way

manner /ˈmænɚ/ - often used after in
the way that something is done or happens

(12) compilation /ˌkɑːmpəˈleɪʃən/
