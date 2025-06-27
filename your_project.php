<?php
    include("database.php");
    session_start();
    $eid=$_SESSION["eid"];
    $sql="SELECT * 
        FROM alloted_to NATURAL JOIN project
        WHERE eid='$eid'";

    $result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Projects</title>
    <link rel="stylesheet" href="project.css">
</head>
<body>
    <div class="container">
        <h1>Your Projects</h1>
        <table>
            <tr>
                <th>Project_id</th>
                <th>Name_of_project</th>
                <th>start_date</th>
                <th>end_date</th>
                <th>budget</th>
                <th>role</th>
                <th>Department_id</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["project_id"] . "</td><td>" . $row["p_name"] . "</td><td>" . $row["start_date"] . "</td><td>" . $row["end_date"] . "</td><td>" . $row["budget"] . "</td><td>" . $row["role"] . "</td><td>" . $row["dept_id"] . "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No records found</td></tr>";
            }
            $conn->close();
            ?>
        </table>
    </div>
</body>
</html>
