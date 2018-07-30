2. Class Constants

Class constants work in the same way as regular constants, except they are scoped within a class.
Class constants are public, and accessible from all scopes; for example, the following script will output Hello World :

<?php
class foo {
    const BAR = "Hello World";
}
echo foo::BAR;
?>

/*
 * Note that class constants suffer from the same limitations as regular constants - therefore, they can only contain scalar values.
 *
 * Chú ý rằng class constants bị ảnh hưởng từ những giới hạn như constants thông thường - vậy nên, chúng có thể chỉ bao gồm giá trị vô hướng
 */

Class constants have several advantages over traditional constants: since they are encapsulated in a class, they make for much cleaner code, and they are significantly faster than those declared with the define() construct.

Các class constants có một số ưu điểm so với các hằng số truyền thống: vì chúng được đóng gói trong 1 class, chúng tạo ra nhiều mã sạch hơn, và chúng nhanh hơn đáng kể so với define().
-------------------------
(*) suffer /ˈsʌfɚ/ : bị ảnh hưởng
to experience pain, illness, or injury

(*) scalar values giá trị vô hướng

(*) advantages /ədˈvantij/ ưu điểm