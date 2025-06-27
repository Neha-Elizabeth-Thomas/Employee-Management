<?php
    include("database.php");
    if(isset($_POST["submit"])){
        $eid=$_POST["employee_id"];
        $start_date=$_POST["startdate"];
        $end_date=$_POST["enddate"];
        $leave_type=$_POST["leave_type"];

        $sql="INSERT INTO emp_leave(eid,start_date,end_date,leave_type)
            VALUES('$eid','$start_date','$end_date','$leave_type')";

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