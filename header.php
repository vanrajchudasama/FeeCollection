<html>

<head>
    <title>Fee Collection System</title>
    <link rel="stylesheet" href="css/bootstrap.min">
    <link rel="stylesheet" href="css/sidebar.css">
	
</head>

<body>
    <div class="wrapper">

        <!-- Image and text -->
        <nav class="navbar sticky-top navbar-light bg-white shadow ">

            <a class="navbar-brand"  href="index.php" style="color: #660066;">
                <img src="img/logo2.png" width="70" height="30" class="d-inline-block align-top mr-3" alt="">
                Fee Collection System
            </a>
            <div class="mr-2"><button type="button" class="btn btn-login" onmouseover="personImg()" onmouseout="personimg()">
			<img class="res" title=" Login / Register" id='person'  height="25px" width="25px" src="img/iconset/person.png">
			My Account</button></div>

        </nav>


        <div id="sidebar" class="shadow">
            <div class="list"></div>
            <div class="list">
				<div class="item"><a href="index.php"
                        style="background:#660066;color:#fff;border-bottom: 1px solid #fff;" class="d-block">
						<i style="margin-right: 10px;line-height: 0px;text-align: center;">
                        <img src="img/iconset/home.png"  id='home' alt="" height="25px" width="25px" class="img-fluid ">
						</i>
                        <span>Home</span>
                    </a>
                </div>
                <div class="item"><a href="AddDepartment.php" class="d-block" onmouseover="deptImg()" onmouseout="deptimg()">
						<i style="margin-right: 7px;line-height: 0px;text-align: center;">
                        <img src="img/iconset/dept.png"  id='dept' alt="" height="25px" width="25px" class="img-fluid ">
						</i>
                        <span>Add Department</span>
                    </a>
                </div>
                <div class="item"><a href="AddClass.php" onmouseover="bigImg()" onmouseout="bigimg()" class="d-block">
					<i style="margin-right: 10px;line-height: 0px;text-align: center;">
                        <img src="img/iconset/class.png"  id='class' alt="" height="25px" width="25px" class="img-fluid ">
                    </i>
                        <span>Add Class</span>
                    </a>
                </div>
                <div class="item"><a href="StudentRegister.php" class="d-block" onmouseover="studentImg()" onmouseout="studentimg()">
					<i style="margin-right: 10px;line-height: 0px;text-align: center;">
                        <img src="img/iconset/student.png"  id='student' alt="" height="25px" width="25px" class="img-fluid ">
                    </i>
                        <span>Add Student</span>
                    </a>
                </div>
                <div class="item"><a href="#" class="d-block" onmouseover="feeImg()" onmouseout="feeimg()">
					<i style="margin-right: 10px;line-height: 0px;text-align: center;">
                        <img src="img/iconset/fee.png"  id='fee' alt="" height="25px" width="25px" class="img-fluid ">
                    </i>
                        <span>Fee</span>
                    </a>
                </div>
            </div>
        </div>