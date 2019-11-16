
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>



<form class="form-add-user" action='./modules/account/control.php' method='POST'>
    <table>
        <tr colspan=2> <strong>ADD NEW STUDENT</strong> </tr>
        <tr>
            <td>USERNAME</td> 
            <td><input type="text" name='txtUsername' placeholder='std_ngocmn' required></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input type="text" name='txtPassword' placeholder='012345686'></td>
        </tr>
        <tr>
            <td>ROLE</td>
            <td><input type="text" name='txtRoleID' placeholder='role01'></td>
        </tr>
        <tr>
            <td>CREATE DATE</td>
            <td><input type="date" name='txtCreateDate' ></td>
        </tr>
        <tr>
            <td>PROFILE PICTURE</td>
            <td><input type="file" name='fileAvt' ></td>
        </tr>
        <tr>
            <td></td>
            <td colspan=2>
                <button name='btnSubmitAdd'><strong>Submit</strong></button></td>
        </tr>
    </table>
</form>
