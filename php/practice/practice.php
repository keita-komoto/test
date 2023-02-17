<?php

echo "Hello World";
$a = 7+3;
echo $a;

if ( $a > 5 ){
    echo "A";
}
echo "<br>";

$b = array("山田","砂糖","鈴木");
foreach ($b as $key => $c) {
    echo $key."組".$c;
}
echo "<br>";

$food = array(
    "vegetable" => array('キャロット' => '人参'),
    "fruit" => array('appule' => 'りんご')
);
foreach ($food as $groupkey => $namekey) {
    echo "■".$groupkey."<br>";
    foreach ($namekey as $eigo => $nihongo) {
        echo $eigo.':'.$nihongo."<br>";
    }
    echo "<br>";
}

?>