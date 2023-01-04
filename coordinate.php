<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
if(isset($_POST["calc"]))
{
    $x=$_POST["x"];
    $y=$_POST["y"];
    if($x>0 && $y>0)
    {
        echo "1st quadrant";
    }
    else if($x<0 && $y>0)
    {
        echo "2nd quadrant";

    }
    else if($x<0 && $y<0)
    {
        echo "3rd quadrant";
    }
    else if($x>0 && $y<0)
    {
        echo "4th quadrant";
    }
    else if($x==0 && $y==0)
    {
        echo "point is center";
    }
    else
    {
      echo "eigher x axis or y axis";
    }
}
?>
<form method="post">
    <h2>Coordinate: </h2>
   Enter value for x: <input type="number" name="x" required="true"/><br/>
   Enter value for y: <input type="number" name="y" required="true"/><br/>
   <input type="submit" name="calc" value="find coordinate"/>


</form>
</body>
</html>