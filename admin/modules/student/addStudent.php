
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>



<form class="form-add-student">
    <table>
        <tr colspan=2> <strong>ADD NEW STUDENT</strong> </tr>
        <tr>
            <td>ID</td>
            <td><input type="text" name='user-id' placeholder='std_ngocmn'></td>
        </tr>
        
        <tr>
            <td>NAME</td>
            <td><input type="text" name='user-name' placeholder='Nguyen Van A'></td>
        </tr>
        <tr>
            <td>Date of birth</td>
            <td><input type="date" name='user-dob'></td>
        </tr>
        <tr>
            <td>Sex</td>
            <td>
                <label for="female"><input type="radio" name='user-sex' id='female'>Female</label>
                <label for="male"><input type="radio" name='user-sex' id='male'>Male</label>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name='user-email' placeholder='example@gmail.com'></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name='user-addr' placeholder='HCM City'></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="number" name='user-phone' placeholder='012345686'></td>
        </tr>
        <tr>
            <td></td>
            <td colspan=2>
                <button name='add-student-submit'> <strong>Submit</strong> </button></td>
        </tr>
    </table>
</form>
