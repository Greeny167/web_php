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
        else if ($temp == 'account') {
            include ('./modules/account/listAccount.php');
        }
        else if ($temp == 'addAccount') {
            include ('./modules/account/addAccount.php');
        }
        else {
           // include ('index.php');
        }
    ?>
</div>