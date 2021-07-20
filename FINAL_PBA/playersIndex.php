<!DOCTYPE html>
<html lang="en">
<head>
	<title>PBA Players Information Systems</title>
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
		font-size: 20px;
	}
	.form-horizontal{
		margin: 50px;
		padding: 40px;
		border: 2px solid;
		background-color: white;
		opacity: 0.8;
	}
	.head{
		display: inline-block;
	}
	h1, table{
		color: #323c4a;
		border-radius: 5px;
		border-collapse: collapse;
		border: none;
		padding: 12px;
		margin-right: 10px;
		margin-left: 10px;
		display:block;
		position: relative;
	}
	b{
		color: #560D00;
	}
	.pull-right {
		float: right;
	}
	.title{
		font-size: 40px;
	}
	.input{
		width: 200px;
		height: 35px;
	}
	th{
		color: #E85333;
		border-bottom:5px solid black;
		padding-left: 48px;
		padding-right: 48px;
		padding-bottom: 20px;
		font-size: 18px;
	}
	td{
		border-bottom: 3px solid black;
		padding: 10px;
		text-align: center;
		font-size: 15px;
	}
	.buttons{
		margin: 0px 10px 10px 20px;
		padding: 10px 40px 10px 40px;
		font-size: 15px;
		background-color: #1e1e1e;
		color:white;
		border-radius: 25px;
	}
	.search-button{
		padding: 10px 30px 10px 30px;
		font-size: 15px;
		background-color: #1e1e1e;
		color:white;
		border-radius: 25px;
	}
	.searchform{
		width: 50%;
		margin-left: 50px;
	}
	.validation{
		border-radius: 2px;
		color:white;
		background-color: #ed563b;
		font-size: 15px;
		padding: 12px;
		margin-right: 10px;
		margin-left: 10px;
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

	<header class="header-area header-sticky">
		<div class="container">
			<nav class="main-nav">
				<a href="" class="logo">Dashboard</a>
					<ul class="nav">
						<li class="scroll-to-section"><a href="playersIndex.php" class="active">Players</a></li>
						<li class="scroll-to-section"><a href="homepage.php">Back</a></li>
					</ul>
			</nav>
		</div>
	</header>
	<form class="form-horizontal" action="" method="post">
		<strong><h1 class="title">PLAYERS</b></h1></strong>
		<br>
		<div>
		<a href="playersAdd.php" class="btn text-light buttons" title="Add Player Details">Add Players</a>
		<a href="playersEdit.php" class="btn text-light buttons" title="Edit Player Details">Edit Players</a>
		<form action="" method="post">
			<input class="searchform" type="text" name="search" placeholder="Enter search here...">
			<button class="btn text-light search-button" type="submit" name="submit-search">Search</button>
		</form>
		<br><br>
		<div style="overflow-x:auto">
			<table>
			<thead>
			<tr>
				<th scope="col">Family Name</th>
				<th scope="col">Given Name</th>
				<th scope="col">Middle Name</th>
				<th scope="col">Jersey Number</th>
				<th scope="col">Playing Position</th>
				<th scope="col">Height</th>
			</tr>
			</thead>
			<tbody>
			<div class="validation">
			<?php
				$hostName = "localhost";
				$userName = "root";
				$password = "";
				$dbName = "pba";
				$search = Null;
				$space = false;
				
				$connection = mysqli_connect($hostName, $userName, $password, $dbName);
				if (!$connection) 
				{
					die("Connection failed: " . mysqli_connect_error());
				}
				$sql = "SELECT * FROM players";
				if (isset($_POST['search']))
				{
					$search = mysqli_real_escape_string($connection, $_POST['search']);
				}
				$result = mysqli_query($connection, $sql);
				if (!$result || mysqli_num_rows($result) == 0)
				{ 
					echo "Record not found!.";
				} 
				else 
				{
					if ($search == Null)
					{
						while ($row = mysqli_fetch_assoc($result)) 
						{
							echo "<tr>";
							echo "<td>", $row["player_id"], "</td>";
							echo "<td>", $row["family_name"], "</td>";
							echo "<td>", $row["given_name"], "</td>";
							echo "<td>", $row["middle_name"], "</td>";
								if(primary_playing_position == 1){
									echo "<td>", $row["Point Guard"], "</td>";
								}
								else if(primary_playing_position == 2){
									echo "<td>", $row["Shooting Guard"], "</td>";
								}
								else if(primary_playing_position == 3){
									echo "<td>", $row["Small Forward"], "</td>";
								}
								else if(primary_playing_position == 4){
									echo "<td>", $row["Power Forward"], "</td>";
								}
								else if(primary_playing_position == 5){
									echo "<td>", $row["Forward"], "</td>";
								}
								else{
									echo "Invalid Input!";
								}
							echo "<td>", $row["height"], "</td>";
							echo "<td>", $row["team_id"], "</td>";
							echo "</tr>";
						}
					}
					else
					{
						$sql3 = "SELECT * FROM teams WHERE player_id LIKE '%$search%' OR family_name LIKE '%$search%' OR given_name LIKE '%$search%' OR middle_name LIKE '%$search%' OR primary_playing_position LIKE '%$search%' OR height LIKE '%$search%' OR team_id LIKE '%$search%' " ;
						$result3 = mysqli_query($connection, $sql3);
						$searchRes = mysqli_num_rows($result3);
						if($searchRes > 0)
						{
							while ($row3 = mysqli_fetch_assoc($result3))
							{
								echo "<tr>";
								echo "<td>", $row3["player_id"], "</td>";
								echo "<td>", $row3["family_name"], "</td>";
								echo "<td>", $row3["given_name"], "</td>";
								echo "<td>", $row3["middle_name"], "</td>";
									if(primary_playing_position == 1){
										echo "<td>", $row3["Point Guard"], "</td>";
									}
									else if(primary_playing_position == 2){
										echo "<td>", $row3["Shooting Guard"], "</td>";
									}
									else if(primary_playing_position == 3){
										echo "<td>", $row3["Small Forward"], "</td>";
									}
									else if(primary_playing_position == 4){
										echo "<td>", $row3["Power Forward"], "</td>";
									}
									else if(primary_playing_position == 5){
										echo "<td>", $row3["Forward"], "</td>";
									}
									else{
										echo "Invalid Input!";
									}
								echo "<td>", $row3["height"], "</td>";
								echo "<td>", $row3["team_id"], "</td>";
								echo "</tr>";
							}							
						}
						else
						{
							$space = true;
						}
					}
				}
				mysqli_close($connection);
			?>
				
			
			</div>
			<br>
			</tbody>
			</table><br>
		</div>
		<div class="validation">
		<?php
		if($space == true){
			echo"There is no match in your search input.";
		}
		?>
		</div>
	</div>
</body>
</html>