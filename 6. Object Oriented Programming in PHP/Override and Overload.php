Là 2 kỹ thuật giúp tạo nên Tính đa hình (Polymorphism)

1. Overriding(ghi đè) static (easy binding) polymorphism
1 class extends 1 class khác

	Khai báo giống hệt method lớp cha cả arguments và kiểu trả về
	Không overriden mà chỉ mô tả lại static method
	Không overriden final class hay menthod
	Không overriden __construct()

2. Overloading(Nạp chồng) dynamic (late binding) polymorphism
Các method cùng tên trong cùng một Class 

	khác nhau về arguments hoặc kiểu trả về
	2 menthod cùng tồn tại song song
	__call() hỗ trợ overloading

<?php
class test {
	public function __construct() {
		//Your logic for constructor
	}
	public function __call($method_name , $parameter) {
		if($method_name == "overlodedFunction") {//Function overloading logic for function name overlodedFunction
			$count = count($parameter);
			switch($count) {
				case "1":
					//Business log in case of overlodedFunction function has 1 argument
					echo "You are passing 1 argument";
					break;
				case "2": //Incase of 2 parameter
					echo "You are passing 2 parameter";
					break;
				default:
					throw new exception("Bad argument");
			}
		} else {
			throw new exception("Function $method_name does not exists ");
		}
	}	
}
$a = new test();
$a->overlodedFunction("ankur");
$a->overlodedFunction("techflirt" , "ankur");