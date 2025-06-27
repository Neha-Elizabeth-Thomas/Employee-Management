<?php
session_start();
include("database.php");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_SESSION["eid"];


$sql = "UPDATE employee SET ";

if (!empty($_POST['name'])) $sql .= "e_ph = '{$_POST['name']}', ";
if (!empty($_POST['number'])) $sql .= "e_ph = '{$_POST['number']}', ";
if (!empty($_POST['designation'])) $sql .= "designation = '{$_POST['designation']}', ";
if (!empty($_POST['email'])) $sql .= "e_mail = '{$_POST['email']}', ";
if (!empty($_POST['acc_num'])) $sql .= "bank_acc_no = '{$_POST['acc_num']}', ";
if (!empty($_POST['ifsc'])) $sql .= "ifsc_code = '{$_POST['ifsc']}', ";
if (!empty($_POST['gender'])) $sql .= "gender = '{$_POST['gender']}', ";


$sql = rtrim($sql, ', ');


$sql .= " WHERE eid = '$name'";

if ($conn->query($sql) === TRUE) {
        // If insertion is successful, display a JavaScript alert
        echo "<script>
                alert('Record Updated Successfully!');
                window.location.href = 'emp_dashBoard.php'; // Redirect to the form page or another page
              </script>";
        }else {
            // If there’s an error, display an error message
            echo "<script>
                    alert('Error: " . $conn->error . "');
                </script>";
        }


$conn->close();
?>
