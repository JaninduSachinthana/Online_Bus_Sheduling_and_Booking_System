<?php 
    require"config.php";
    $username = $_GET["username"];
    $username = $_GET["email"];
    $username = $_GET["message"];
    
    $sql = "INSERT INTO feedbacks(username,email,message) VALUES('$username','$email','$message')";
    if($conn->query($sql))
    {
        echo "<script> alert('feedback successfully send to the system')</script>";
    }
    else
    {
        echo "error: ".$conn->error;
    }

    $conn->close();
?>