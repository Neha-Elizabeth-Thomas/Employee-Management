<?php
    include("database.php");
    session_start();
    if(isset($_POST["attbtn"])){
        $eid=$_POST["employee_id"];
        $cur_date=date("Y-m-d");
        $cur_time=date("h:i:sa");

        $sql="INSERT INTO attendance(eid,date,check_in_time)
            VALUES('$eid','$cur_date','$cur_time')";

        if ($conn->query($sql) === TRUE) {
        // If insertion is successful, display a JavaScript alert
        echo "<script>
                alert('Data submitted successfully!');
                window.location.href = 'emp_dashBoard.php'; // Redirect to the form page or another page
              </script>";
        }else {
            // If there’s an error, display an error message
            echo "<script>
                    alert('Error: " . $conn->error . "');
                </script>";
        }
    }
    mysqli_close($conn);
?>