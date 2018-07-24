2. Interfaces

Interfaces, on the other hand, are used to specify an API that a class must implement.

This allows you to create a common "contract" that your classes must implement in order to
satisfy certain logical requirements—
for example, you could use interfaces to abstract(1) the concept of database provider into a common API that could then be implemented by a series of classes that interface to different DBMSs.

Interface methods contain no body:

<?php
interface DataStore_Adapter {
    public function insert();
    public function update();
    public function save();
    public function newRecord($name = null);
}

class PDO_DataStore_Adapter implements DataStore_Adapter {
    public function insert() {
    // ...
    }
    public function update() {
    // ...
    }
    public function save() {
    // ...
    }
    public function newRecord($name = null) {
    }
}
?>

If, in the example above, you fail to define all of the methods for a particular interface,
or all of the arguments for any given interface method, you will see something like this:

Nếu, trong ví dụ trên, bạn không define tất cả các phương pháp cho một interface cụ thể,
hoặc tất cả các đối số cho bất kỳ interface method nhất định, bạn sẽ thấy một cái gì đó như thế này:
=> bắt buộc phải định nghĩa lại tất cả các method trong interface.

Fatal error: Class PDO_DataStore_Adapter contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (DataStore_Adapter::save) in //document// on line 27

or

Fatal error: Declaration of PDO_DataStore_Adapter::newRecord() must be compatible with that of DataStore_Adapter::newRecord() in //document// on line 12

It is also possible to implement more than one interface in the same class:

<?php
class PDO_DataStore_Adapter implements DataStore_Adapter, SeekableIterator {
    // ...
}
?>

In this example, we need to define the methods for both DataStore_Adapter and SeekableIterator.

Additionally, a class can extend another class, as well as implement multiple interfaces at the same time:

<?php
class PDO_DataStore_Adapter extends PDO implements DataStore_Adapter, SeekableIterator {
    // ...
}
?>

/*
 * Remember—a class can only extend one parent class,
 * but it can implement multiple interfaces.
 */
-------------------------
(1)abstract /æbˈstrækt/ /ˈæbˌstrækt/
relating to or involving general ideas or qualities rather than specific people, objects, or actions


https://toidicode.com/interface-trong-php-huong-doi-tuong-104.html
