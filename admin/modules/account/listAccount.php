<style>
    td {
       border: 1px solid #f29393;
       max-width = max-content;
       text-align: center;
        padding: 8px;
    }
</style>
 
<?php
    $sql = 'SELECT * FROM `account` WHERE 1';
    $result = $conn->query($sql);
?>
<div class='account-info'></div>
    <table>
        <tr>
            <td>USERNAME</td>
            <td>PASS</td>
            <td>ROLE ID</td>
            <td>CREATE DATE</td>
            <td>AVATAR</td>
            <td>CONTROL</td>
        </tr>
        <?php
        $i = 0;
        while ($row = $result->fetch_assoc()) //Trong khi con dong
        {
            ?>
        <tr>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['PASS'] ?></td>
            <td><?php echo $row['role_id'] ?></td>
            <td><?php echo $row['create_date'] ?></td>
            <td><img src="modules/uploads/<?php echo $row['AVATAR']?>" alt="avatar" width=70px, height=70px></td>
            <td style='display: flex;' height=74px> 
            <a href="./index.php?click=editAccount&ac=edit&id=<?php echo $row['username']?>">
                 <button  name='btnEditStudent'>Edit</button>
            </a>          
            </td>
        </tr> 
        <?php 
        $i++;
        } ?>     
    </table>

   
