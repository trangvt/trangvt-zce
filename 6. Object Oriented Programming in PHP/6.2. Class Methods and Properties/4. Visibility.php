4. Visibility(1) (P120)

PHP 5 adds the notion(2) of object method and property visibility (often referred to as "PPP"),
which enables you to determine(3) the scope from which each component
of your class interfaces can be accessed.

There are four levels of visibility:

public    | The resource can be accessed from any scope.

protected | The resource can only be accessed from within the class
          | where it is defined and its descendants(4).

private   | The resource can only be accessed from within the class where it is defined.

final     | The resource is accessible from any scope,
          | but cannot be overridden in descendant classes.

/*
 *The final visibility level only applies to methods and classes.
 *Classes that are declared as final cannot be extended.
*/

-------------------------
(1) visibility /ˌvɪzəˈbɪləti/ phạm vi
the quality or state of being known to the public

(2) notion /ˈnoʊʃən/
an idea or opinion

(3) determine /dɪˈtɚmən/

(4) descendant /dɪˈsɛndənt/
something that developed from another thing that was made or existed earlier
-------------------------

Typically, you will want to make all API methods and properties public,
since you will want them to be accessible from outside of your objects,
while you will want to keep those used for internal operation as helpers to the API calls protected or private.

Constructors and Destructors—along with all other magic methods (see below)—will normally be declared as public;
there are, however, times when you wish to make the constructor private—
for example when using certain design patterns like Singleton or Factory.

<?php
class foo {
    public $foo = 'bar';
    protected $baz ='bat';
    private $qux = 'bingo';
    function __construct() {
        echo '<pre>';
        echo 'foo---' . PHP_EOL;
        var_dump(get_object_vars($this));
        echo '</pre>';
    }
}
class bar extends foo {
    function __construct() {
        echo '<pre>';
        echo 'bar extends foo------' . PHP_EOL;
        var_dump(get_object_vars($this));
        echo '</pre>';
    }
}
class baz {
    function __construct() {
        echo '<pre>';
        echo 'baz---------' . PHP_EOL;
        $foo = new foo();
        var_dump(get_object_vars($foo));
        echo '</pre>';
    }
}

new foo();
new bar();
new baz();
?>

The example above creates three classes, foo, bar, which extends foo and has access
to all of foo’s public and protected properties, and, finally, baz, which creates a new
instance of foo and can only access its public properties.

The output will look like this:

// Output from "foo" itself:
array(3) {
    ["foo"]=> string(3) "bar"
    ["baz"]=> string(3) "bat"
    ["qux"]=> string(5) "bingo"
}

// Output from sub-class "bar":
array(2) {
    ["foo"]=> string(3) "bar"
    ["baz"]=> string(3) "bat"
}

// Output from stand-alone class "baz":
array(1) {
    ["foo"]=> string(3) "bar"
}
