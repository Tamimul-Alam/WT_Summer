<?php
class database{
    function opencon(){
$servername="localhost";
$username="root";
$password="";
$dbname="labtask";
//create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//connection check
if($conn->connect_error){
    echo "error connecting database";
}
return $conn;
    }
    function insertuser($fname,$lname,$age,$designation,$planguage,$email,$password,$picture,$table,$conn){

$sqlstr="INSERT into $table(fname,lname,age,designation,planguage,email,password,picture) VALUES ('$fname','$lname','$age','$designation','$planguage','$email','$password','$picture')";
if($conn->query($sqlstr)){
    echo "data is being inserted";
}
else{
    echo "can't insert".$conn->error;//error debug using this property
}
    }
}
?>