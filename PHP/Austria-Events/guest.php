<?php require_once 'actions/connect.php';
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Vienna Events</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Mina" rel="stylesheet">
	</head>
	<body>
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
  				<div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="#">Vienna Events</a>
				    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse navbar-right">
				      <ul class="nav navbar-nav ">
				      	<li><a href="#home">Home</a></li>
				        <li><a href="#">All</a></li>
			          	<li class="dropdown">
			            	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Type
			            		<span class="caret"></span>
			            	</a>
			            	<ul class="dropdown-menu">
				              <li><a href="cars_locations.php">Concert</a></li>
				              <li><a href="cars_location1.php">Sport</a></li>
				              <li><a href="cars_location2.php">Film</a></li>
				              <li><a href="cars_location3.php">Theater</a></li>
				              <li><a href="cars_location4.php">Cabaret</a></li>
				            </ul>
			          	</li>
			          	<li class="dropdown">
			            	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Time
			            		<span class="caret"></span>
			            	</a>
			            	<ul class="dropdown-menu">
				              <li><a href="cars_locations.php">today</a></li>
				              <li><a href="cars_location1.php">this week</a></li>
				              <li><a href="cars_location2.php">this month</a></li>
				            </ul>
			          	</li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header><!-- /header -->


<!--  ***************    banner    ***************  -->
		<div class="banner">
			<div class="container" id="home">
				<div class="row">
					<div class="main_banner_area text-center">
					
						<h2> We have all events in Vienna</h2>
					
					</div>
				</div>
			</div>
		</div>



<!--  ***************    events    ***************  -->

		<section class="events">
			<div class="container">
				<div class="row">

					<div class=" text-center">
					
						<h2> Events</h2>
					
					</div>
					<table>
						  <tr>
						  	<th>Name</th>
							<th>Image</th>
						    <th>Description</th>
						    <th>Cost</th>
						  </tr>
					<?php
					// Create connection
					$conn = new mysqli($localhost, $username, $password, $dbname);
					// Check connection
					
					$sql = "SELECT * FROM allE";
					$result = mysqli_query($conn, $sql);
							
					while($row = mysqli_fetch_assoc($result)) {

						echo"<tr> 
								<td>". $row["name"] ."</td>
								<td>

									<a href='".$row["urltest"]."'><img src='img/". $row["Image"] ."'></a>
								</td>
							    <td>". $row["description"] ."</td>
							    <td>". $row["cost"] . " € </td>
							</tr>
							";
						    } 
						echo "</table>";

							// Free result set
							mysqli_free_result($result);
							// Close connection
							mysqli_close($conn);
						?> 
					
				</div>
			</div>
		</section><!-- events -->

		<hr>


<!--  ***************    footer Section    ***************  -->
	
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="copyright_text_area">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="single_footer text-right wow zoomIn" data-wow-duration="2s">
								<p>Made by <a href="https://www.linkedin.com/in/ying-qi-4b99b4157/">Ying Qi </a>2018. All Rights Reserved</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="single_footer text-right">
								
								<div class="footer_socail wow zoomIn" data-wow-duration="1.5s">
									<a href="https://github.com/Qying23">
										<img src="https://assets-cdn.github.com/images/modules/logos_page/GitHub-Mark.png" width="20px"></a>
									<a href="https://www.linkedin.com/in/ying-qi-4b99b4157/"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjaj6moTs6ULMk4wpq8GrTWkFfUYOM4abr0xeLIfkEKrqxMrrI" width="20px"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
	</body>
</html>