<?php

$con=mysqli_connect("localhost","root","","Library");

$arr=$_REQUEST["arr"];

$flag=true;
for($i=0;$i<count($arr);$i++){
    $alias=$arr[$i];
    $bookid=$alias[0];
    $title=$alias[1];
    $author=$alias[2];
    $price=$alias[3];
    $query="insert into books(bookid,title,author,price) values($bookid,$title,$author,$price)";
    if(!mysqli_query($con,$query)) $flag=false;
}

if($flag) echo "successfully inserted";



?>