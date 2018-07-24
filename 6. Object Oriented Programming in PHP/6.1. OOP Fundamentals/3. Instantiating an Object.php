3. Instantiating an Object

Once you have declared a class, you need to instantiate it in order to take advantage of(1) the functionality it offers.
This is done by using the new construct:

<?php
    $myClassInstance = new myClass();
?>

In PHP 5, objects are treated differently from other types of variables.
An object is always passed by reference (in reality(3), it is passed by handle,
but for all practical(4) purposes there is no difference), rather than by value.

For example:
<?php
    $myClassInstance = new myClass();
    $copyInstance = $myClassInstance();
?>

In this case, both $myInstance and $copyInstance will point to the same object,
even though we didn’t specify that we wanted this to happen by means of(5) any special syntax.

This is the standard behaviour of objects in most languages, but wasn’t the case in PHP 4,
where objects were handled like any other normal variables and were, therefore, passed by value.

-------------------------
(1) advantage /ədˈvɑːntɪʤ/
take advantage of : tận dụng lợi thế của
to use (something, such as an opportunity) in a way that helps you : to make good use of (something)

(2) offer /ˈɑːfɚ/
to give someone the opportunity to accept or take (something)
the functionality it offers : chức năng nó cung cấp

(3) reality /riˈæləti/

(4) practical /ˈpræktɪkəl/
relating to what is real rather than to what is possible or imagined

(5) by means of
through the use of (something)

(6) behavior /bɪˈheɪvjɚ/
