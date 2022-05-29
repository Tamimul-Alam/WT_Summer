<?php
$first_number=$_POST["first"];
$second_number=$_POST["second"];

$plus=$_POST["calculation"];
$mult=$_POST["calculation"];
$minus=$_POST["calculation"];
$divide=$_POST["calculation"];

if($plus=="+")
{
    echo "Result : ";
    echo $first_number+$second_number;
}
if($mult=="*")
{
    echo "Result : ";
    echo $first_number*$second_number;
}
if($minus=="-")
{
    echo "Result : ";
    echo $first_number-$second_number;
}
if($divide=="/")
{
    echo "Result : ";
    echo $first_number/$second_number;
}
?>