Class Methods and Properties

As we mentioned earlier, classes can contain both methods and variables (properties).
Methods are declared just like traditional functions:
<?php
class myClass {
    function myFunction() {
        echo "You called myClass::myFunction";
    }
}
?>

From outside the scope of a class, its methods are called using the indirection operator ->:
<?php
$obj = new myClass();
$obj->myFunction();
?>

-------------------------
(*) indirection operator /ˌindəˈrekSHən/ toán tử gián tiếp

(*) snippet /ˈsnɪpət/
a small part of something (such as a piece of music, a conversation, etc.)

dilemma /dəˈlɛmə/ : tình trạng tiến thoái lưỡng nan
a situation in which you have to make a difficult choice
-------------------------

Naturally, the $obj variable is only valid within the scope of our small snippet of code above - which leaves us with a dilemma: how do you reference a class' method from within the class itself?
Here's an example:
<?php
class myClass {
    function myFunction() {
        echo "You called myClass::myFunction";
    }
    function callMyFunction() {
        // ???
    }
}
?>

Clearly, callMyFunction() needs a way to call myFunction() from within the object's scope.
In order to allow for this to take place, PHP defines a special variable called $this;
this variable is only defined within an object's scope, and always points to the object itself:
variable này chỉ được xác định trong phạm vi của object và luôn trỏ đến chính object đó:
<?php
class myClass {
    function myFunction($data) {
        echo '<pre>';
        echo "The value is $data";
        echo '</pre>';
    }
    function callMyFunction($data) {
        // Call myFunction()
        $this->myFunction($data);
    }
}

$obj = new myClass();
$obj->callMyFunction(123); //The value is 123
?>