<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Doctor</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body class="Dbody">
	<div class="Dheader">
	<h2>Doctor Login</h2>
</div>

<form method="post" action="login2.php" class="Dform">

	<?php include ('../datalayer/errors.php')?>

	<div class="input-groupD">
		<label>Doctor ID</label>
		<input type="text" name="doctorID">

	</div>




	<div class="input-groupD">
		<label>Password</label>
		<input type="Password" name="doctorpassword">



	<div class="input-groupD">
		<button type="submit" name="Login2" class="btnD"> Login</button>
	</div>

	<div class ="input-groupD">
    <p>
        Not a member? <a href="https://docs.google.com/forms/d/e/1FAIpQLSeJgtP5wUH9OdpG4bxMqQ04abRiMwz8xqn6nDwaXVUp0AsTaQ/viewform?usp=sf_link" target="blank" style="color: #423289;">Sign Up </a>
    </p>

    </div>
	




</form>

</body>
</html>