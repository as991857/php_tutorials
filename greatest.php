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
        $n1=$_POST["n1"];
        $n2=$_POST["n2"];
        $n3=$_POST["n3"];
        if($n1>$n2 && $n1>$n3)
        {
            echo "Greatest Number:".$n1;
        }
        else if($n2>$n1 && $n2>$n3)
        {
            echo "Greatest Number:".$n2;
        }
        else
        {
            echo "Greatest Number:".$n3; 
        }

    }


    ?>
    <h2>Enter Three Number:</h2>
    <form method="post">
        <input type="number" name="n1" required="true"/><br/><br/>
        <input type="number" name="n2" required="true"/><br/><br/>
        <input type="number" name="n3" required="true"/><br/><br/>
        <input type="submit" name="calc" value="Greatest"/>
        

</form>

</body>
</html>