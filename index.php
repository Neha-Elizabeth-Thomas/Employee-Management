<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER["PHP_SELF"]?>"  method="post">
        <h1>This is my website</h1><br>
        <label>Username: </label>
        <input type="text" name="username"><br>
        <label>Password: </label>
        <input type="password" name="password"><br>
        <label>mob no: </label>
        <input type="text" name="mob_no"><br>
        <label>email: </label>
        <input type="email" name="email"><br>
        <input type="submit" name="submit" value="register">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
        $password=filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);
        $mob=$_POST["mob_no"];
        $email=filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);

        if(empty($_POST["username"])){
            echo"Enter a valid username";
        }else if(empty($_POST["password"])){
            echo"Enter a valid password";
        }else if(empty($_POST["mob_no"])){
            echo"Enter a valid mob no";
        }else if(empty($_POST["email"])){
            echo"Enter a valid email";
        }else{
            $sql="INSERT INTO employee(username,password,e_ph,e_mail)
                    VALUES ('$username','$password','$mob','$email')";
        
            mysqli_query($conn,$sql);

        }
    }
    mysqli_close($conn);
?>