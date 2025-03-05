<?php
$colors=array("Red","Green","Blue");
foreach($colors as $value){
    echo $value . "<br>";
}
$superhero=array(
    "name"=>"Peter Parker",
    "email"=>"moksha@gmail.com",
    "age"=>19
);
foreach($superhero as $key=>$value){
    echo $key . " : " . $value . "<br>";
}
for($i=1;$i<=3;$i++){
    for($j=1;$j<=3;$j++){
        if(!($i==$j)){
            continue;
        }
        echo $i.$j;
        echo"</br>";
    }
}
?>