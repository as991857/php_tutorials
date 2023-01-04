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
   $dno=5;
   switch($dno)
   {
        case 1:
        echo "Sunday";
        break;
        case 2:
        echo "Monday";
        break;
        case 3:
        echo "Tuesday";
        break;
        case 4:
        echo "Wednesday";
        break;
        case 5:
        echo "Thursday";
        break;
        case 6:
        echo "Friday";
        break;
        case 7:
        echo "Saturday";
        break;
        default:
        echo "invalid choice";
        break;
   }
   ?> 
   <input type="number" name="dno" value="dno"/>
</body>
</html>