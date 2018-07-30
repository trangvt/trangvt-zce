2. Instantiating an Object

Once you have declared a class, you need to instantiate it in order to take advantage of the functionality it offers.
This is done by using the new construct:
<?php
    $myClassInstance = new myClass();
?>

-------------------------
(*) advantage /ədˈvɑːntɪʤ/
take advantage of : tận dụng lợi thế của
to use (something, such as an opportunity) in a way that helps you : to make good use of (something)

(*) offer /ˈɑːfɚ/
to give someone the opportunity to accept or take (something)
the functionality it offers : chức năng nó cung cấp

(*) reference tham chiếu
passed by reference: truyền theo tham chiếu
(*) reality /riˈæləti/

(*) practical /ˈpræktɪkəl/ thực tế
relating to what is real rather than to what is possible or imagined
-------------------------

In PHP 5, objects are treated differently from other types of variables.
An object is always passed by reference (in reality, it is passed by handle, but for all practical purposes there is no difference), rather than by value.
For example:
<?php
    $myClassInstance = new myClass();
    $copyInstance = $myClassInstance();
?>

In this case, both $myInstance and $copyInstance will point to the same object, even though we didn’t specify that we wanted this to happen by means of any special syntax.
This is the standard behaviour of objects in most languages, but wasn’t the case in PHP 4, where objects were handled like any other normal variables and were, therefore, passed by value.

Trong trường hợp này, cả $myInstance và $copyInstance sẽ trỏ đến cùng một object, mặc dù chúng tôi đã không chỉ định rằng chúng tôi muốn điều này xảy ra bằng bất kỳ cú pháp đặc biệt nào.
Đây là hành vi tiêu chuẩn của các object trong hầu hết các ngôn ngữ, nhưng không phải là trường hợp trong PHP 4, nơi các object được xử lý giống như bất kỳ variables bình thường khác và do đó, được pass bằng value.

-------------------------
(*) by means of bằng cách
through the use of (something)

(*) behaviour /bɪˈheɪvjɚ/

(*) handled: xử lý

(*) argument: đối số
-------------------------

pass-by-value
pass-by-reference

https://kungfuphp.com/tong-hop-php/tham-chieu-trong-php-ban-da-hieu-ro-ve-no.html
Để 1 function sửa đổi giá trị mặc đinh của argument truyền vào, thì phải gán tham chiếu cho nó

https://toidicode.com/tham-tri-va-tham-chieu-trong-php-125.html
<?php 
$so1 = 1;
$so2 = &$so1 + 1; // chỗ này có + hay * bao nhiêu đi nữa cũng vẫn là 5
$so2 =5;
echo $so1; //5
echo $so2; //5
?>
