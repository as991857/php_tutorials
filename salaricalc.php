<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salari Calculator</title>
</head>
<body>
    <?php
    if(isset($_POST["calc"]))
    {
        $bs=$_POST["bs"];
        $hra=0;
        $da=0;
        $gs=0;
        if($bs<=4000)
        {
        $hra=$bs*10/100;
        $da=$bs*50/100;
        }
        else if($bs>4001 && $bs<=8000)
        {
            $hra=$bs*20/100;
            $da=$bs*60/100;
        }
        else if($bs>8001 && $bs<=12000)
        {
            $hra=$bs*25/100;
            $da=$bs*70/100;
        }
        else
        {
        $hra=$bs*30/100;
        $da=$bs*80/100;
        }
        $gs=$bs+$hra+$da;
        echo "<h3>Basic Salary=".$bs."</h3>";
        echo "<h3>HRA=".$hra."</h3>";
        echo "<h3>DA=".$da."</h3>";
        echo "<h3>GROSS SALARY=".$gs."</h3>";
        
    }

    ?>
    
   <h2>Salari Calculator</h2>
   <form method="post">
   Enter Basic Salary:
   <input type="number" name="bs" required="true"/><br/><br/>
  
   <input type="submit" name="calc" value="Calculate"/> 
</form>
</body>
</html>