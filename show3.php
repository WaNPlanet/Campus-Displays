<?php 

include('config.php');

// check GET request id param
if(isset($_GET['id'])){
	
	// escape sql chars
	$id = mysqli_real_escape_string($conn, $_GET['id']);
 
 $sql = "SELECT * FROM complaints INNER JOIN complaint2 ON complaints.id = complaint2.id";  
 

		// get the query result
	$result = mysqli_query($conn, $sql);

	// fetch result in array format
	$complaint = mysqli_fetch_assoc($result);

	mysqli_free_result($result);
	mysqli_close($conn);

}


?>


<!DOCTYPE html>
<html>
<body>
	<style type="text/css">
		
body {
  background: #F1F3FA;
}

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 460px;
}
ul li ul.dropdown{
	width: 100%;
	display: none;
	z-index: 999;
	list-style: none;
}
ul li:hover ul.dropdown{
	display: block;
}

.backBtn{
  display: flex;
  align-items: center;
  justify-content: center;
  height: 45px;
  max-width: 200px;
  width: 100%;
  border: none;
  outline: none;
  color: #fff;
  border-radius: 5px;
  margin: 25px 0;
  background-color: #5a7391;
  transition: all 0.3s linear;
  cursor: pointer;
  margin-left: 190px;
}
.backBtn{
	font-size: 14px;
	font-weight: 400;
}
 .backBtn{
	margin-right: 14px;
}

	</style>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>


<?php if($complaint): ?>
<div class="container">
	
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="https://static.change.org/profile-img/default-user-profile.svg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php echo $complaint['Sname']; ?> &ensp; <?php echo $complaint['Fname']; ?>
						&ensp; <?php echo $complaint['Onames']; ?>
					</div>
					<div class="profile-usertitle-job">
						<?php echo $complaint['RegNumb']; ?><br>
						<?php echo $complaint['Level']; ?><br>
						<?php echo $complaint['Tel']; ?>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm"><?php echo $complaint['OldRegNumb']; ?></button>
					<button type="button" class="btn btn-danger btn-sm"><?php echo $complaint['Program']; ?></button>
					<br>
					<?php echo $complaint['Date']; ?>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
							<ul class="dropdown">

						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							<?php echo $complaint['NameOfDepartment']; ?> </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
							<?php echo $complaint['Faculty']; ?> </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							<?php echo $complaint['CourseCode']; ?></a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							<?php echo $complaint['CourseTitle']; ?></a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							<?php echo $complaint['NameOfLecturer']; ?></a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							<?php echo $complaint['YearInWhichPaperWasTaken']; ?></a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							<?php echo $complaint['SemesterInWhichPaperWasTaken']; ?></a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							<?php echo $complaint['SessionInWhichPaperWasTaken']; ?></a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							<?php echo $complaint['Grade']; ?></a>
						</li>
						
						</li>
						
						
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content" style="background: #5a7391;color:#fff; justify-content: center;text-align: center;font-weight: 100;font-size: 20px;">
			    
			   <?php echo $complaint['NatureOfComplaint']; ?>
            </div>
		</div>

	</div>
	<?php else: ?>
			<h5>No such complaint exists.</h5>
		<?php endif ?> 

</div>
                    
           
	