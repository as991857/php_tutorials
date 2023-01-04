<?php
class A
{
    function showA()
    {
        echo "This massage from class A.<br/>";
    }

}
class B extends A
{
    function showB()
    {
        echo "This massage from class B.<br/>";
    }

}
class C extends B
{
    function showC()
    {
        echo "This massage from class C.<br/>";
    }

}
//Now we test classes.
$C=new C();
$C->showA();
$C->showB();
$C->showC();
?>