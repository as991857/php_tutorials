<?php
class Shape
{
    function showShape()
    {
        echo "this shape is : ";
    }
}
class Square extends Shape
{
    function showSquare()
    {
        echo "Square.<br/>";
    }
}
class Cube extends Shape
{
    function showCube()
    {
        echo "Cube.<br/>";
    }
}
//Now we test classes.
$sq=new Square();
$sq->showShape();
$sq->showSquare();
$cu=new Cube();
$cu->showShape();
$cu->showCube();

?>