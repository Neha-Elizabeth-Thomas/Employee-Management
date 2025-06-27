<?php
    include("database.php");
    if(isset($_POST["submit"])){
        $p_name=$_POST["p_name"];
        $start_date=$_POST["start_date"];
        $end_date=$_POST["end_date"];
        $budget=$_POST["budget"];
        $dept_id=$_POST["dept_id"];

        $sql="INSERT INTO project(p_name,start_date,end_date,budget,dept_id)
            VALUES('$p_name','$start_date','$end_date','$budget','$dept_id')";

        if ($conn->query($sql) === TRUE) {
        // If insertion is successful, display a JavaScript alert
        echo "<script>
                alert('Data submitted successfully!');
                window.location.href = 'prjct_dashbord.php'; // Redirect to the form page or another page
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