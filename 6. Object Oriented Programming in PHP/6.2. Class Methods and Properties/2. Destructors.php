2. Destructors (P119)

-------------------------
(*) a mirror image một hình ảnh phản chiếu

(*) right before ngay trước khi

(*) procedure /prəˈsiːʤɚ/ thủ tục
performing cleanup procedures thực hiện các thủ tục dọn dẹp

(*) resource /rɪˈzɔːs/

(*) temporary /ˈtɛmpəˌreri/
-------------------------

In addition to the __construct() method, we also have a __destruct() method.
This works like a mirror image of __construct(): it is called right before an object is destroyed, and is useful for performing cleanup procedures - such as disconnecting from a remote resource, or deleting temporary files:

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

Destruction occurs when all references to an object are gone, and this may not necessarily take place when you expect it - or even when you want it to.
In fact, while you can unset() a variable that references an object, or overwrite it with another value, the object itself may not be destroyed right away because a reference to it is held elsewhere.
For example, in the following script the destructor is not called when calling unset(), because $b still references the object:

<?php
$a = new foo();
$b = $a;
unset($a);
?>

Even if an object still has one or more active references, the __destruct() method is called at the end of script execution - therefore, you are guaranteed that, at some point, your destructor will be executed.
However, there is no way to determine the order in which any two objects in your scripts will be destroyed. 
This can sometimes cause problems when an object depends on another to perform one or more functions - for example, if one of your classes encapsulates a database connection and another class needs that connection to flush its data to the database, you should not rely on your destructors to perform a transparent flush
to the database when the object is deleted: the instance of the first class that provides database connectivity could, in fact, be destroyed before the second, thus making it impossible for the latter
to save its data to the database.

Ngay cả khi 1 object có một hoặc nhiều references đang hoạt động, method __destruct () được gọi khi kết thúc script - do đó, bạn được đảm bảo rằng, tại một số điểm, hàm destructor của bạn sẽ được thực hiện.
-------------------------
(*) determine /dɪˈtɚmən/

(*) encapsulate /ɪnˈkæpsəˌleɪt/

(*) flush /ˈflʌʃ/ tuôn ra

(*) rely on /rɪˈlaɪ/ dựa vào
to trust or believe (someone or something)

(*) transparent /trænsˈperənt/ minh bạch
honest and open : not secretive

(*) connectivity /kəˌnekˈtivitē,ˈkänəkˌtivitē/
