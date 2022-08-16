<?php
$favrestaurants = array("valley coffee house","bistro","panaroma");
echo "My most favorite restaurants is: ".$favrestaurants[2]."\n";
echo "I have ".count($favrestaurants)."restaurants in my list\n";
$favrestaurants[2] = "Starbucks";
echo "My most favorite restaurants is: ".$favrestaurants[2]."\n";

$wanadada = array("Jane"=>21,"Faith"=>25,"Eve"=>24,"Cate"=>22);

echo "The youngest person is ".$wanadada["Jane"]."\n";

$wanadada = array(
    array("Jane",21,2000),
    array("Faith",25,8000),
    array("Eve",24,4000),
    array("Cate",22,6000)
);

echo "The youngest person is ".$wanadada[0][0]."her age is".$wanadada[0][1]."\n";
sort($favrestaurants);
for ($x=0;$x<count($favrestaurants);$x++) {
    echo "$favrestaurants[$x]\n";
    echo "<br>";
};

$age = array(18,21,19);
rsort($age);
for ($y=0;$y<count($age);$y++) {
    echo "$age[$y]\n";
    echo "<br>";
};









?>