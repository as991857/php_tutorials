<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["calc"]))
    {
        $n=$_POST["n"];
        $sum=0;
        $r;
        while($n>0)
			{
				$r=$n%10;
				$sum=$sum+$r;
				$n=$n/10;
				
			}
            echo "sum of digit is= ".$sum;
    }
    ?>
    <form method="post">
    Enter a number:<input type="number" name="n" required="true"/><br/><br/>
    <input type="submit" name="calc" value="calc"/>
</form>
</body>
</html>