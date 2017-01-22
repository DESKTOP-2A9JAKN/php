<?php
$a = 1;
while($a <= 10){
    echo "$a<br>\n";
    $a++;
}


/*Сума чисел від одного до 100*/
$total = 0;
$b = 1;
while ($b <= 5)
{
    $total = $total + $b;
    $b++;
}
echo  " Сума всіх чисел від одного до 100: $total<br>";

$total = 0;
$b = 1;
do
{
    $total = $total + $b;
    $b++;
}

while ($b <= 5);
echo  " Сума всіх чисел від одного до 100: $total";

for ($a = 0, $sum = 0; $a <= 1000; $a++)
{
$sum = $sum + $a;
}
echo  " Сума всіх чисел від одного до 1000: $sum";
?>