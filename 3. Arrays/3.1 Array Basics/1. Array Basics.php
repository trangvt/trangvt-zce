1. Array Basics

All arrays are ordered collections of items, called elements.
Each element has a value, and is identified by a key that is unique to the array it belongs to.

As we mentioned in the previous paragraph, keys can be either integer numbers or strings of arbitrary length.


Arrays are created one of two ways.
The first is by explicitly calling the array() construct, which can be passed a series of values and, optionally, keys:
<?php
$a = array (10, 20, 30);
$a = array ('a' => 10, 'b' => 20, 'cee' => 30);
$a = array (5 => 1, 3 => 2, 1 => 3,);
$a = array();
?>

The first line of code above creates an array by only specifying the values of its three elements.

Since every element of an array must also have a key, PHP automatically assigns a numeric key to each element, starting from zero. 

In the second example, the array keys are specified in the call to array()—in this case, three alphabetical keys (note that the length of the keys is arbitrary). 

In the third example, keys are assigned "out of order," so that the first element of the array has, in fact, the key 5—note here the use of a "dangling comma" after the last element, which is perfectly legal from a syntactical perspective and has no effect on the final array. 

Finally, in the fourth example we create an empty array.


A second method of accessing arrays is by means of the array operator ( [] ):
<?php
$x[] = 10;
$x['aa'] = 11;
echo $x[0]; // Outputs 10
?>

As you can see, this operator provides a much higher degree of control than array(): 

in the first example, we add a new value to the array stored in the $x variable.
Because we don't specify the key, PHP will automatically choose the next highest numeric key available for us. 

In the second example, on the other hand, we specify the key 'aa' ourselves.

Note that, in either case, we don't explicitly initialize $x to be an array,
which means that PHP will automatically convert it to one for us if it isn’t;
if $x is empty, it will simply be initialized to an empty array.
-------------------------
(1) ordered collections
ordered     /ˈoɚdɚd/ : carefully organized or controlled
collection  /kəˈlɛkʃən/

(2) identify /aɪˈdɛntəˌfaɪ/

(3) unique /jʊˈniːk/

(4) paragraph /ˈpærəˌgrɑːf/

(5) arbitrary /ˈɑːbətrəri/  : not planned or chosen for a particular reason

(6) explicit /ɪkˈsplɪsət/ : very clear and complete

(7) specify /ˈspɛsəˌfaɪ/
specifies; specified; specifying

(8) alphabetical /ˌælfəˈbɛtɪkəl/

(9) dangling comma /ˈdæŋgəl ˈkɑːmə/ dấu phẩy nối
dangle /ˈdæŋgəl/ : hang or swing loosely

(10) legal /ˈliːgəl/

(11) a syntactical perspective  : góc độ cú pháp
syntactical (a) /sɪnˈtæktɪkəl/  : of or relating to syntax
perspective     /pɚˈspɛktɪv/    : a way of thinking about and understanding something (such as a particular issue or life in general)

(12) in either case : trong cả 2 trường hợp

(13) explicitly initialize : khởi tạo một cách rõ ràng
explicit (a)    /ɪkˈsplɪsət/    : very clear and complete
initialize (v)  /iˈniʃəˌlaɪz/   : set to the value or put in the condition appropriate to the start of an operation.

(14) automatically /ˌɑːtəˈmætɪkli/
