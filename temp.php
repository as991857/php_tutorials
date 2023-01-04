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
        $t=$_POST["t"];
        $op=$_POST["op"];
      
       
        if($op=="ctof")
    {
        $f=(9*$t)/5+32;
        echo "temp in f=".$f;
    }
    else if($op=="ftoc")
    {
        $c=($t-32)*5/9;
        echo "temp in c=".$c;
    }
    else
    {
        echo "invalid operation:";
    }
    
       
    }
    ?>
    <h2>Temprature Convertor</h2>
    <form method="post">
    Enter temp:
        <input type="text" name="t" required="true"/><br/><br/>
        Select Operation:
        <input type="radio" name="op" value="ctof"/>ctof
        <input type="radio" name="op" value="ftoc"/>ftoc

      
        <input type="submit" name="calc" value="convert"/>

</form>
</body>
</html>