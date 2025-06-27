<?php
    include("database.php");
    if(isset($_POST["submit"])){
        $eid=$_POST["eid"];
        $project_id=$_POST["project_id"];
        $role=$_POST["role"];

        $sql="INSERT INTO alloted_to(eid,project_id,role)
            VALUES('$eid','$project_id','$role')";

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