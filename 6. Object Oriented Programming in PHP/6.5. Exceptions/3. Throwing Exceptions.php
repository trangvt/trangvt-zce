3. Throwing Exceptions

Exceptions are usually created and thrown when an error occurs by using the throw construct:

> Although it is common practice to do so, you don’t need to create the Exception object
directly in the throw expression.

<?php
if ($error) {
    throw new Exception ("This is my error");
}
?>

Exceptions then "bubble up" until they are either handled by the script or cause a fatal exception.
The handling of exceptions is performed using a try...catch block:

<?php
try {
    if ($error) {
        throw new Exception ("This is my error");
    }
} catch (Exception $e) {
    // Handle exception
}
?>

In the example above, any exception that is thrown inside the try{} block is going to be caught and passed on the code inside the catch{} block, where it can be handled as you see fit.

Note how the catch() portion of the statement requires us to hint the type of Exception that we want to catch; one of the best features of exceptions is the fact that you can decide which kind of exception to trap.

Since you are free to extend the base Exception class, this means that different nested try..catch blocks can be used to trap and deal with different types of errors:

Lưu ý phần catch() của câu lệnh yêu cầu chúng ta gợi ý kiểu Exception

<?php
class myException extends Exception { }
try {
    try {
        try {
            new PDO("mysql:dbname=zce");
            throw new myException("An unknown error occurred.");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    } catch(myException $e) {
        echo $e->getMessage();
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

In this example, we have three nested try... catch blocks;
the innermost one will only catch PDOException objects, while the next will catch the custom myException objects and the outermost will catch any other exceptions that we might have missed.

Rather than nesting the try...catch blocks like we did above, you can also chain just
the catch blocks:

<?php
try {
    new PDO("mysql:dbname=zce");
    throw new myException("An unknown error occurred.");
} catch (PDOException $e) {
    echo $e->getMessage();
} catch (myException $e) {
    echo $e->getMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

Once an exception has been caught, execution of the script will follow from directly
after the last catch block.

To avoid fatal errors from uncaught exceptions, you could wrap your entire application in a try... catch block—which would, however, be rather inconvenient.

Luckily, there is a better solution—PHP allows us to define a “catch-all” function that is automatically called whenever an exception is not handled. This function is set up by calling set_exception_handler() :

<?php
function handleUncaughtException($e) {
    echo $e->getMessage();
}
set_exception_handler("handleUncaughtException");
throw new Exception("You caught me!");
echo "This is never displayed";
?>

Note that, because the catch-all exception handler is only called after the exception has bubbled up through the entire script, it, just like an all-encompassing try...catch block, is the end of the line for your code—in other words, the exception has already caused a fatal error, and you are just given the opportunity to handle it, but not to recover from it.

For example, the code above will never output You caught me!, because the exception thrown will bubble up and cause handleUncaughtException() to be executed; the script will then terminate.


> If you wish to restore the previously used exception handler, be it the default of a fatal
error or another user defined callback, you can use restore_exception_handler() .
-------------------------
to do so : làm như vậy

portion /ˈpoɚʃən/
to divide (something) into parts and give those parts to people

feature /ˈfiːtʃɚ/
an interesting or important part, quality, ability, etc.

innermost /ˈɪnɚˌmoʊst/
closest to the center or inside of something

outermost /ˈaʊtɚˌmoʊst/

chain /ˈtʃeɪn/
to fasten, hold, or connect (someone or something) with a chain

the catch-all exception handler : trình xử lý ngoại lệ bắt hết

all-encompassing : bao gồm tất cả
