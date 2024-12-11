<?php
    try{
        $numerator=10;
        $denominator=2;
        if($denominator===0){
            throw new Exception("Division by zero error");
        }
        $result=$numerator/$denominator;
        echo"Result of divison : " .$result."<br>";
        $datestring='2024-11-15';
        $dateformat='Y-m-d';
        $date=DateTime::CreateFromFormat($dateformat,$datestring);
        if(!$date||$date->format($dateformat)!==$datestring){
            throw new Exception("Invalid date format");
        }
        echo"Date is Valid : ".$datestring;
    }
    catch(Exception $e){
        echo"Error:".$e->getMessage();
    }
?>