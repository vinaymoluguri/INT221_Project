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
						<a href="seemore.blade.html">All Games</a>
						<a href="help.blade.html">Help</a>
					</nav>
				</div>
			</header>
		</body>
	</div>
	<div>
		<!DOCTYPE HTML>
<html>
<form method="get" action="http://127.0.0.1:8000/checkyourluck4" style="text-align: center">
  			<h2>Enter a number (1-5):</h2> <input type="text" name="Number"><br><br>
  			<input type="submit" name="submit" value="Submit"> 

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
			echo "<br>Your are left with 3 chances";		}

	}
?>
</form>
</html>
	</div>

		</html>