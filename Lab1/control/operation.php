<?php
$first_number=$_POST["first"];
$second_number=$_POST["second"];

$plus=$_POST["sum"];
$mult=$_POST["mul"];
$minus=$_POST["sub"];
$divide=$_POST["div"];

if($plus)
{
    echo $first_number+$second_number;
}
if($mult)
{
    echo $first_number*$second_number;
}
if($minus)
{
    echo $first_number-$second_number;
}
if($divide)
{
    echo $first_number/$second_number;
}
?>