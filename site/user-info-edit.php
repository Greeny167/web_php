<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Infomation</title>
    <link rel="stylesheet" href="../css/user-info-edit.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
</head>
<body  style="background-size: auto 1800px">
    <?php
        include('header.php');
        include('footer.php');
    ?>
    <div class='content'>
        		
		<div class="user_sidebar">
			<div class="s_tittle"><img src="../img/avt.png" alt="avata" height="60px" width="60px"><i>username</i></div>
			<br>
			<ul class="menu_user">
				<li class="info"><a href="user-info.php"><b>Profile</b></a>
					<ul class="us-item">
						<li><a href="user-info-edit.php">Edit Profile</a></li>
						
						<li><a href="user-info-password.html">Change Password</a></li>
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
				
				<li class="logout"><a href="welcome.html"><b>Log Out</b></a></li>
			</ul>
		</div>
		<div class="info_ ">
			<form class="edit-profile">
			<div class="s_tittle"><i>Edit Profile</i></div>
			<div class="ul_basic_info">
				<div class="label_ul"><span class="label_list">Basic Infomation</span></div>
				<ul class="ul_info">
					<li class="li_username row">
						<div class="ul_info_1"><span class="label_info  col-md-4">Username</span></div>
						<input class="form-input col-md-6" type="text" value="abc_123"  >
					</li>
					<li class="li_email row">
						<div class="ul_info_1"><span class="label_info  col-md-4">E-mail</span></div>
						<input class="form-input col-md-6" type="E-mail" value="sdfg@fgh.com"> 
					</li>
					<li class="li_Hoten row">
						<div class="ul_info_1 "><span class="label_info col-md-4">Full name</span></div>
						<input class="form-input col-md-6" type="text" value="abc nguyen"  >
					</li>
					<li class="li_birth row">
						<div class="ul_info_1 "><span class="label_info col-md-4">Date of birth</span></div>
						<input class="form-input col-md-6" type="Date" value="10/10/2000"  >
					</li>
					<li class="li_gender row">
						<div class="ul_info_1 "><span class="label_info col-md-3">Gender</span></div>
						
						<input class="form-input col-md-2" type="radio" id='male' name="gender" value="Male" checked  /><label for='male'>Male</label>
						<input class="form-input col-md-2" type="radio" id='female' name="gender" value="Female"  /><label for='female'>Female</label>

					</li>
					<li class="li_addr row">
						<div class="ul_info_1 "><span class="label_info col-md-4">Address</span></div>
						<input class="form-input col-md-6" type="text" value="50 bis hahaha hiihihih">
					</li>
					<li class="li_phone row">
						<div class="ul_info_1 "><span class="label_info col-md-4">Phone</span></div>
						<input class="form-input col-md-6" type="Phone" value="0909009000">
					</li>
				</ul>
			</div>
			<div class="ul_info_4teacher">
				<div class="label_ul"><span class="label_list">About Job</span></div>
				<ul class="ul_info">
					<li class="li_nvl">
						<div class="ul_info_1"><span class="label_info col-md-4">Begin</span></div>
						<input class="form-input  col-md-6" type="Date" value="10/30/2018"  >
					</li>
					<li class="li_achievement">
						<div class="ul_info_1"><span class="label_info col-md-4">Certificate</span></div>
						<input class="form-input  col-md-6" type="text" value="IELTS 9.0; TOEIC 900">
					</li>
					
				</ul>
			</div>
			<input type="submit" class="btn-sub " value="Save">
			</form>
		</div>
    </div>
</body>
</html>