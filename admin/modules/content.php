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
        else if ($temp == 'addAccount') {
            include ('./modules/account/addAccount.php');
        }
        else if ($temp == 'editAccount') {
            include ('./modules/account/editAccount.php');
        }
        else if ($temp == 'teacher') {
            include ('./modules/teacher/listTeacher.php');
        }
        else if ($temp == 'addTeacher') {
            include ('./modules/teacher/addTeacher.php');
        }
        else if ($temp == 'editTeacher') {
            include ('./modules/teacher/editTeacher.php');
        }
        else if ($temp == 'course') {
            include ('./modules/course/listCourse.php');
        }
        else if ($temp == 'addCourse') {
            include ('./modules/course/addCourse.php');
        }
        else if ($temp == 'editCourse') {
            include ('./modules/course/editCourse.php');
        }
    

        else {
        }
    ?>
</div>