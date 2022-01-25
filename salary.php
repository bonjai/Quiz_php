<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> :: Salary :: </title>
</head>
<body>
         <h3>ข้อที่1</h3>
<?php 
        $salary= 10000;
        echo "เงินเดือน".$salary."บาท<br>";
        
        if($salary<=10000){
        $bonus = $salary*3;
        $money = $salary+$bonus;
        echo "ได้รับโบนัส = ".$bonus."บาท<br>";
        echo "ได้รับเงินสุทธิ = ".$money."บาท<br>";
        
    }else if($salary<=50000){
        $bonus = $salary*2;
        $money =$salary + $bonus;
        echo "ได้รับโบนัส = ".$bonus."บาท<br>";
        echo "ได้รับเงินสุทธิ = ".$money."บาท<br>";
        
    }else if($salary>=100000){
        $bonus = $salary*1;
        $money = $salary + $bonus;
        echo "ได้รับโบนัส = ".$bonus."บาท<br>";
        echo "ได้รับเงินสุทธิ = ".$money."บาท<br>";
    }
?>
</body>
</html>