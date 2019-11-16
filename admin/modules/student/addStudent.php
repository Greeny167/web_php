
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>



<form class="form-add-student" action='./modules/student/control.php' method='POST'>
    <table>
        <tr colspan=2> <strong>ADD NEW STUDENT</strong> </tr>
        <tr>
            <td>ID</td>
            <td><input type="text" name='txtUsername' placeholder='std_ngocmn' required></td>
        </tr>
        
        <tr>
            <td>NAME</td>
            <td><input type="text" name='txtFullname' placeholder='Nguyen Van A'></td>
        </tr>
        <tr>
            <td>Date of birth</td>
            <td><input type="date" name='txtDob'></td>
        </tr>
        <tr>
            <td>Sex</td>
            <td>
                <label for="female"><input type="radio" name='rbSex' id='female'>Female</label>
                <label for="male"><input type="radio" name='rbSex' id='male'>Male</label>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name='txtEmail' placeholder='example@gmail.com'></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name='txtAddr' placeholder='HCM City'></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="number" name='txtPhone' placeholder='012345686'></td>
        </tr>
        <tr>
            <td></td>
            <td colspan=2>
                <button name='btnSubmitAdd'><strong>Submit</strong></button></td>
        </tr>
    </table>
</form>
