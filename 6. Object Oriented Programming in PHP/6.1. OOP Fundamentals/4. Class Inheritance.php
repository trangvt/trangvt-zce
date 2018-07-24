4. Class Inheritance

One of the key fundamental concepts of OOP is inheritance(1).
This allows a class to extend another class, essentially(2) adding new methods and properties,
as well as overriding existing ones as needed.

For example:
<?php
class a {
	function test() {
		echo "a::test called".PHP_EOL;
	}
	function func() {
		echo "a::func called".PHP_EOL;
	}
}

class b extends a {
	function test() {
		echo "b::test called".PHP_EOL;
	}
}

class c extends b {
	function test() {
		parent::test();
	}
}

class d extends c {
	function test() {
		b::test();
	}
}

$a = new a();
$b = new b();
$c = new c();
$d = new d();
echo '<pre>';
$a->test(); //Outputs "a::test called"
$b->test(); //Outputs "b::test called"
$b->func(); //Outputs "a::test called"
$c->test(); //Outputs "b::test called"
$d->test(); //Outputs "b::test called"
echo '------</pre>';
?>

In this script, we start by declaring a class called a.

We then declare the class b, which extends a.
As you can see, this class also has a test() method, which overrides the one declared in a,
thus outputting b::test called.

Note, however, that we can still access a’s other methods—
so that calling $b->func() effectively executes(3) the function in the a class.


Naturally, extending objects in this fashion(4) would be very limiting,
since you would only be able to override the functionality(5) provided by parent classes,
without any opportunity for reuse (unless you implement(6) your methods using different names).

Luckily, parent classes can be accessed using the special parent::namespace,
as we did for class c above;
you can also access any other ancestor(7) classes by addressing their methods by name—like we did, for example, in class d.

-------------------------
(1) inheritance(s) : /ɪnˈherətəns/
inherit;inherits; inherited; inheriting

(2) essential /ɪˈsɛnʃəl/
extremely important and necessary
very basic

(3) effectively executes : thực hiện hiệu quả
effectively /ɪˈfɛktɪvli/
execute /ˈɛksɪˌkjuːt/

(4) fashion /ˈfæʃən/
a specified way of acting or behaving — usually used after in

(5) functionality /ˌfʌŋkʃəˈnæləti/
functionalities
the particular use or set of uses for which something is designed

(6) implement /ˈɪmpləmənt/
to begin to do or use (something, such as a plan) : to make (something) active or effective

(7) ancestor /ˈænˌsɛstɚ/
something in the past from which something else has developed
