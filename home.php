<?php
    $username = "Admin";
    $password = "123";
    session_start();
    
    if(isset($_SESSION['username'])){
        echo "<h4>hello ". $_SESSION['username'] . " </h4>";

    }
    else{
        if ($_POST['username'] == $username && $_POST['password'] == $password) {

            $_SESSION['username'] = $username;
    
            echo "<script>alert('Valid user!!')</script>";
            echo "<script>location.href='home.php'</script>";
        } 
        else{
            echo "<script>alert('Invalid user!!!')</script>";
            echo "<script>location.href='login.php'</script>";
        }
    }
?>