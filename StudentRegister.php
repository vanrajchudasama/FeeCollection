<?php
	include_once("DBConnect/config.php");
	$admission_date;
	$dob;
	$mobilenumber;
	$gender=$fname=$lname=$sername=$email="";
	$success=$unsuccess="";
	$fnameErr=$lnameErr=$sernameErr=$genderErr=$dobErr=$admission_dateErr=$emailErr=$mobilenumberErr="";
	if(isset($_POST['Student'])){
		
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$sername=$_POST['surname'];
		$gender=$_POST['gender'];
		$dob= date('Y-m-d',strtotime(str_replace('-','/', $_POST['dob'])));
		$email=$_POST['email'];
		$mobilenumber=$_POST['mobile'];
        $admission_date= date('Y-m-d',strtotime(str_replace('-','/',$_POST['admission_date'])));
       
		if($fname == ""){
			$fnameErr="Please Enter First Name";
		}
		if($lname == ""){
			$lnameErr="Please Enter Last Name";
		}
		if($sername == ""){
			$sernameErr="Please Enter Surname";
		}
		if($email == ""){
			$emailErr="Please Enter Email Address";
		}
		if($dob == "dd-mm-yyyy"){
			$dobErr="Please Select Date of Birth";
		}
		if($gender == ""){
			$genderErr="Please Select Gender";
		}
		if($mobilenumber ==""){
			$mobilenumberErr="Please Enter Mobile Number..!";
		}
		if($admission_date == ""){
			$admission_dateErr="Please Select Admission Date";
		}
	 $lenght=strlen($mobilenumber);
	
		if($fname != "" && $lname != "" && $sername != "" && $lenght<9 && $lenght>11 && $dob != "" && $email != "" && $mobilenumber != "" && $admission_date != ""){
			$sql = "INSERT INTO student(Fname,Lname,surname,dob,Gender,Phone_no,Admission_date) VALUES(?,?,?,?,?,?,?)";
			$stminsert = $db->Prepare($sql);
			$result = $stminsert->execute([$fname,$lname,$sername,$dob,$gender,$mobilenumber,$admission_date]);
			
			if($result){
				
				$success = 'Successfully Insert Record '.$fname.' ..!';
			}
			else{
				$unsuccess = 'Not Insert Record..!';
			}
		}
		else{
				$unsuccess = 'Not Insert Record..!';
			}
	}								
?>
<?php include("header.php"); ?>

<div class="main-content mt-2">

    <div class="container col-8">


        <?php
					if($success == ""){
						
					}
					else{
						echo '<div class="alert alert-success"  role="alert">';
						echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					  </button>';
						echo $success;
						echo '</div>';
					}
					?>

        <div class="row justify-content-center mt-3">

            <div class="col-8 p-5 shadow  rounded mb-5">
                <div class="h2 mb-4 display-4" style="color:#660066;">Student Entry</div>
                <hr class=" b-5" style="height:2px;background: #660066;" />
                <form method="post" action="StudentRegister.php">
                    <div class="form-group p-0 col-4">
                        <label>Enrollment No</label>
                        <input type="text" class="form-control" placeholder="Enrollment No">

                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label>First Name</label>
                            <input type="text" name='fname' maxlength="25" class="form-control"
                                placeholder="First name">
                            <?php 
										if(empty($fnameErr)){}
											else{
										echo '
									<div class=" text-danger">';
                                   	echo $fnameErr;
									echo '</div>';}
									?>
                        </div>
                        <div class="form-group col">
                            <label>Last Name</label>
                            <input type="text" name='lname' maxlength="25" class="form-control" placeholder="Last name">
                            <?php 
										if(empty($lnameErr)){}
											else{
										echo '
									<div class=" text-danger">';
                                   	echo $lnameErr;
									echo '</div>';}
									?>
                        </div>
                        <div class="col">
                            <label>Surname</label>
                            <input type="text" name='surname' maxlength="25" class="form-control" placeholder="Surname">
                            <?php 
										if(empty($sernameErr)){}
											else{
										echo '
									<div class=" text-danger">';
                                   	echo $sernameErr;
									echo '</div>';}
									?>
                        </div>
                    </div>

                    <div class="form-group col-6 p-0">
                        <label>Date Of Birth</label>
                        <div class='input-group'>
                            <input type='date' class="form-control" name='dob' />

                        </div>
                        <?php
									if($dobErr != ""){
										echo '<div class=" text-danger">';
										echo $dobErr;
										
										echo '</div>';
									}
									
									?>
                    </div>

                    <div class="form-group">
                        <label class="mr-5">Gender</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="gender" class="custom-control-input"
                                value="M" checked>
                            <label class="custom-control-label" for="customRadioInline1">Male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="gender" class="custom-control-input"
                                value="F">
                            <label class="custom-control-label" for="customRadioInline2">Female</label>

                        </div>
                        <?php
									if($genderErr != ""){
										echo '<div class=" text-danger">';
										echo $genderErr;
										echo '</div>';
								}
									?>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label>Mobile No.</label>
                            <input type="number" name='mobile' maxlength="10" class="form-control"
                                placeholder="Mobile No" />
                            <?php
									
									if(isset($_POST['Student'])){
										if($mobilenumberErr != ""){
											echo '<div class="text-danger">';
											echo $mobilenumberErr;
											echo '</div>';
										
											$_POST['mobile']=$mobilenumber;
										}
										else if($lenght<10 || $lenght>12){
											echo '<div class="text-danger">';
											echo "Please Enter Valid Mobile Number";
											echo '</div>';
											
										}
									
									}
									?>
                        </div>

                        <div class="form-group col">
                            <label>Email Id</label>
                            <input type="email" name='email' maxlength="35" class="form-control"
                                placeholder="example@gmail.com">
                            <?php
									if($emailErr != ""){
										echo '<div class="text-danger">';
										echo $emailErr;
										echo '</div>';
									}
									?>
                        </div>
                    </div>
                    <!-- <div class="form-froup p-0 col-6">
                                <label>Cast</label>
                                <input class="form-control" type="text" placeholder="Cast" />
                            </div> -->
                    <div class="form-row mt-3">
                        <div class="form-group  col">

                            <select class="custom-select" onchange="reload()" name='dept' readonly>
                                <option value="1">Select Department</option>
                                <?php
										@$cat=$_GET['cat'];
										
										$sql = "SELECT id,dept_name FROM departments";
										$result = $conn->query($sql);

										if ($result->num_rows > 0) {
  
												while($row = $result->fetch_assoc()) {
													echo "<option>".$row['dept_name']."</option>";
													}
										} else {
										echo "<option value='1'>Department</option>";
	
										}
										
									?>

                            </select>
                        </div>
                        <div class="form-group col">
                            <select class="custom-select" readonly>
                                <option value="1">Select Class</option>
                                <?php
										@//$cat=$_GET['cat']; // Use this line or below line if register_global is off
										
										$sql = "SELECT id,class_name FROM classes WHERE dept_id='"+$row['id']+"'";
										$result = $conn->query($sql);

										if ($result->num_rows > 0) {
  
												while($row = $result->fetch_assoc()) {
													echo "<option>".$row['class_name']."</option>";
													}
										} else {
										
	
										}
									?>
                            </select>

                        </div>
                        <div class="form-group col">
                            <select class="custom-select" readonly>
                                <option selected>Select Semester</option>
                                <option value="1">1st</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-row">

                        <div class="custom-control custom-checkbox mb-3 mr-3">
                            <input class="custom-control-input" name="Course" type="checkbox" id="inlineCheckbox1"
                                value="option1" disabled checked>
                            <label class="custom-control-label" for="inlineCheckbox1">Course Fee</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-3 mr-3">
                            <input class="custom-control-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="custom-control-label" for="inlineCheckbox2">Bus Fee</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customControlValidation1">
                            <label class="custom-control-label" for="customControlValidation1">Hostel Fee</label>

                        </div>
                    </div>
                    <div class="form-group p-0 col-6">
                        <label>Admission Date</label>
                        <div class='input-group date'>
                            <input type='date' name='admission_date' class="form-control" id="datetimepicker1" />
                            <?php
									if($admission_dateErr != ""){
										echo '<div class="text-danger">';
										echo $admission_dateErr;
										echo '</div>';
									}
									?>
                        </div>
                    </div>
                    <hr class="b-5" style="height:2px;background: #660066;" />
                    <div class="form-row float-right">
                        <button type="submit" name='Student' class="btn"
                            style="background: #660066;color:#fff;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>