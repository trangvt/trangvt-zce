1. Interfaces & Abstract Classes

Yet another new feature added to PHP 5 is that of Interfaces and Abstract classes.
These are both used to create a series of constraints on the base design of a group of classes.
An abstract class essentially defines the basic skeleton of a specific type of encapsulated entity — for example, you can use an abstract class to define the basic concept of “car” as having two doors, a lock and a method that locks or unlocks the doors.
Abstract classes cannot be used directly, but they must be extended so that the descendent class provides a full complement of methods. For example:

1 abstract class chủ yếu định nghĩa khung cơ bản của 1 thực thể đóng gói cụ thể - ví dụ, bạn có thể dùng abtrac class để định nghĩa khái niệm cơ bản của 1 "car" là có 2 cửa, 1 khóa và 1 method để khóa, mở khóa cửa
Các abtract class không thể dùng trực tiếp, nhưng có thể EXTENDES để lớp con cung cấp đầy đủ các method. Ví dụ:
-------------------------
(*) feature /ˈfēCHər/

(*) constraints constraint /kənˈstreɪnt/ ràng buộc
something that limits or restricts someone or something

(*) essentially chủ yếu

(*) skeleton of /ˈskɛlətən/
a basic outline of a plan, piece of writing, etc.a basic outline of a plan, piece of writing, etc.

(*) a specific type of: 1 loại cụ thể của

(*) descendent /diˈsendənt/: hậu duệ
-------------------------
<?php
abstract class DataStore_Adapter {
    private $id;
    abstract function insert(); // chỉ khai báo hàm rỗng
    abstract function update();
    public function save() {
        if (!is_null($this->id)) {
            $this->update();
        } else {
            $this->insert();
        }
    }
}

class PDO_DataStore_Adapter extends DataStore_Adapter {
    public function __construct($dsn) {
        // ...
    }
    function insert() {
        // viết rõ hàm làm gì ở đây
    }
    function update() {
        // viết rõ hàm làm gì ở đây
    }
}
?>

/*
 *You must declare a class as abstract so long as it has (or inherits without providing a body) at least one abstract method.
 *
 * Bạn phải khai báo 1 class là abstract miễn là nó có (hoặc inherit mà không cung cấp body) ít nhất 1 abstract method
 */

As you can see, in this example we define a class called DataStore_Adapter and declare two abstract methods called insert() and update().
Note how these methods don’t actually have a body—that’s one of the requirements of abstract classes—and how the class itself must be declared as abstract in order for the compiler to satisfy the parser’s syntactic requirements.
We then extend DataStore_Adapter into PDO_DataStore_Adapter, which is no longer abstract because we have now provided a body for both insert() and update().

Bắt buộc phải định nghĩa lại tất cả các method trong abstract.
-------------------------
(*) satisfy /ˈsætəsˌfaɪ/
to provide, do, or have what is required by (someone or something)

https://viblo.asia/p/tim-hieu-abstract-trong-php-jqEGqpJoznv
https://viblo.asia/p/so-sanh-interface-va-abstract-trong-lap-trinh-huong-doi-tuong-63vKjpk6l2R
