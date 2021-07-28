<?php
	$con = mysqli_connect('localhost', 'root', '','wtl');
	if($con->connect_error){
		die('Connection Failed :'.$con->connect_error);
	}
	$sql = "SELECT * FROM booking  ";
	$result = $con->query($sql);
	$con->close(); 
?>
<html lang="en">
<head>
	<title>Status</title>
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
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1">
					<div class="table100-firstcol">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Application NO</th>
								</tr>
							</thead>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1">101</td>
								</tr>
								<tr class="row100 body">
									<td class="cell100 column1">102</td>
										
								</tr>
						</table>
					</div>
					
					<div class="wrap-table100-nextcols js-pscroll">
						<div class="table100-nextcols">
							<table>
								<thead>
									<tr class="row100 head">
										<th class="cell100 column2">Room</th>
										<th class="cell100 column2">Date</th>
										<th class="cell100 column3">Application Status</th>
									</tr>
								</thead>
								<tbody>
									<?php   // LOOP TILL END OF DATA 
                						while($rows=$result->fetch_assoc())
                						{
             						?>
									<tr class="row100 body">
										<td class="cell100 column2"><?php echo $rows['room'];?></td>
										<td class="cell100 column3"><?php echo $rows['dt'];?></td>
										<td class="cell100 column4"><?php echo $rows['status'];?></td>
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