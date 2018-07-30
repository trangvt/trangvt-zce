3. Class Inheritance

-------------------------
(*) fundamental căn bản, nền móng

(*) inheritance(s)  /ɪnˈherətəns/
inherit;inherits; inherited; inheriting

(*) essentially /ɪˈsɛnʃəl/
extremely important and necessary
very basic
-------------------------

One of the key fundamental concepts of OOP is inheritance.
This allows a class to extend another class, essentially adding new methods and properties, as well as overriding existing ones as needed.

Điều này cho phép 1 class extend 1 class khác, về cơ bản thêm methods và properties mới, cũng như override khi cần thiết.

For example:
<?php
class a {
	function test() {
		echo "a::test called".PHP_EOL; //PHP_EOL được dùng để tìm ra ký tự xuống dòng mà không phụ thuộc vào hệ điều hành
	}
	function func() {
		echo "a::func called".PHP_EOL;
	}
}

class b extends a {
	function test() {
		echo "b::test called".PHP_EOL; // ghi đè test()
	}
}

class c extends b {
	function test() {
		parent::test(); //kế thừa
	}
}

class d extends c {
	function test() {
		b::test(); //kế thừa
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
As you can see, this class also has a test() method, which overrides the one declared in a, thus outputting b::test called.

Note, however, that we can still access a's other methods - so that calling $b->func() effectively executes the function in the a class.

Naturally, extending objects in this fashion would be very limiting, since you would only be able to override the functionality provided by parent classes, without any opportunity for reuse (unless you implement your methods using different names).

Luckily, parent classes can be accessed using the special parent:: namespace, as we did for class c above;
you can also access any other ancestor classes by addressing their methods by name — like we did, for example, in class d.

-------------------------
(*) effectively executes : thực hiện hiệu quả
effectively /ɪˈfɛktɪvli/
execute /ˈɛksɪˌkjuːt/

(*) fashion /ˈfæʃən/ cách làm

(*) functionality /ˌfʌŋkʃəˈnæləti/
functionalities
the particular use or set of uses for which something is designed

(*) implement /ˈɪmpləmənt/
to begin to do or use (something, such as a plan) : to make (something) active or effective

(*) ancestor /ˈænˌsɛstɚ/ - tổ tiên
something in the past from which something else has developed