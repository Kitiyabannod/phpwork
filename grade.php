<?php
    
    $score = $_GET['score'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body><br><br><br><br><br><br>
<div class="container" align="center">
<table width=30% cellpadding="6" cellspacing="2" style="border:double 5px #9900FF,"><tr><td style="border:double 5px #9900FF;"> <div class="container" align="center"><?php    

if($score >= 90){
    echo "คุณได้เกรด A+";
}elseif($score >= 80){
    echo "คุณได้เกรด A";
}elseif($score >= 75){
    echo "คุณได้เกรด B+";
}elseif($score >= 70){
    echo "คุณได้เกรด B";
}elseif($score >= 65){
    echo "คุณได้เกรด C+";
}elseif($score >= 60){
    echo "คุณได้เกรด C";
}elseif($score >= 55){
    echo "คุณได้เกรด D+";
}elseif($score >= 50){
    echo "คุณได้เกรด D";
}else{
    echo "คุณได้เกรด F";
}    

?></td></tr></table>


</div>
</body>
</html>