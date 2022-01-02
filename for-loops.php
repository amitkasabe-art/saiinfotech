<?php 
error_reporting(0);
for($number = 1 ; $number<=10;$number++)
{
    echo $number;
    echo "<br>";
}
echo "<br>";
echo "second loop";
echo "<br>";
// for loop with if condition 

/*
Question -  show only odd number in between 1 to 100
*/

// loop for 1 to 100
echo "even number";
echo "<br>";
for($num=1;$num<=100;$num++)
{
    // check if number is divisible by 2
    // if number is divisible by 2 and remider 2 is 0 so that it is an even number , example 10/2 = 5 , but reminder is 0
    // so let's check
    // here number is $num(variable)
    
    if($num%2==0)
    {
        echo "even number from 1 to 10" + $num;
        echo "<br>";
    }
}

?>