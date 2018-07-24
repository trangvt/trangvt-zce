1. Class Methods and Properties

As we mentioned earlier, classes can contain both methods and variables (properties).
Methods are declared(1) just like traditional functions:

class myClass {
    function myFunction() {
        echo "You called myClass::myFunction";
    }
}

From outside the scope of a class, its methods are called using the indirection operator(2) ->:

$obj = new myClass();
$obj->myFunction();

Naturally, the $obj variable is only valid within the scope of our small snippet(3) of code above—
which leaves us with a dilemma(4): how do you reference a class’ method from within the class itself?
Here’s an example:

class myClass {
    function myFunction() {
        echo "You called myClass::myFunction";
    }
    function callMyFunction() {
        // ???
    }
}

Clearly, callMyFunction() needs a way to call myFunction() from within the object’s scope.

In order to allow for this to take place, PHP defines a special variable called $this;
this variable is only defined within an object’s scope, and always points to the object itself:

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
$obj->callMyFunction(123);
?>

This will output: The value is 123.

-------------------------
(1)
declare /dɪˈkleɚ/
declares; declared; declaring

(2) indirection operator : ->
indirection /ˌindəˈrekSHən/

(3) snippet /ˈsnɪpət/
a small part of something (such as a piece of music, a conversation, etc.)

(4)
leaves us with

dilemma /dəˈlɛmə/ : tình trạng tiến thoái lưỡng nan
a situation in which you have to make a difficult choice
