<!DOCTYPE html>
<html lang="en">
<head>
	<title>Games</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
	body{
		font-family: Poppins;
		background-image: url(bg.png);
		background-size: 100%;
		background-repeat: none;
	}
	.form-horizontal{
		margin: 50px;
		padding: 40px;
		border: 2px solid;
		background-color: white;
		opacity: 0.8;
		font-size: 20px;
	}
	.head{
		display: inline-block;
	}
	h1, table{
		color: #323c4a;
	}
	.pull-right {
		float: right;
	}
	#add, #edit, #text, #search{
		font-size: 15px;
	}
	.title{
		font-size: 40px;
	}
	.sub-title{
		font-size: 20px;
		color: #ed563b;
	}
	.top{
		line-spacing:2px;
	}
	.input{
		width: 200px;
		height: 35px;
	}
	th,td,a{
		padding: 10px;
	}
	.buttons{
		margin: 0px 10px 10px 40px;
		padding: 10px 60px 10px 60px;
		font-size: 15px;
		background-color: #1e1e1e;
		color: white;
		border-radius: 25px;
	}
	.validation{
		border-radius: 2px;
		color:white;
		background-color: #ed563b;
		font-size: 15px;
		padding: 12px;
	}
	.background-header .logo,
	.background-header .main-nav .nav li a {
	  color: #232d39!important;
	}

	.background-header .main-nav .nav li:hover a {
	  color: #ed563b!important;
	}

	.background-header .nav li a.active {
	  color: #ed563b!important;
	}

	.header-area {
	  position: sticky;
	  top: 0px;
	  left: 0px;
	  right: 0px;
	  z-index: 100;
	  height: 80px;
	  background: #545454;
	  -webkit-transition: all .5s ease 0s;
	  -moz-transition: all .5s ease 0s;
	  -o-transition: all .5s ease 0s;
	  transition: all .5s ease 0s;
	}

	.header-area .main-nav {
	  min-height: 80px;
	  background: transparent;
	}

	.header-area .main-nav .logo {
	  line-height: 80px;
	  color: #fff;
	  font-size: 32px;
	  font-weight: 800;
	  text-transform: uppercase;
	  float: left;
	  -webkit-transition: all 0.3s ease 0s;
	  -moz-transition: all 0.3s ease 0s;
	  -o-transition: all 0.3s ease 0s;
	  transition: all 0.3s ease 0s;
	}

	.header-area .main-nav .logo em {
	  font-style: normal;
	  color: #ed563b;
	  font-weight: 900;
	}

	.header-area .main-nav .nav {
	  float: right;
	  margin-top: 27px;
	  margin-right: 0px;
	  background-color: transparent;
	  -webkit-transition: all 0.3s ease 0s;
	  -moz-transition: all 0.3s ease 0s;
	  -o-transition: all 0.3s ease 0s;
	  transition: all 0.3s ease 0s;
	  position: relative;
	  z-index: 999;
	}

	.header-area .main-nav .nav li {
	  padding-left: 20px;
	  padding-right: 20px;
	}

	.header-area .main-nav .nav li a {
	  display: block;
	  font-weight: 500;
	  font-size: 17px;
	  color: #7a7a7a;
	  text-transform: uppercase;
	  -webkit-transition: all 0.3s ease 0s;
	  -moz-transition: all 0.3s ease 0s;
	  -o-transition: all 0.3s ease 0s;
	  transition: all 0.3s ease 0s;
	  height: 40px;
	  line-height: 20px;
	  border: transparent;
	  letter-spacing: 1px;
	}

	.header-area .main-nav .nav li a {
	  color: #fff;
	}

	.header-area .main-nav .menu-trigger {
	  cursor: pointer;
	  display: block;
	  position: absolute;
	  top: 23px;
	  width: 32px;
	  height: 40px;
	  text-indent: -9999em;
	  z-index: 99;
	  right: 40px;
	  display: none;
	}

	.header-area .main-nav .menu-trigger span,
	.header-area .main-nav .menu-trigger span:before,
	.header-area .main-nav .menu-trigger span:after {
	  -moz-transition: all 0.4s;
	  -o-transition: all 0.4s;
	  -webkit-transition: all 0.4s;
	  transition: all 0.4s;
	  background-color: #1e1e1e;
	  display: block;
	  position: absolute;
	  width: 30px;
	  height: 2px;
	  left: 0;
	}

	.background-header .main-nav .menu-trigger span,
	.background-header .main-nav .menu-trigger span:before,
	.background-header .main-nav .menu-trigger span:after {
	  background-color: #1e1e1e;
	}

	.header-area .main-nav .menu-trigger span:before,
	.header-area .main-nav .menu-trigger span:after {
	  -moz-transition: all 0.4s;
	  -o-transition: all 0.4s;
	  -webkit-transition: all 0.4s;
	  transition: all 0.4s;
	  background-color: #1e1e1e;
	  display: block;
	  position: absolute;
	  width: 30px;
	  height: 2px;
	  left: 0;
	  width: 75%;
	}

	.background-header .main-nav .menu-trigger span:before,
	.background-header .main-nav .menu-trigger span:after {
	  background-color: #1e1e1e;
	}

	.header-area .main-nav .menu-trigger span:before,
	.header-area .main-nav .menu-trigger span:after {
	  content: "";
	}

	.header-area .main-nav .menu-trigger span {
	  top: 16px;
	}

	.header-area .main-nav .menu-trigger span:before {
	  -moz-transform-origin: 33% 100%;
	  -ms-transform-origin: 33% 100%;
	  -webkit-transform-origin: 33% 100%;
	  transform-origin: 33% 100%;
	  top: -10px;
	  z-index: 10;
	}

	.header-area .main-nav .menu-trigger span:after {
	  -moz-transform-origin: 33% 0;
	  -ms-transform-origin: 33% 0;
	  -webkit-transform-origin: 33% 0;
	  transform-origin: 33% 0;
	  top: 10px;
	}

	.header-area .main-nav .menu-trigger.active span,
	.header-area .main-nav .menu-trigger.active span:before,
	.header-area .main-nav .menu-trigger.active span:after {
	  background-color: transparent;
	  width: 100%;
	}

	.header-area .main-nav .menu-trigger.active span:before {
	  -moz-transform: translateY(6px) translateX(1px) rotate(45deg);
	  -ms-transform: translateY(6px) translateX(1px) rotate(45deg);
	  -webkit-transform: translateY(6px) translateX(1px) rotate(45deg);
	  transform: translateY(6px) translateX(1px) rotate(45deg);
	  background-color: #1e1e1e;
	}

	.background-header .main-nav .menu-trigger.active span:before {
	  background-color: #1e1e1e;
	}

	.header-area .main-nav .menu-trigger.active span:after {
	  -moz-transform: translateY(-6px) translateX(1px) rotate(-45deg);
	  -ms-transform: translateY(-6px) translateX(1px) rotate(-45deg);
	  -webkit-transform: translateY(-6px) translateX(1px) rotate(-45deg);
	  transform: translateY(-6px) translateX(1px) rotate(-45deg);
	  background-color: #1e1e1e;
	}

	.background-header .main-nav .menu-trigger.active span:after {
	  background-color: #1e1e1e;
	}

	.header-area.header-sticky {
	  min-height: 80px;
	}

	.header-area.header-sticky .nav {
	  margin-top: 20px !important;
	}

	.header-area.header-sticky .nav li a.active {
	  color: #ed563b;
	}

	@media (max-width: 1200px) {
	  .header-area .main-nav .nav li {
	    padding-left: 12px;
	    padding-right: 12px;
	  }
	  .header-area .main-nav:before {
	    display: none;
	  }
	}

	@media (max-width: 767px) {
	  .header-area .main-nav .logo {
	    color: #1e1e1e;
	  }
	  .header-area.header-sticky .nav li a:hover,
	  .header-area.header-sticky .nav li a.active {
	    color: #ed563b!important;
	    opacity: 1;
	  }
	  .header-area {
	    background-color: #f7f7f7;
	    padding: 0px 15px;
	    height: 80px;
	    box-shadow: none;
	    text-align: center;
	  }
	  .header-area .container {
	    padding: 0px;
	  }
	  .header-area .logo {
	    margin-left: 30px;
	  }
	  .header-area .menu-trigger {
	    display: block !important;
	  }
	  .header-area .main-nav {
	    overflow: hidden;
	  }
	  .header-area .main-nav .nav {
	    float: none;
	    width: 100%;
	    display: none;
	    -webkit-transition: all 0s ease 0s;
	    -moz-transition: all 0s ease 0s;
	    -o-transition: all 0s ease 0s;
	    transition: all 0s ease 0s;
	    margin-left: 0px;
	  }

	  .header-area.header-sticky .nav {
	    margin-top: 80px !important;
	  }
	  .header-area .main-nav .nav li {
	    width: 100%;
	    background: #fff;
	    border-bottom: 1px solid #eee;
	    padding-left: 0px !important;
	    padding-right: 0px !important;
	  }
	  .header-area .main-nav .nav li a {
	    height: 50px !important;
	    line-height: 50px !important;
	    padding: 0px !important;
	    border: none !important;
	    background: #f7f7f7 !important;
	    color: #232d39 !important;
	  }
	  .header-area .main-nav .nav li a:hover {
	    background: #eee !important;
	    color: #ed563b!important;
	  }
	  .header-area .main-nav .nav li.submenu ul {
	    position: relative;
	    visibility: inherit;
	    opacity: 1;
	    z-index: 1;
	    transform: translateY(0%);
	    transition-delay: 0s, 0s, 0.3s;
	    top: 0px;
	    width: 100%;
	    box-shadow: none;
	    height: 0px;
	  }
	  .header-area .main-nav .nav li.submenu ul li a {
	    font-size: 20px;
	    font-weight: 400;
	  }
	  .header-area .main-nav .nav li.submenu ul li a:hover:before {
	    width: 0px;
	  }
	  .header-area .main-nav .nav li.submenu ul.active {
	    height: auto !important;
	  }
	  .header-area .main-nav .nav li.submenu:after {
	    color: #3B566E;
	    right: 25px;
	    font-size: 20px;
	    top: 15px;
	  }
	  .header-area .main-nav .nav li.submenu:hover ul, .header-area .main-nav .nav li.submenu:focus ul {
	    height: 0px;
	  }
	}

	@media (min-width: 767px) {
	  .header-area .main-nav .nav {
	    display: flex !important;
	  }
	}

</style>
<body>
	<?php
		$game = Null;
		$hostName = "localhost";
		$userName = "root";
		$password = "";
		$dbName = "pba";
		$connection = mysqli_connect($hostName, $userName, $password, $dbName);
		if (!$connection) {
			die("Connection failed: " . mysqli_connect_error());
		}
		else{
			$t1 = null;
			$qry1 = "SELECT * FROM venue";
			$qry2 = "SELECT * FROM teams";
			$qry3 = "SELECT * FROM teams";
			$rslt4 = mysqli_query($connection, $qry1);
			$rslt2 = mysqli_query($connection, $qry2);
			$rslt3 = mysqli_query($connection, $qry3);
			$qry1 = "SELECT * FROM games";
			$rslt1 = mysqli_query($connection, $qry1);
			if(isset($_GET['edit'])){
				$toed = $_GET['edit'];	
	?>
	<header class="header-area header-sticky">
		<div class="container">
			<nav class="main-nav">
				<a href="" class="logo">Dashboard</a>
					<ul class="nav">
						<li class="scroll-to-section"><a href="#top" class="active">Teams</a></li>
					</ul>
			</nav>
		</div>
	</header>
	<form class="form-horizontal" action="" method="post">
		<div class="top">
			<strong>
				<h1 class="title"><u>GAMES</u></h1>
				<h3 class="sub-title">EDIT</h3>
			</strong>
		<br>
		</div>
		<div class="form-group">
			<div class="col-md-5">
			<label for="tedit">Venue Location:</label>
			<select name="venue" size="1" required>
				<?php while($row1 = mysqli_fetch_array($rslt4)):;?>
				<option value="<?php echo $row1[0]?>"><?php echo $row1[1]?></option>
				<?php endwhile;?>
			</select><br><br>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-5">
			<label for="tedit">Team 1:</label>
			<select name="team1" size="1" required>
				<?php while($row2 = mysqli_fetch_array($rslt2)):;?>
				<option value="<?php echo $row2[1]?>"><?php echo $row2[1]?></option>
				<?php endwhile;?>
			</select><br>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-5">
			<label for="tedit">Team 2:</label>
			<select name="team2" size="1" required>
				<?php while($row3 = mysqli_fetch_array($rslt3)):;?>
					<option value="<?php echo $row3[1]?>"><?php echo $row3[1]?></option>
				<?php endwhile;?>
			</select><br>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-5">
			Date: <input type="date" id="gamedate" name="gamedate"
				   min="1900-01-01" max="3000-12-31" required><br>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-5">
			Time: <input type="time" id="gametime" name="gametime" min="01:00" max="24:00" required><br>
			</div>
		</div>
		<br>
		<input class="btn text-light buttons" type="submit" value="UPDATE">
		<a href="gamesIndex.php" class="btn text-light buttons" title="Go back to Main Games Page">BACK</a>
		<br><br>
		<div class="validation">
		<?php
				$venue = null;
				$team1 = null;
				$team2 = null;
				$gamedate = null;
				$gametime = null;
				$venueName = null;
				if(isset($_POST['venue']) && isset($_POST['team1']) && isset($_POST['team2']) && isset($_POST['score1']) && isset($_POST['score2']) && isset($_POST['gamedate']) && isset($_POST['gametime'])){
					$venue = $_POST['venue'];
					$team1 = $_POST['team1'];
					$team2 = $_POST['team2'];
					$gamedate = $_POST['gamedate'];
					$gametime = $_POST['gametime'];
					if($team1 != $team2){
						$sl1 = "SELECT venue_url FROM venue WHERE game_venue_id = '$venue'";
						$sl2 = "SELECT venue_name FROM venue WHERE game_venue_id = '$venue'";
						$qr1 = mysqli_query($connection, $sl1);
						$qr2 = mysqli_query($connection, $sl2);
						$result1 = mysqli_fetch_array($qr1);
						$result2 = mysqli_fetch_array($qr2);
						$q1 = "SELECT venue_url FROM venue";
						$q2 = "SELECT venue_name FROM venue";
						$query1 = mysqli_query($connection, $q1);
						$query2 = mysqli_query($connection, $q2);
						$arr1 = array();
						$arr2 = array();
						while($row1 = mysqli_fetch_assoc($query1)){
							if($row1['venue_url'] == $result1['venue_url']){
								$arr1[] = $row1['venue_url'];
								break;
							}
						}
						while($row2 = mysqli_fetch_assoc($query2)){
							if($row2['venue_name'] == $result2['venue_name']){
								$arr2[] = $row2['venue_name'];
								break;
							}
						}
						$arry1 = $arr1[0];
						$arry2 = $arr2[0];
						$sql = "UPDATE games SET game_venue_id = '$venue', team_1 = '$team1', team_2 = '$team2', gamedate = '$gamedate', gametime = '$gametime', URL_venue = '$arry1', name_venue = '$arry2' WHERE game_id = '$toed'";
						mysqli_query($connection, $sql);
						echo "Game record successfully updated.";
						mysqli_close($connection);
					}else{
						echo 'Both teams must not be the same.';
					}
				}else{
					echo 'Enter inputs!';
				}
			}
		}
		?>
		</div>
	</form>
</body>
</html>