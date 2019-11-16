<div class='content'>
    <?php
        if (isset($_GET['click']))
        {
            $temp = $_GET['click']; // temp chứa những gì có trong biến menu

        } else {
            $temp = '';
        }

        if ($temp == 'student') {
            include ('./modules/student/listStudent.php');
        }
        else if ($temp == 'addStudent') {
            include ('./modules/student/addStudent.php');
        }
        else if ($temp == 'editStudent') {
            include ('./modules/student/editStudent.php');
        }

        else if ($temp == 'account') {
            include ('./modules/account/listAccount.php');
        }
        else if ($temp == 'editAccount') {
            include ('./modules/account/editAccount.php');
        }
        else {
        }
    ?>
</div>