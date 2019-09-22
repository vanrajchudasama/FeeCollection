<?php include("header.php"); ?>

  <div class="main-content mt-2">
		<div class="container col-4">
			<div id="sidebar">
				
			</div>
		</div>
            <div class="container col-8">

	<div class="row justify-content-center mt-3">
					
                    <div class="col-8 p-5 shadow mb-5">
                        <div class="h2 mb-4 display-4" style="color:#660066;">Class Entry</div>
                        <hr class=" b-5" style="height:2px;background: #660066;" />
                        <form method="post" action="StudentRegister.php">
							<div class="form-group p-0 col-4">
							 <label>Select Department</label>
							<select class="custom-select" onchange="reload()" name='dept' readonly>
									<option value="1">Select Department</option>
							</select>
							</div>
                            <div class="form-group p-0 col-4">
                                <label>Class name</label>
                                <input type="text" class="form-control" placeholder="Class name">

                            </div>
							 <hr class=" b-5" style="height:2px;background: #660066;" />
							 <div class="form-row float-right">
                                <button type="submit" name='Student' class="btn" style="background: #660066;color:#fff;">Submit</button>
                            </div>
							 </form>
                    </div>
                </div>
            </div>
        </div>
       <?php include("footer.php"); ?>	