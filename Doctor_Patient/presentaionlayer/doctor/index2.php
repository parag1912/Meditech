<?php include ('../../datalayer/server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor</title>
	<link rel="stylesheet"  href="style3.css">
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
<h1>Medi<span>Tech</span></h1>
		<nav>
		
		<ul > 
	
			<li><a href="index2.php">MyInfo</a></li>
			<li><a href="doctorapp.php">My Appointments</a></li>
			<!-- <li><a href=" searchpatient.php">Search Patient</a></li> -->
			<li><a href="add.php">Add Prescription</a></li>
			<li><a href="https://vedant-kadam-noobie.github.io/agrovideo.github.io/">Video Consult</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>

		</ul>

	</nav>

</header>
<body >

	<div class="header">
	<h2>My Information</h2>
</div>
<form method="post" action="index2.php" class="info">

<div class="Dcontent">

	<label>ID: <?php echo "" .$_SESSION['DoctorID'];?></label>

	 	   <br>
	 	   <br>
	 	   <label> Email : <?php echo $colD['email']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Name : <?php echo $colD['Doctorname']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Address : <?php echo $colD['Address']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Contact Number : <?php echo $colD['ContactNumber']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Specialized In : <?php echo $colD['categorey']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   
	
</div>

</form>

</body>
</html>