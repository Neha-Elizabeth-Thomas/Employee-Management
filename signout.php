<?php
    session_start();
    session_unset();
    session_destroy();
    echo "<script>
                alert('Logged out Successfully!');
                window.location.href = 'login.html'; // Redirect to the form page or another page
        </script>";
    exit;
?>