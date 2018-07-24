3. Destructors (P119)

In addition to the __construct() method, we also have a __destruct() method.

This works like a mirror image(1) of __construct(): it is called right before(2) an object is destroyed, and is useful for performing cleanup procedures(3)—
such as disconnecting from a remote resource(4), or deleting temporary(5) files:

<?php
class foo {
    function __construct() {
        echo '<pre>';
        echo __METHOD__ . PHP_EOL;
        echo '</pre>';
    }
    function __destruct() {
        echo '<pre>';
        echo __METHOD__;
        echo '</pre>';
    }
}
new foo();
?>

Destruction occurs(6) when all references to an object are gone,
and this may not necessarily take place when you expect it—or even when you want it to.

In fact, while you can unset() a variable that references an object,
or overwrite it with another value, the object itself may not be destroyed right away
because a reference to it is held elsewhere.

For example, in the following script the destructor is not called when calling unset(),
because $b still references the object:

<?php
$a = new foo();
$b = $a;
unset($a);
?>

Even if an object still has one or more active references, the __destruct() method is called at the end of script execution—
therefore, you are guaranteed that, at some point, your destructor will be executed.

However, there is no way to determine(7) the order in which any two objects in your scripts will be destroyed. 

This can sometimes cause problems when an object depends on another to perform one or more functions—
for example, if one of your classes encapsulates(8) a database connection
and another class needs that connection to flush(9) its data to the database,
you should not rely(10) on your destructors to perform a transparent(11) flush
to the database when the object is deleted:
the instance of the first class that provides database connectivity(12) could,
in fact, be destroyed before the second, thus making it impossible for the latter
to save its data to the database.

-------------------------
(1) a mirror image : một hình ảnh phản chiếu

(2) right before : ngay trước khi

(3) procedure /prəˈsiːʤɚ/

(4) resource /rɪˈzɔːs/

(5) temporary /ˈtɛmpəˌreri/

(6) occur /əˈkɚ/

(7) determine /dɪˈtɚmən/

(8) encapsulate /ɪnˈkæpsəˌleɪt/

(9) flush /ˈflʌʃ/
to cause or force (someone or something) to leave a hiding place

(10) rely on /rɪˈlaɪ/
to trust or believe (someone or something)

(11) transparent /trænsˈperənt/
honest and open : not secretive

(12) connectivity /kəˌnekˈtivitē,ˈkänəkˌtivitē/
