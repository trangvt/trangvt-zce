3. Determining An Object’s Class

It is often convenient to be able to determine whether a given object is an instance
of a particular class, or whether it implements a specific interface. This can be done
by using the instanceof operator:

<?php
if ($obj instanceof MyClass) {
	echo "\$obj is an instance of MyClass";
}
?>

Naturally, instanceof allows you to inspect all of the ancestor classes of your object,
as well as any interfaces.
