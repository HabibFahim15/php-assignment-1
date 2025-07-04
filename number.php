<?php 

// number is positive or negative

echo "Enter a number : ";

$number = (int)readline();

if($number > 0){
    echo "The number is positive. \n";
}else if($number < 0){
    echo "The number is negative. \n";
}else{
    echo "The number is zero. \n";
}

//number is even or odd

echo "Enter a number : ";

$NUMBER = (int)readline();

if($NUMBER % 2 == 0){
    echo "The number is even. \n";
}else{
    echo "The number is odd. \n";
}

?>