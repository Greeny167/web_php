<?php
    include('../connect.php');

    $id = $_GET['id']; 
    $acc_pass = $_POST['txtPassword'];
    $acc_roleid = $_POST['role'];
    $acc_avt = $_FILES['fileAvt']['name'];
    $acc_avt_tmp = $_FILES['fileAvt']['tmp_name'];
    move_uploaded_file($acc_avt_tmp, '../uploads/'.$acc_avt);
    
    if (isset($_POST['btnSubmitEdit'])) 
    { 
        $sql = "UPDATE `account` SET `PASS` = '$acc_pass', 
                `role_id`= '$acc_roleid', `AVATAR`= '$acc_avt'
                WHERE `username` = '$id'" ; 
      if (mysqli_query($conn, $sql)) 
            
             // echo "New record created successfully";
                 header('location:../../index.php?click=account&id=1');
            
        else 
         {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    else {
        
    }
?>