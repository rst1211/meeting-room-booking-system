<?php
	session_start();
	$con = mysqli_connect('localhost', 'root', '','wtl');
	if($con->connect_error){
		die('Connection Failed :'.$con->connect_error);
	}
	$sql = "SELECT * FROM booking  ";
	$result = $con->query($sql);
	 if($_SERVER["REQUEST_METHOD"]== "POST"){
		//print_r($_POST); 
		//if(isset($_POST['select'])){	
		//print_r($_POST['select']);
	//}
	 	$id='1';
	 	$select=$_POST['select'];
	 	//$_SESSION['status']='$select';
		$query1 ="UPDATE booking set status='$select'where dt='2021-06-06'";
		//$query2="SELECT * FROM booking where id='1' ";
		$rs = $con->query($query1);
		if(!$rs){
			echo"Something went wrong";
		}else{
			echo"Your response has been sent successfully.";
		}
	
}
	$con->close(); 

?>
<html lang="en">
<head>
	<title>HOD</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/style_status.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/v4-shims.css">
</head>

<script type="text/javascript">
	function toggleSidebar(ref){
  		document.getElementById("sidebar").classList.toggle('active');
}
</script>
<body>
	<div class="row">
					<div id="sidebar">
  						<div class="toggle-btn" onclick="toggleSidebar(this)">
    						<span></span>
    						<span></span>
    						<span></span>
  						</div>  
  					<div class="list">
    				<div class="item">
    					<a href="login.php">Home</a>
    				</div>
    				<div class="item">
    					<a href="changepass.html">Change Password</a>
    				</div>
    				<div class="item">
    					<a href="login.php">Log Out</a>
    				</div>
  					</div>
		</div>
		
		</div>
		<form method="POST">
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1">
					<div class="table100-firstcol">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Application Number</th>
								</tr>
							</thead>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1">
										<br><br><br>101</td>
										
								</tr>
									<tr class="row100 body">
									<td class="cell100 column1">
										<br><br><br>102</td>
										
								</tr>
									<!--tr class="row100 body">
									<td class="cell100 column1">
										<br><br><br>103</td>
										
								</tr-->
							</tbody>
						</table>
					</div>
					
					<div class="wrap-table100-nextcols js-pscroll">
						<div class="table100-nextcols">
							<table>
								<thead>
									<tr class="row100 head">
										<th class="cell100 column2">Meeting Room</th>
										<th class="cell100 column2">Description</th>
										<th class="cell100 column3">Date</th>
										<th class="cell100 column3">From</th>
										<th class="cell100 column3">To</th>
										<th class="cell100 column5">Approve/deny</th>
										<th class="cell100 column5">Send</th>
									</tr>
								</thead>
								<tbody>
									<?php   // LOOP TILL END OF DATA 
                						while($rows=$result->fetch_assoc())
                						{
                							
										?>
									<tr class="row100 body">
										
										<td class="cell100 column3"><?php echo $rows['room'];?></td>
										<td class="cell100 column2"><?php echo $rows['description'];?></td>
										<td class="cell100 column3"><?php echo $rows['dt'];?></td>
										<td class="cell100 column3"><?php echo $rows['e_from'];?></td>
										<td class="cell100 column3"><?php echo $rows['e_to'];?></td>
										<!--td class="cell100 column5"><button type="button" value="approve"class="btn btn-success"><i class="far fa-check-square"></i></button>
            							<button type="button" value="denied"class="btn btn-danger"><i class="fas fa-times"></i></button-->
										<td class="cell100 column3"><input type="radio" class="radio" id="approve" name="select" value="approve">
                                		<label for="hod">Approve :</label>
                                		<input type="radio" class="radio" id="deny" name="select" value="deny">
                                		<label for="hod">Deny :</label></td>
                                		<td class="cell100 column3"><button type="submit" name="submit"class="btn btn-primary">Send</button></td>
									</tr>

									<?php
									
               							 }
             						?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>


	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})

			$(this).on('ps-x-reach-start', function(){
				$(this).parent().find('.table100-firstcol').removeClass('shadow-table100-firstcol');
			});

			$(this).on('ps-scroll-x', function(){
				$(this).parent().find('.table100-firstcol').addClass('shadow-table100-firstcol');
			});

		});

		
		
		
	</script>

	<script src="js/main.js"></script>

</body>
</html>