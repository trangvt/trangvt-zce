Constants, Static Methods and Properties(P123)

Along with PPP, PHP 5 also implements static methods and properties.
Unlike regular methods and properties, their static counterparts exist and are accessible as part of a class itself, as opposed to existing only within the scope of one of its instances.
This allows you to treat classes as true containers of interrelated functions and data elements — which, in turn, is a very handy expedient to avoid naming conflicts.

Cùng với PPP, PHP 5 cũng implement static methods và properties.
Không giống như methods và properties thông thường, các đối tượng static tồn tại và có thể truy cập được như là một phần của chính lớp đó, khác với hiện tại chỉ trong phạm vi 1 trong các instances của nó.
Điều này cho phép bạn đối xử với classes như các container thực sự của các function liên quan và các data element - rất tiện để tránh xung đột tên
-------------------------
(*) counterparts counterpart /ˈkaʊntɚˌpɑɚt/ : đối tượng
someone or something that has the same job or purpose as another

(*) opposed /əˈpoʊzd/
completely different

(*) interrelated interrelate /ˌɪntɚrɪˈleɪt/ liên quan
to have a close or shared relationship

(*) in turn : lần lượt

(*) expedient /ɪkˈspiːdijənt/
a very handy expedient : rất tiện lợi

(*) strict /ˈstrɪkt/
stricter syntax : cú pháp chặt chẽ hơn

(*) convey /kənˈveɪ/
to take or carry

(*) notation /noʊˈteɪʃən/ kí hiệu
-------------------------

While PHP 4 allowed you to call any method of a class statically using the scope resolution operator ::
(officially known as Paamayim Nekudotayim—Hebrew for "Double Colon"), PHP 5 introduces a stricter syntax that calls for the use of the static keyword to convey the use of properties and methods as such.
You should keep in mind that PHP 5 is very strict about the use of static properties and methods.
For example, calling static properties using object notation will result in a notice:

Trong khi PHP 4 cho phép bạn gọi bất kì method của 1 static class bằng toán tử :: , PHP 5 giới thiệu 1 cú pháp chặt chẽ hơn, sử dụng từ khóa STATIC để truyền tải việc sử dụng prorerties và methods như vậy.
Bạn nên nhớ rằng PHP 5 rất chặt chẽ về cách dùng các static prorerties và methods.
Ví dụ, gọi static prorerties dùng kí hiệu object (-> là object notation) sẽ dẫn tới thông báo:

<?php
class foo {
    static $bar = "bat";
    public static function baz() {
        echo "Hello World";
    }
}
$foo = new foo();
$foo->baz();
echo $foo::$bar; // bat
echo $foo->bar; // Notice line 11 (-> là object notation)
?>

Hello World
bat
Notice: Accessing static property foo::$bar as non static in ... on line 11
Notice: Undefined property: foo::$bar in ... on line 11

It is necessary for the static definition to follow the visibility definition; if no visibility definition is declared, the static method or property is considered public.

Nó là cần thiết cho việc định nghĩa static tuân theo phạm vi hiển thị (public, protected, private); nếu không có định nghĩa phạm vi hiển thị được khai báo, static method hoặc property được cân nhắc là public

-------------------------
https://toidicode.com/static-va-final-trong-php-huong-doi-tuong-105.html

STATIC
là một thành phần tĩnh (method hoặc property) mà nó hoạt động như một biến toàn cục, dù cho nó có được xử lý ở trong bất kỳ một file nào đi nữa thì nó đều lưu lại giá trị cuối cùng vào trong lớp. Tồn tại từ lúc chương trình bắt đầu và mất khi chương trình kết thúc.
Nhược điểm: vì hoạt động như một biến toàn cục => chiếm nhiều tài nguyên hơn

non-static: là những hành động riêng của từng đối tượng,  những phương thức, thuộc tính không có static chỉ tồn tại khi đối tượng được tạo ra, và mất khi đối tượng bị hủy khỏi bộ nhớ.

Các cách gọi STATIC
Không dùng $this->
+ Trong class (method và property)
	selft::$xxx
	ClassName::$xxx
+ Ngoài class
	+ Method
		$object->method()
		$object::method()
	+ Property
		$object::$property.

Kế thừa STATIC
<?php
class ConNguoi
{
    private static $name = 'xxx';

    public static function getName()
    {
        return self::$name;
    }
}

class NguoiLon extends ConNguoi
{
    public static function getName()
    {
        parent::getName();
    }
}
$a = new NguoiLon();
$a->$name //Lỗi vì là private property cua ConNguoi
echo $a::getName();
echo $a->getName();
?>
