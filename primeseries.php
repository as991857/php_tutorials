<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Series</title>
</head>
<body>
   
    <h2>Series of Prime Number</h2>

    <?php
    if(isset($_POST["calc"]))
    {
        $n1=$_POST["n1"];
        $n2=$_POST["n2"];
        for($i=$n1;$i<=$n2;$i++)    //outer for loop
        {
            $c=0;                   //check krega prime
            for($j=1;$j<=$i;$j++)   //Inner for loop
            {
                if($i%$j==0)
                {
                    $c++;
                }
            }
            if($c==2)
            {
                echo $i."&nbsp;&nbsp;";
            }
        }
        
    }
    ?>

    <form method="post">
        Enter Lower Limit:
        <input type="number" name="n1" required="true"/><br/><br/>
        Enter Upper Limit:
        <input type="number" name="n2" required="true"/><br/><br/>
        <input type="submit" name="calc" value="prime series"/>





    </form>
</body>
</html>