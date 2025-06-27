<?php
    $db_server="localhost";
    $db_user="root";
    $db_pass="Neha@2004";
    $db_name="employee_db";
    $conn="";
    
    try{
        $conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);
    }catch(mysqli_sql_exception){
        echo"Couldnt establish connection<br>";
    }

    /*if($conn){
        echo"Connection established successfully<br>";
    }*/
?>