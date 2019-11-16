<?php
    include('../connect.php');
    $id = $_GET['id'];
    $acc_usename = $_POST['txtAccount'];
      $acc_pass = $_POST['txtPassword'];
      $acc_roleid = $_POST['role'];
      $acc_date = $_POST['txtCreateDate'];
      $acc_avt = $_FILES['fileAvt']['name'];
      $acc_avt_tmp = $_FILES['fileAvt']['tmp_name'];
      move_uploaded_file($acc_avt_tmp, '../uploads/'.$acc_avt);
      $sdt_fullname = $_POST['txtFullname'];
      $sdt_dob = $_POST['txtDob'];
      $sdt_sex = $_POST['rbSex'];
      $sdt_email = $_POST['txtEmail'];
      $sdt_addr = $_POST['txtAddr'];
      $sdt_phone = $_POST['txtPhone'];
    if (isset($_POST['btnSubmitAdd'])) 
    {
      $sql1 = "INSERT INTO `account`(`username`, `PASS`, `role_id`,`create_date`, `AVATAR`) 
        VALUES ('$acc_usename','$acc_pass','$acc_roleid', ' $acc_date','$acc_avt')"; 

        $sql2 = "INSERT INTO `student`(`USERNAME`, `FULLNAME`, `DOB`, `SEX`, `EMAIL`, `ADDRESS`, `PHONE`) 
        VALUES ('$acc_usename','$sdt_fullname',' $sdt_dob', '$sdt_sex','$sdt_email','$sdt_addr','$sdt_phone')"; 
        if (mysqli_query($conn, $sql1)) 
         {
            if (mysqli_query($conn, $sql2)) 
            {
              // echo "New record created successfully";
               header('location:../../index.php?click=student&id=1');
            } 
            else 
               {
               echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
               }
         } 
         else 
            {
            echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
            }
    }
    else if (isset($_POST['btnSubmitEdit'])){   
      $sql1 = "UPDATE `account` SET `username` = '$acc_usename', `PASS` = '$acc_pass',
                   `role_id`= '$acc_roleid', `AVATAR`= '$acc_avt'
                   WHERE `username` = '$id'" ; 

      $sql2 = "UPDATE `student` SET `USERNAME` ='$acc_usename', `FULLNAME` ='$sdt_fullname', 
               `DOB` ='$sdt_dob', `SEX` = '$sdt_sex', `EMAIL`='$sdt_email',
               `ADDRESS`= '$sdt_addr', `PHONE`='$sdt_phone' 
               WHERE `username` = '$id'" ;
      if (mysqli_query($conn, $sql1)) 
       {
          if (mysqli_query($conn, $sql2)) 
          {
            // echo "New record created successfully";
             header('location:../../index.php?click=student&id=1');
          } 
          else 
             {
             echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
             }
       } 
       else 
          {
          echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
          }

    }
    else
    {
      $sql1 = "DELETE FROM `student` WHERE USERNAME='$id'";
      $sql2 = "DELETE FROM `account` WHERE username='$id'";
      if (mysqli_query($conn, $sql1)) 
      {
         if (mysqli_query($conn, $sql2)) 
            {
               header('location:../../index.php?click=student&id=1');
            } 
            else 
               {
               echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
          }
      }
      else 
            {
            echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
            }
    }
?>