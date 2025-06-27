<?php
    include("database.php");
  
    $sql="SELECT * 
        FROM project";

    $result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project Management Dashboard</title>
    <link rel="stylesheet" href="e_dash.css" />
    <link rel="stylesheet" href="project.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <nav class="navbar">
     <button class="toggle-button" onclick="toggleSidebar()">
        <i class="fa-solid fa-bars"></i>
      </button>
      <h1 class="navbar-title">Project Dashboard</h1>
      <a href="#" class="profile-button">
        
      </a>
    </nav>

    <!-- Sidebar with navigation links -->
    <div id="sidebar" class="sidebar">
      
      <a href="prjct_add.html">Add new Project</a>
      <a href="allot_emp.html">Allot Employee</a>
      <a href="index.html">Back</a>
    </div>

    <!-- Overlay to disable the page when the sidebar is open -->
  <div id="overlay" onclick="closeSidebar()" style="display: none"></div>
  
  <div class="container">
        <h1>All Projects</h1>
        <table>
            <tr>
                <th>Project_id</th>
                <th>Name_of_project</th>
                <th>start_date</th>
                <th>end_date</th>
                <th>budget</th>
                <th>Department_id</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["project_id"] . "</td><td>" . $row["p_name"] . "</td><td>" . $row["start_date"] . "</td><td>" . $row["end_date"] . "</td><td>" . $row["budget"] . "</td><td>" . $row["dept_id"] . "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No records found</td></tr>";
            }
            $conn->close();
            ?>
        </table>
    </div>

    <script src="escript.js"></script>
  </body>
</html>
