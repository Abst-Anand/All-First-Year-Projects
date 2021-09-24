<?php

$name = $_POST['name'];
$Fee_per_semester = $_POST['Fee_per_semester'];
$current_semester = $_POST['current_semester'];
$Last_Month = $_POST['Last_Month'];
$This_Month = $_POST['This_Month'];
$emi = $_POST['emi'];

//md5($password);
//echo "$current_semester";
$conn = new mysqli('localhost','root','','individual_info');

if($conn->connect_error){
    die('connection failed:'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into expense (name,Fee_per_semester,current_semester,Last_Month,This_Month,emi) values(?,?,?,?,?,?)");
    $stmt->bind_param("siiiis",$name,$Fee_per_semester,$current_semester,$Last_Month,$This_Month,$emi);
    $stmt->execute();
    echo "Data Collected!!! ";
    header ("Location: http://localhost/Project%20Family/expense.html");
    $stmt->close();
    $conn->close();
   
}
   
   



?>