<?php
//function for addition 
function add($a,$b){
    $sum= $a+$b;
    echo"sum is : $sum <br><br>";
}


function sub($a,$b){
    $sub=$a-$b;
    echo"difference is : $sub <br><br>";
}

//function for 
function mul($a,$b){
    $mul=$a*$b;
    echo"multilpied value is: $mul <br><>br>";
}

//function for division
function div($a,$b){
    $div=$a/$b;
    echo "Division value is: $div <br><br>";
}

// using the post method
if(isset($_POST['add'])){
    add($_POST['first'],$_POST['second']);
}

if(isset($_POST['sub'])){
    sub($_POST['first'],$_POST['second']);
}

if(isset($_POST['mul'])){
    mul($_POST['first'],$_POST['second']);
}

if(isset($_POST['div'])){
    div($_POST['first'],$_POST['second']);
}
?>