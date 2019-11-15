<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Information</title>
    <link rel="stylesheet" type="text/css" href="../css/user-info.css">
    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body style="background-size: auto 1800px">
    <!--header && footer-->
    <?php
        include ('header.php');
        include ('footer.php');
    ?>

    <div class='content'>
    <div class="user_sidebar">
			<div class="s_tittle"><img src="../img/avt.png" alt="avata" height="60px" width="60px"><i>username</i></div>
			<br>
			<ul class="menu_user">
				<li class="info"><a href="./user-info.php"><b>Profile</b></a>
					<ul class="us-item">
						<li><a href="./user-info-edit.php">Edit Profile</a></li>
						
						<li><a href="./user-info-password.html">Change Password</a></li>
					</ul>
				</li>
				
				<li class="list"><a href="user-list.html"><b>List</b></a>
					<ul class="us-item">
						<li><a href="#">Courses</a></li>
						
						<li><a href="#">Class</a></li>
						
						<li><a href="#">Teacher</a></li>
						
						<li><a href="#">Student</a></li>
					</ul>
				</li>
				
				<li class="KQ"><a href="#"><b>Learning Outcome</b></a>
					<ul class="us-item">
						<li><a href="#">Courses</a></li>
						
						<li><a href="#">Class</a></li>
						
						<li><a href="#">Student</a></li>
					</ul>
				</li>
				
				<li class="logout"><a href="#"><b>Log Out</b></a></li>
			</ul>
		</div>
		<div class="info_ ">
			<div class="s_tittle"><i>Profile</i></div>
			<div class="ul_basic_info">
				<div class="label_ul"><span class="label_list">Basic Infomation</span></div>
				<ul class="ul_info">
					<li class="li_username row">
						<div class="ul_info_1"><span class="label_info col-md-5">Username</span></div>
						<div class="ul_info_2">abc_123</div>
					</li>
					<li class="li_email row">
						<div class="ul_info_1"><span class="label_info col-md-5">E-mail</span></div>
						<div class="ul_info_2">sdfg@fgh.com</div>
					</li>
					<li class="li_Hoten row">
						<div class="ul_info_1"><span class="label_info col-md-5">Full name</span></div>
						<div class="ul_info_2">abc nguyen</div>
					</li>
					<li class="li_birth row">
						<div class="ul_info_1"><span class="label_info col-md-5">Date of birth</span></div>
						<div class="ul_info_2">10/10/2000</div>
					</li>
					<li class="li_gender row">
						<div class="ul_info_1"><span class="label_info col-md-5">Gender</span></div>
						<div class="ul_info_2">male</div>
					</li>
					<li class="li_addr row">
						<div class="ul_info_1"><span class="label_info col-md-5">Address</span></div>
						<div class="ul_info_2">50 bis hahaha hiihihih</div>
					</li>
					<li class="li_phone row">
						<div class="ul_info_1"><span class="label_info col-md-5">Phone</span></div>
						<div class="ul_info_2">0909009000</div>
					</li>
				</ul>
			</div>
			<div class="ul_info_4teacher">
				<div class="label_ul"><span class="label_list">About Job</span></div>
				<ul class="ul_info">
					<li class="li_nvl row">
						<div class="ul_info_1"><span class="label_info col-md-5">Begin</span></div>
						<div class="ul_info_2">30/10/2018</div>
					</li>
					<li class="li_achievement row">
						<div class="ul_info_1"><span class="label_info col-md-5">Certificate</span></div>
						<div class="ul_info_2">IELTS 9.0; TOEIC 900</div>
					</li>
					
				</ul>
			</div>
			<div class="ul_Login_activity">
				<div class="label_ul"><span class="label_list">Login Activity</span></div>
				<ul class="ul_info">
					<li class="li_First">
						<div class="ul_info_1"><span class="label_info col-md-5">First access to site</span></div>
						<div class="ul_info_2">30/10/2018, 6:30 AM</div>
					</li>
					<li class="li_Last">
						<div class="ul_info_1"><span class="label_info col-md-5">Last access to site</span></div>
						<div class="ul_info_2">27/10/2019, 6:31 AM</div>
					</li>
					
				</ul>
			</div>
			
		</div>
    </div>
</body>
</html>