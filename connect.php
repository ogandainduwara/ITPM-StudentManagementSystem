<?php
try{
    $db= new PDO("mysql:host=localhost;dbname=Student_Management;charset=utf8","root","");
}catch(PDOException $e){
echo $e->getMessage();
}

?>