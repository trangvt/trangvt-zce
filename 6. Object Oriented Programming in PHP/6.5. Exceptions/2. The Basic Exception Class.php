2. The Basic Exception Class

As we mentioned in the previous paragraph, exceptions are objects that must be
direct or indirect (for example through inheritance) instances of the Exception base
class.

The latter is built into PHP itself, and is declared as follows:
<?php
class Exception {
    // The error message associated with this exception
    protected $message = 'Unknown Exception';
    // The error code associated with this exception
    protected $code = 0;
    // The pathname of the file where the exception occurred
    protected $file;
    // The line of the file where the exception occurred
    protected $line;
    // Constructor
    function __construct ($message = null, $code = 0);
    // Returns the message
    final function getMessage();
    // Returns the error code
    final function getCode();
    // Returns the file name
    final function getFile();
    // Returns the file line
    final function getLine();
    // Returns an execution backtrace as an array
    final function getTrace();
    // Returns a backtrace as a string
    final function getTraceAsString();
    // Returns a string representation of the exception
    function __toString();
}
?>

Almost all of the properties of an Exception are automatically filled in for you by the interpreter—generally speaking, you only need to provide a message and a code, and
all the remaining information will be taken care of for you.


Since Exception is a normal (if built-in) class, you can extend it and effectively create your own exceptions, thus providing your error handlers with any additional information that your application requires.

-------------------------
paragraph /ˈpærəˌgrɑːf/

inheritance /ɪnˈherətəns/
