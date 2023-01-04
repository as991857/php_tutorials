

<?php
class MyClass
{
    function sayHello($name)
    {
        echo "Hello ".$name;
    }

    
}

//Now we test class

$obj=new MyClass(); //creation of object
$obj->sayHello("Anil Sharma");       //invocation method (->)

?>