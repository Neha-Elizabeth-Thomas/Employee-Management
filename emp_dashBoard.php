<?php
  include("database.php");
  session_start();

  $eid=$_SESSION["eid"];

  $sql="SELECT * FROM employee WHERE eid='$eid'";
  $result=mysqli_query($conn,$sql);

  if(mysqli_num_rows($result)>0){
    $employee_data=mysqli_fetch_assoc($result);
  }

  mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Employee Management Dashboard</title>
    <link rel="stylesheet" href="e_dash.css" />
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
      <h1 class="navbar-title">Employee Dashboard</h1>
      
        <button
          id="addEmployeeBtn"
          class="add-employee-button"
          onclick="showForm()"
        >
          Update profile
        </button>

        <a href="index.html">Home</a>

      </a>
    </nav>

    <!-- Sidebar with navigation links -->
    <div id="sidebar" class="sidebar">
      
      <a href="your_project.php">Your Projects</a>
      <a href="attendance.html">Attendance</a>
      <a href="leave.html">Mark Leave</a>
      <a href="signout.php">Log Out</a>
    </div>

    <!-- Overlay to disable the page when the sidebar is open -->
  <div id="overlay" onclick="closeSidebar()" style="display: none"></div>
  
  
    <!-- Modal for Add Employee Form -->
    <form id="employeeForm" action="update.php" method="post" >
      <h2>Update Employee</h2>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" />

      <label for="number">Ph no:</label>
      <input type="number" id="number" name="number"  />

      <label for="designation">Designation:</label>
      <select id="designation" name="designation" >
        <option value="">Select Designation</option>
        <option value="salesperson">Dev</option>
        <option value="trainer">Trainer</option>
        <option value="hr">HR</option>
        <option value="telecaller">Tester</option>
      </select>

      <label for="salary">Email:</label>
      <input type="text" id="email" name="email"  />
      <label for="salary">Account Number:</label>
      <input type="text" id="acc_num" name="acc_num"  />
      <label for="salary">ifsc code:</label>
      <input type="text" id="ifsc" name="ifsc" />

      <label for="gender">Gender:</label>
      <select id="gender" name="gender" >
        <option value="">Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>

      <div class="form-buttons">
        <button type="submit">Submit</button>
        <button type="button" onclick="cancelForm()">Cancel</button>
      </div>
    </form>

  <div class="container">
    <h1>Welcome, <?php echo htmlspecialchars($employee_data['ename']); ?>!</h1>
    <div class="employee-details">
        <div class="employee-detail">
            <span class="employee-label">Employee ID:</span>
            <span class="employee-value"><?php echo htmlspecialchars($employee_data['eid']); ?></span>
        </div>
        <div class="employee-detail">
            <span class="employee-label">Name:</span>
            <span class="employee-value"><?php echo htmlspecialchars($employee_data['ename']); ?></span>
        </div>
        <div class="employee-detail">
            <span class="employee-label">gender:</span>
            <span class="employee-value"><?php echo htmlspecialchars($employee_data['gender']); ?></span>
        </div>
        <div class="employee-detail">
            <span class="employee-label">Email:</span>
            <span class="employee-value"><?php echo htmlspecialchars($employee_data['e_mail']); ?></span>
        </div>
        <div class="employee-detail">
            <span class="employee-label">Phone:</span>
            <span class="employee-value"><?php echo htmlspecialchars($employee_data['e_ph']); ?></span>
        </div>
        <div class="employee-detail">
            <span class="employee-label">DOB:</span>
            <span class="employee-value"><?php echo htmlspecialchars($employee_data['dob']); ?></span>
        </div>
        <div class="employee-detail">
            <span class="employee-label">Joining Date:</span>
            <span class="employee-value"><?php echo htmlspecialchars($employee_data['date_of_joining']); ?></span>
        </div>
        <div class="employee-detail">
            <span class="employee-label">Department id:</span>
            <span class="employee-value"><?php echo htmlspecialchars($employee_data['dept_id']); ?></span>
        </div>
        <div class="employee-detail">
            <span class="employee-label" class="helo">Designation:</span>
            <span class="employee-value"><?php echo htmlspecialchars($employee_data['designation']); ?></span>
        </div>
    </div>
</div>  

    <script src="escript.js"></script>
  </body>
</html>