<?php  require_once("include/DB.php");?>
<?php  require_once("include/Sessions.php");?>
<?php  require_once("include/Functions.php");?>
<!-- This funtion👇will direct u 2 login page-->

<?php Confirm_Login(); ?>
<?php
 if (isset($_POST["Submit"])){
 	$Username=($_POST["Username"]);
 	$Password=($_POST["Password"]);
 	$ConfirmPassword=($_POST["ConfirmPassword"]);

date_default_timezone_set("Asia/Karachi");
$CurrentTime=time();
$DateTime=strftime("%B-%d-%y %H:%M:%S",$CurrentTime);
$DateTime;
$Admin=$_SESSION["Username"];

if (empty($Username) || empty($Password) ||empty($ConfirmPassword)) {
	$_SESSION["ErrorMessage"] ="All Fields must be filled Out";
	Redirect_to("Admins.php");
  }
 elseif (strlen($Password)<4){
	$_SESSION["ErrorMessage"] ="At least 4 character of Password are Required";
	Redirect_to("Admins.php");
}
elseif ($Password!==$ConfirmPassword){
	$_SESSION["ErrorMessage"] ="Password/ConfirmPassword does not match";
	Redirect_to("Admins.php");
  }
  $sql = " INSERT INTO registration(datetime, username, password, addedby)VALUES (?, ?, ?, ?)";
  		$stmt = mysqli_stmt_init($Connection);
  		if (!mysqli_stmt_prepare($stmt, $sql)) {
  			$_SESSION["ErrorMessage"] ="Category Fail To Add!";
  			Redirect_to("Admins.php");
         
   			
  		  }
      else {
       mysqli_stmt_bind_param($stmt, "ssss", $DateTime,	$Username, $Password, $Admin);
         mysqli_stmt_execute($stmt);
          	$_SESSION["SuccessMessage"] ="Admin Added successfully";
            			Redirect_to("Admins.php");


         }

		}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Manage Admins</title>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<script  src="js/jquery-3.7.0.min.js"></script>
	<script  src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/adminstyle.css">

	<style>
		.Fieldinfo{
			color: rgb(251, 174, 50);
			font-family: Bitter,Georgie,"Times New Roman",Times,serif;
			font-size: 1.2em;
		}

 </style>
</head>
<body>
  <div class="container-fluid">
  <div class="row">

  	    <div class="col-sm-2">
  	  	<!-- <h1 >Yajfatech Company</h1> -->
  	    <ul id="side_menu"  class="nav nav-pills nav-stacked">
  	    	<li> <a href="dashboad.php"><span class="glyphicon glyphicon-th"></span>
  	    	&nbsp;Dashboad</a></li>
  	    	<li> <a href="AddNewPost.php">	<span class="glyphicon glyphicon-list-alt"></span> 
  	    	&nbsp;Add new Post</a></li>
  	    	<li> <a href="categories.php">	<span class="glyphicon glyphicon-tags"></span>
  	    	&nbsp;Categories</a></li>
  	    	<li class="active"> <a href="Admins.php">	<span class="glyphicon glyphicon-user"></span>
  	    	&nbsp;Manage Admin</a></li>
  	    	<li >	<a href="Admins.php"><span class="glyphicon glyphicon-comment"></span> 
  	    	&nbsp;Comments</a></li>
  	    	<li > <a href="#">	<span class="glyphicon glyphicon-equalizer"></span>
  	    	&nbsp;Live Block</a></li>
  	    	<li> <a href="#">	<span class="glyphicon glyphicon-log-out"></span>
  	    	&nbsp;logout</a></li>
  	    </ul>

  	     </div>
  	    <div class="col-sm-10">

  	    	<h1>Manage Admins Access</h1>
  	    	 <div><?php echo  Message ();
  	    	 echo SuccessMessage(); 
  	    	 ?>
  	    	</div>

  	    	<div>
  	    		<form action="Admins.php" method="post">
  	    		 <fieldset>
  	    		 	<div class="form-group">
  	    		 	 <label for="Username"> <span class="Fieldinfo">Username:</span></label>
  	    		 	 <input class="form-control" type="text" name="Username" id="Username" placeholder="Username" >
  	    	</div>
  	    		<div class="form-group">
  	    		 	 <label for="Password"> <span class="Fieldinfo">Password:</span></label>
  	    		 	 <input class="form-control" type="Password" name="Password" id="Password" placeholder="Password" >
  	    	</div>
  	    		<div class="form-group">
  	    		 	 <label for="ConfirmPassword"> <span class="Fieldinfo">Confirm-Password:</span></label>
  	    		 	 <input class="form-control" type="Password" name="ConfirmPassword" id="ConfirmPassword" placeholder="Retype-Password">
  	    	</div>
  	    	<br>
  	    		 	<input class="btn btn-success btn-block" type="submit" name="Submit" value="Add New Admins">
  	    		 </fieldset>
  	    		 <br>
  	    	</form>
  	    	</div>
  	    	<div class="table-responsive">
  	    		
  	    		<table class="table table-hover">
  	    			<tr class="info">
  	    				<th>Sr No.</th>
  	    				<th>Date & Time</th>
  	    				<th>Category Name</th>
  	    				<th>Added By</th>	
  	    				<th>Action</th>			
  	    			</tr>

<?php

	$sql = "SELECT * FROM registration ORDER BY id desc";
	$stmt = mysqli_stmt_init($Connection);
	$SrNo=0;
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		 $_SESSION["ErrorMessage"] ="There is sql error";
		 Redirect_to("categories.php");
	}
else {
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			while($DataRows = mysqli_fetch_assoc($result)) {
				$Id=$DataRows["id"];
				$DateTime=$DataRows["datetime"];
				$Username=$DataRows["username"];
				$Admin=$DataRows["addedby"];
				$SrNo++;

	
?>
<tr class="active">
	<td> <?php echo $SrNo; ?></td>
	<td><?php  echo $DateTime; ?></td>
	<td><?php  echo $Username; ?></td>
	<td><?php  echo $Admin; ?></td>
		<td><a href="DeleteAdmin.php?id=<?php echo $Id; ?>">
			<span class="btn btn-danger">Delete</span>
		</a> </td>


	
</tr>
  	    		<?php 	} } ?>
  	    		</table>
  	    	</div>
  	 	  <!-- </div>  -->
</div>
</div>
 

</body><div id="Footer">
	<hr><p> Theme By | <em>JIKAN DASHE</em> | &copy;1990-2023  --- All rigth reserved</p>
	<a style="color: white; text-decoration: none; cursor: pointer; font-weight: bold;" href="http://jikandashe.com">
	<p> this site is only used for reserch purpose and only <br> $trade; jikandashe.com; $trade skills </a>
			<!-- <p class="fab fa-facebook-f"> Facebook</p> -->
</div>

<div style="height: 10px; background: #27AAE1;"> </div>

</html>