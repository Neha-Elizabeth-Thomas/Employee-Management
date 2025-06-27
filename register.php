<?php
    include("database.php");
    if(isset($_POST["submit"])){
        $username=filter_input(INPUT_POST,"yourname",FILTER_SANITIZE_SPECIAL_CHARS);
        $email=filter_input(INPUT_POST,"emailaddress",FILTER_SANITIZE_EMAIL);
        $password=filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);
        $phone=filter_input(INPUT_POST,"phone",FILTER_SANITIZE_SPECIAL_CHARS);
        $gender=filter_input(INPUT_POST,"gender",FILTER_SANITIZE_SPECIAL_CHARS);
        $dob=filter_input(INPUT_POST,"dob",FILTER_SANITIZE_SPECIAL_CHARS);
        $bank_account=filter_input(INPUT_POST,"bank_account",FILTER_SANITIZE_SPECIAL_CHARS);        
        $ifsc=filter_input(INPUT_POST,"ifsc",FILTER_SANITIZE_SPECIAL_CHARS);
        $doj=filter_input(INPUT_POST,"doj",FILTER_SANITIZE_SPECIAL_CHARS);
        $depid=filter_input(INPUT_POST,"depid",FILTER_SANITIZE_SPECIAL_CHARS);
        $designation=filter_input(INPUT_POST,"Designation",FILTER_SANITIZE_SPECIAL_CHARS);

        $sql="INSERT INTO employee(ename,password,gender,dob,bank_acc_no,ifsc_code,dept_id,designation,date_of_joining,e_ph,e_mail)
                VALUES('$username','$password','$gender','$dob','$bank_account','$ifsc','$depid','$designation','$doj','$phone','$email')";

        if ($conn->query($sql) === TRUE) {
        // If insertion is successful, display a JavaScript alert
        echo "<script>
                alert('Data submitted successfully!');
                window.location.href = 'login.html'; // Redirect to the form page or another page
              </script>";
        }else {
            // If there’s an error, display an error message
            echo "<script>
                    alert('Error: " . $conn->error . "');
                </script>";
        }

        mysqli_close($conn);
        
    }
?>