<?php
echo "day 5| control structures<br><br>";

echo "for loop <br> ";
$num = array(1,2,3,4,5,6);

for ($i=0;$i<count($num); $i++){
    echo $num[$i]. " ";
}

echo "<br> <br> for... each loop <br>";
foreach($num as $i){
    echo ' '.$i . " ";
}
echo "<br><br> while loop <br>";
$i=0;
while ($i != count($num)){
    echo $num[$i] . " ";
    $i++;
}

echo ("<br><br> do while loop will run at least one time <br>");
$i=10;
do{
    echo $i;
}while($i<1);

echo "<br> <br>break and continue <br> print 1 to 15 excluding 6-11 <br>";
for($i=1; $i<20; $i++){
    if ($i == 16){
        break;
    }
    elseif ($i>=6 && $i<=11){
        continue;
    }
    else{
        echo $i. " ";
    }
}
?>