<?php

echo "this is a php while loop";
echo "<br>";
// lets assume we want to start our loop (while) from 1 and want to interate (continue it to ) till 10 
$number = 1;
// so varible is declared with number 1 
while($number < 10)
{
    // number = 1 as 1 is less than 10 so that loop print 1
    echo $number;
    $number ++;//loop want will increase by 1 and its value will become 2 
    echo "<br>"; // after printin 2 will add break 
// similarly loop will be increased till $number i.e 1 becomes 10 
}


?>