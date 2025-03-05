<!--if statement-->
<?php
// $d=date("D");
// if($d =="Tue"){
//     echo "It's Thursday!";
// }
// $t=date("H");
// if($t<"7"){
//     echo "Have a good day!";
// }
// $t=date("H");
// if($t<"20"){
//     echo"Have a good day!";
// }else{
//     echo "good evening"
// }
// $d=date("D");
// if($d=="Thu"){
//     echo ("It's Thursday");
// }
// $d=date("D");
// if($d=="Fri"){
//     echo "Have a nice weekend!";
// }else{
//     echo "Have a nice day!";
// }
// $t=date("H");
// if($t<"20"){
//     echo "Have a good day!";
// }else{
//     echo "Have a good night!";
// }
// $d=date("D");
// if($d=="Fri"){
//     echo "Have a nice weeekend!";
// }elseif($d=="Sun"){
//     echo "Have a nice sunday!";
// }else{
//     echo "Have a nice day!";
// }
$marks=69;
if($marks<33){
    echo"fail";
}elseif($marks >=34 && $marks<50){
    echo "D grade";
}elseif($marks>=50 && $marks<65){
    echo "C grade";
}elseif($marks>=65 && $marks<80){
    echo "B grade";
}elseif($marks>=80 && $marks<90){
    echo "A grade";
}
//switch statements
$num=20;
switch($num){
    case 10:
        echo("number is equal to 10");
        
}