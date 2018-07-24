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
 * Note that class constants suffer(1) from the same limitations as regular constants—
 * therefore, they can only contain scalar values.
 */

Class constants have several advantages over traditional constants:
since they are encapsulated in a class, they make for much cleaner code,
and they are significantly faster than those declared with the define() construct.

-------------------------
(1) suffer /ˈsʌfɚ/ : bị ảnh hưởng
to experience pain, illness, or injury
