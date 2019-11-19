
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>

<?php
     $sql1 = "SELECT * FROM `class`, `course`, `teacher`
                WHERE CLASS_ID ='$_GET[id]'
                  AND class.COURSE_ID = course.COURSE_ID
                  AND class.TEACHER = teacher.USERNAME";
     $sql2 = "SELECT * FROM `course`";
     $sql3 = "SELECT * FROM  `teacher`";

     $result1 = $conn->query($sql1);
     $row1 = $result1->fetch_assoc();

     $result2 = $conn->query($sql2);
     $row2 = $result2->fetch_assoc();

     $result3 = $conn->query($sql3);
     $row3 = $result3->fetch_assoc();
?>
<form class="form-edit-class" 
     action='./modules/class/controlClass.php?id=<?php echo $row1['CLASS_ID'];?>' 
        enctype="multipart/form-data" method='POST'>
    <table> 
        <tr colspan=2> <strong>EDIT CLASS</strong> </tr>
        <tr>
            <td>Class ID</td>
            <td><input disabled type="text" name='txtClassID' value='<?php echo $row1['CLASS_ID']?>' required></td>
        </tr>
        <tr>
            <td>Class Name</td>
            <td><input type="text" name='txtClassName' value='<?php echo $row1['CLASS_NAME']?>'  required></td>
        </tr>
        <tr>
            <td>Course</td>
            <td>
            <select name="selCourse" id="selCourse">     
            <option value='<?php echo $row1['COURSE_ID']?>'><?php echo $row1['COURSE_NAME']?>
        </option>     
<?php
    while ($row2 = $result2->fetch_assoc())
    {
    ?>
        <option value="<?php echo $row2['COURSE_ID']?>"><?php echo $row2['COURSE_NAME']?></option>
<?php
    }

    ?>
        </select></td>
        </tr>
        <tr>
            <td>Teacher</td>
            <td>
            <select name="selTeacher" id="selTeacher">    
            <option value='<?php echo $row1['USERNAME']?>'><?php echo $row1['FULLNAME']?>
        </option>                
<?php
    while ($row3 = $result3->fetch_assoc())
    {
    ?>
        <option value="<?php echo $row3['USERNAME']?>"><?php echo $row3['FULLNAME']?></option>
<?php
    }
    ?>
        </select></td>
        </tr>
        <tr>
            <td>Info</td>
            <td><input type="file" name='fileInfo' accept="text/plain"></td>
        </tr>
        <tr>
            <td></td>
            <td style='font-size: 15px; padding: 5px'>Accept .txt file only</td>
        </tr>
        <tr>
            <td></td>
            <td colspan=2>
                <button name='btnSubmitEdit'><strong>Submit</strong></button></td>
        </tr>
    </table>
</form>
