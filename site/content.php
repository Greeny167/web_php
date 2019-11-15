<div class='content'>
    <?php
        if (isset($_GET['click']))
        {
            $temp = $_GET['click']; // temp chứa những gì có trong biến menu

        } else {
            $temp = '';
        }

        if ($temp == 'home') {
            include ('site/home.php');
        }
        else if ($temp == 'test')
        {
            include ('site/test-list.php');
        }
        else if ($temp == 'about'){
            include ('site/about.php');
        }
        else if ($temp == 'doing-test') {
            include ('site/doing-test.php');
        }
        else if ($temp == 'test-choosen') {
            include ('site/test-detail.php');
        }
        else {
            include ('site/home.php');
        }
    ?>
</div>