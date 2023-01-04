<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>anil</title>
</head>
<body>
    <?php
    if(isset($_POST["calc"]))
    {
        $n1=$_POST["n1"];
        $n2=$_POST["n2"];
        $i;
        for($i=$n1;$i<=$n2;$i++)
        {
            if($i%2==0)
            {
                echo $i."&nbsp;&nbsp;";
            }
           
        }
        
    }
    ?>
    <form method="post">
        <h2>Even Series</h2>
        Enter lower limit:<input type="number" name="n1" required="true"/><br/><br/>
        Enter upper limit:<input type="number" name="n2" required="true"/><br/><br/>
        <input type="submit" name="calc" value="calc"/>
    </form>
</body>
</html>