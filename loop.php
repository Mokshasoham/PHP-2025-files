<?php
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