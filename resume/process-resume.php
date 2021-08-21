<?php 
    session_start();

    $_SESSION['message'] = 'Message Sent Successfully !!!';
    header('location:resume.php');

?>