2. Determining An Object's Class

It is often convenient to be able to determine whether a given object is an instance of a particular class, or whether it implements a specific interface.
This can be done by using the instanceof operator:

Nó thường là thuận tiện để có thể xác định xem 1 object nhất định là 1 instance của 1 class cụ thể, hoặc cho dù nó implements 1 interface cụ thể.
Điều này có thể được thực hiện bằng cách sử dụng toán tử instanceof:
<?php
if ($obj instanceof MyClass) {
	echo "\$obj is an instance of MyClass";
}
?>

Naturally, instanceof allows you to inspect all of the ancestor classes of your object, as well as any interfaces.
Đương nhiên, instanceof cho phép bạn kiểm tra tất cả các lớp tổ tiên của object, cũng như bất kỳ interfaces nào.

-------------------------
(*) determine xác định

(*) ancestor tổ tiên
-------------------------

http://www.hocviendaotao.com/2016/06/huong-oi-tuong-trong-php-kiem-tra-oi.html