<style>
    td {
       border: 1px solid #f29393;
       max-width = max-content;
       text-align: center;
        padding: 8px;
    }
</style>
 
<?php 
    $sql = 'SELECT * FROM `class` WHERE 1';
    $result = $conn->query($sql);
?>
<a href="./index.php?click=addClass&ac=add">
      <button name='btnAddClass'>ADD NEW CLASS</button>
</a><br><br>
<div class='class-info'></div>
    <table>
        <tr>
            <td>CLASS ID</td>
            <td>CLASS NAME</td>
            <td>TEACHER</td>
            <td>COURSE ID</td>
            <td>INFO</td>
            <td colspan=2>CONTROL</td>
        </tr>
        <?php
        $i = 0;
        while ($row = $result->fetch_assoc()) //Trong khi con dong
        {
            ?>
        <tr>
            <td><?php echo $row['CLASS_ID'] ?></td>
            <td><?php echo $row['CLASS_NAME'] ?></td>
            <td><?php echo $row['TEACHER'] ?></td>
            <td><?php echo $row['COURSE_ID'] ?></td>
            <td><?php echo $row['INFO'] ?></td>
            
            <td style='display: flex'>  
                <a href="./index.php?click=editClass&ac=edit&id=<?php echo $row['CLASS_ID']?>">
                    <button name='btnEditClass'>Edit</button>
                    </a>                 
                </td>
                <td>
                  <button name='btnDelClass'>
                    <a href="./modules/class/controlClass.php?id=<?php echo $row['CLASS_ID']?>">
                        Delete
                    </a></button>
            </td>
        </tr> 
        <?php 
        $i++;
        } ?>     
    </table>

   
