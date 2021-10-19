<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action="" method="get">
 Enter Units:<input type="text"  name="Value" id="">
    <input type="submit" value="val" name="btn">
</form>
<?php
// if(isset($_GET['btn'])){ 
$value = $_GET['Value'];
if($value<=50){
    echo $value*3.5;
}else if($value>50 && $value<=150){
    echo $value*4;
}else if($value>150 && $value<=250){
    echo $value*4;
}else{
    echo $value*6.5;
}
// }}
?>
</body>

</html>