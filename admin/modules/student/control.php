<?php
    include('../../connect.php');
    $std_usename = $_POST['txtUsername'];
    $sdt_fullname = $_POST['txtFullname'];
    $sdt_dob = $_POST['txtDob'];
    $sdt_sex = $_POST['rbSex'];
    $sdt_sex = $_POST['txtEmail'];
    $sdt_sex = $_POST['txtPhone'];

    if (isset($_POST['btnSubmitAdd'])) 
    {
        $sql="INSERT INTO QUYEN () VALUES ()"; 
    }
    else {}
?>