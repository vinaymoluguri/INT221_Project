<!DOCTYPE HTML>
<html>
<div>
	<head>
		<title>PLAYONLINEGAMES.COM-HOMEPAGE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main1.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="http://127.0.0.1:8000/homepage" class="logo">PlayOnlineGame.com</a>
					<nav id="nav">
						<a href="http://127.0.0.1:8000/homepage">Home</a>
						<a href="http://127.0.0.1:8000/all">All Games</a>
						<a href="http://127.0.0.1:8000/help">Help</a>
					</nav>
				</div>
			</header>
		</body>
	</div>
	<div>
		<!DOCTYPE HTML>
<html>
<form method="get" action="http://127.0.0.1:8000/checkyourluck1" style="text-align: center">
  			<h2>Enter a number (1-5):</h2> <input type="text" name="Number"><br><br>
  			<input type="submit" name="submit" value="Submit"> 
  			<input type="reset" name="reset" value="Reset" onClick="location.href='http://127.0.0.1:8000/checkyourluck1'"> <br>
  			<br>
  			<br>

<?php
	if(isset($_GET["submit"]))
	{
		$number=$_GET["Number"];
		$rand_no=rand(1,5);
		if($number==$rand_no){
			echo "<br>That is Right!!!! " .$rand_no;
			echo "<br>Congrats!!!!! You Won";
		}
		else{
			echo "<br>Oooopssss!!!! The number was " .$rand_no;
			echo "<br>Game Over!!!!Reset to start again";		}

	}
?>
</form>
</html>
	</div>

		</html>