<?php 

$user = $_GET['user'];
$num =0 ;
$randn= rand(1,3);

if($user=="rock"){
    $num=1;
}
else if($user=="paper"){
  $num =2;
}
else if($user=="scissor"){
    $num = 3;
}
echo $num;
echo $randn;
if($num==$randn ){
    echo "no one can win";
    
}
else if($num=1 && $randn==2){
    echo "Computer win";
}
else if($num=1 && $randn==3){
    echo "Computer win";
}
else if($num=2 && $randn==1){
    echo "Computer win";
}
else if($num=2 && $randn==3){
    echo "Computer win";
}
else if($num=3 && $randn==1){
    echo "Computer win";
}
else if($num=3 && $randn==2){
    echo "Computer win";
}




?>