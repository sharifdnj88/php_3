<?php

/**
 * <span style=\"text-align:center;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);font-size:22px\";>Hi {$name} Your age is <span style=\"color:maroon;font-weight:bolder;font-size:28px\";> {$age} </span> years old.</span> <br><br>";
 */

function ageCal(string $name, int $year){
    $age = 2022-$year;
    echo "<p style=\"padding:5px;box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);border-radius:10px;text-align:center;margin-top:5px;color:#000;background-color:#FEA443;font-weight:bold;text-shadow: 0px 0px 10px rgba(0,0,0,0.3)\";> Name: {$name}. <br> Birth-year: {$year}. <br> You are {$age } years old. </p>";
}



?>