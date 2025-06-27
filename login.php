<?php
include("database.php");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["submit"])){
    // Retrieve the email and password from the form submission
    $email_address = $_POST["emailaddress"];
    $password = $_POST["password"];

    // Sanitize inputs to prevent SQL injection
    $email_address = $conn->real_escape_string($email_address);
    $password = $conn->real_escape_string($password);

    // Query to check if the email and password exist in the database
    $sql = "SELECT * FROM employee WHERE e_mail = '$email_address' AND password = '$password'";
    $result = mysqli_query($conn,$sql);

    if ($result->num_rows > 0) {
        // User exists, login successful
        session_start();
        $_SESSION["user_email"] = $email_address;
        $row=mysqli_fetch_assoc($result);
        $_SESSION["eid"]=$row["eid"];
        echo "<script>
                alert('Welcome! Logged in Successfully!');
                window.location.href = 'emp_dashBoard.php'; // Redirect to the form page or another page
              </script>";
        //header("Location: emp_dashBoard.html"); // Redirect to a dashboard page
        exit();
    } else {
        header("Location: login.html?error=1");
        exit();
    }
}
$conn->close();
?>
