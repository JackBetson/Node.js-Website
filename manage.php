<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "utf-8"/>
	<meta name = "description" content="All about Node.js result managment page"/>
	<meta name = "keywords" content="PHP, MySql"/>
	<meta name="author" content="Jack Betson"  />
	<link href= "styles/style.css" rel="stylesheet"/>
	<title>Display Query Results</title>
</head>
<body>
	<?php include "header.inc";?>
	<?php include "menu.inc"; ?>
	<?php

	require_once ("settings.php");
	$conn = @mysqli_connect($host,
				$user,
				$pwd,
				$sql_db
			);


	if(!empty($_POST['adminuser']) && !empty($_POST['adminpword'])) //checks admin details, if correct query is displayed
	{
		$username = $_POST['adminuser'];
		$password = $_POST['adminpword'];
		$query = "SELECT * FROM `admin` WHERE username = '$username' AND password = '$password'";
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) == 0) {
			echo "<p>Username or password is incorrect</p>";
		}
		else
		{
			$sort = $_POST['sort'];
			if(!empty($_POST['query']))
			{
				$simpledisplay = $_POST['query'];
				if ($simpledisplay == "allattempts")
				{
					$query = "SELECT * FROM `attempts` WHERE 1 ORDER BY $sort";
					$result = mysqli_query($conn, $query);

					echo "<table id = 'resultTable'>\n";
					echo "<tr>\n "
					."<th scope=\"col\">First Name</th>\n "
					."<th scope=\"col\">Last Name</th>\n "
					."<th scope=\"col\">Student ID</th>\n "
					."<th scope=\"col\">Score</th>\n "
					."<th scope=\"col\">Attempts</th>\n "
					."</tr>\n ";

					while ($row = mysqli_fetch_assoc($result)){
					echo "<tr>\n "
					."<td>", $row["first_name"], "</td>\n "
					."<td>", $row["last_name"], "</td>\n "
					."<td>", $row["student_number"], "</td>\n "
					."<td>", $row["score"], "</td>\n "
					."<td>", $row["attempts"], "</td>\n "
					."</tr>\n ";
					}
					echo "</table>\n ";
				}
				if ($simpledisplay == "1001stattempts")
				{
					$query = "SELECT student_number, first_name, last_name FROM `attempts` WHERE attempts = 1 AND score = 6 ORDER BY $sort";
					$result = mysqli_query($conn, $query);
					
					echo "<table id = 'manageTable'>\n";
					echo "<tr>\n "
					."<th scope=\"col\">First Name</th>\n "
					."<th scope=\"col\">Last Name</th>\n "
					."<th scope=\"col\">Student ID</th>\n "
					."</tr>\n ";

					while ($row = mysqli_fetch_assoc($result)){
					echo "<tr>\n "
					."<td>", $row["first_name"], "</td>\n "
					."<td>", $row["last_name"], "</td>\n "
					."<td>", $row["student_number"], "</td>\n "
					."</tr>\n ";
					}
					echo "</table>\n ";
				}
				if ($simpledisplay == "minus50on3rd")
				{
					$query = "SELECT student_number, first_name, last_name FROM `attempts` WHERE attempts = 3 AND score < 3.5 ORDER BY $sort";
					$result = mysqli_query($conn, $query);
					
					echo "<table id = 'manageTable'>\n";
					echo "<tr>\n "
					."<th scope=\"col\">First Name</th>\n "
					."<th scope=\"col\">Last Name</th>\n "
					."<th scope=\"col\">Student ID</th>\n "
					."</tr>\n ";

					while ($row = mysqli_fetch_assoc($result)){
					echo "<tr>\n "
					."<td>", $row["first_name"], "</td>\n "
					."<td>", $row["last_name"], "</td>\n "
					."<td>", $row["student_number"], "</td>\n "
					."</tr>\n ";
					}
					echo "</table>\n ";
				}
			}



			if(!empty($_POST['allbyfirstname']) && !empty($_POST['allbylastname']))
			{
				$searchfname = trim($_POST['allbyfirstname']);
				$searchlname = trim($_POST['allbylastname']);
				$query = "SELECT first_name, last_name, student_number, score, attempts FROM `attempts` WHERE first_name = '$searchfname' AND last_name = '$searchlname' ORDER BY $sort";
				$result = mysqli_query($conn, $query);

				echo "<table id = 'resultTable'>\n";
				echo "<tr>\n "
				."<th scope=\"col\">First Name</th>\n "
				."<th scope=\"col\">Last Name</th>\n "
				."<th scope=\"col\">Student ID</th>\n "
				."<th scope=\"col\">Score</th>\n "
				."<th scope=\"col\">Attempts</th>\n "
				."</tr>\n ";

				while ($row = mysqli_fetch_assoc($result)){
				echo "<tr>\n "
				."<td>", $row["first_name"], "</td>\n "
				."<td>", $row["last_name"], "</td>\n "
				."<td>", $row["student_number"], "</td>\n "
				."<td>", $row["score"], "</td>\n "
				."<td>", $row["attempts"], "</td>\n "
				."</tr>\n ";
				}
				echo "</table>\n ";
			}
			else if(!empty($_POST['allbyfirstname']))
			{
				$searchname = trim($_POST['allbyfirstname']);
				$query = "SELECT first_name, last_name, student_number, score, attempts FROM `attempts` WHERE first_name = '$searchname' ORDER BY $sort";
				$result = mysqli_query($conn, $query);

				echo "<table id = 'resultTable'>\n";
				echo "<tr>\n "
				."<th scope=\"col\">First Name</th>\n "
				."<th scope=\"col\">Last Name</th>\n "
				."<th scope=\"col\">Student ID</th>\n "
				."<th scope=\"col\">Score</th>\n "
				."<th scope=\"col\">Attempts</th>\n "
				."</tr>\n ";

				while ($row = mysqli_fetch_assoc($result)){
				echo "<tr>\n "
				."<td>", $row["first_name"], "</td>\n "
				."<td>", $row["last_name"], "</td>\n "
				."<td>", $row["student_number"], "</td>\n "
				."<td>", $row["score"], "</td>\n "
				."<td>", $row["attempts"], "</td>\n "
				."</tr>\n ";
				}
				echo "</table>\n ";
			}
			else if(!empty($_POST['allbylastname']))
			{
				$searchname = trim($_POST['allbylastname']);
				$query = "SELECT first_name, last_name, student_number, score, attempts FROM `attempts` WHERE last_name = '$searchname' ORDER BY $sort";
				$result = mysqli_query($conn, $query);

				echo "<table id = 'resultTable'>\n";
				echo "<tr>\n "
				."<th scope=\"col\">First Name</th>\n "
				."<th scope=\"col\">Last Name</th>\n "
				."<th scope=\"col\">Student ID</th>\n "
				."<th scope=\"col\">Score</th>\n "
				."<th scope=\"col\">Attempts</th>\n "
				."</tr>\n ";

				while ($row = mysqli_fetch_assoc($result)){
				echo "<tr>\n "
				."<td>", $row["first_name"], "</td>\n "
				."<td>", $row["last_name"], "</td>\n "
				."<td>", $row["student_number"], "</td>\n "
				."<td>", $row["score"], "</td>\n "
				."<td>", $row["attempts"], "</td>\n "
				."</tr>\n ";
				}
				echo "</table>\n ";
			}


			if(!empty($_POST['allbyid']))
			{
				$searchid = $_POST['allbyid'];
				$query = "SELECT first_name, last_name, student_number, score, attempts FROM `attempts` WHERE student_number = '$searchid' ORDER BY $sort";
				$result = mysqli_query($conn, $query);

				echo "<table id = 'resultTable'>\n";
				echo "<tr>\n "
				."<th scope=\"col\">First Name</th>\n "
				."<th scope=\"col\">Last Name</th>\n "
				."<th scope=\"col\">Student ID</th>\n "
				."<th scope=\"col\">Score</th>\n "
				."<th scope=\"col\">Attempts</th>\n "
				."</tr>\n ";

				while ($row = mysqli_fetch_assoc($result)){
				echo "<tr>\n "
				."<td>", $row["first_name"], "</td>\n "
				."<td>", $row["last_name"], "</td>\n "
				."<td>", $row["student_number"], "</td>\n "
				."<td>", $row["score"], "</td>\n "
				."<td>", $row["attempts"], "</td>\n "
				."</tr>\n ";
				}
				echo "</table>\n ";
			}


			if(!empty($_POST['delete']))
			{
				$deleteid = $_POST['delete'];
				
				echo"<p>Before delete</p>";
				$query = "SELECT * FROM `attempts` WHERE 1 ORDER BY $sort";
				$result = mysqli_query($conn, $query);

				echo "<table id = 'resultTable'>\n";
				echo "<tr>\n "
				."<th scope=\"col\">First Name</th>\n "
				."<th scope=\"col\">Last Name</th>\n "
				."<th scope=\"col\">Student ID</th>\n "
				."<th scope=\"col\">Score</th>\n "
				."<th scope=\"col\">Attempts</th>\n "
				."</tr>\n ";

				while ($row = mysqli_fetch_assoc($result)){
					echo "<tr>\n "
					."<td>", $row["first_name"], "</td>\n "
					."<td>", $row["last_name"], "</td>\n "
					."<td>", $row["student_number"], "</td>\n "
					."<td>", $row["score"], "</td>\n "
					."<td>", $row["attempts"], "</td>\n "
					."</tr>\n ";
				}
				echo "</table>\n ";

				$query = "DELETE FROM attempts WHERE student_number = '$deleteid'";
				$result = mysqli_query($conn, $query);
				$query = "SELECT * FROM `attempts` WHERE 1 ORDER BY $sort";
				$result = mysqli_query($conn, $query);
				echo"<p>After delete</p>";

				echo "<table id = 'resultTable'>\n";
				echo "<tr>\n "
				."<th scope=\"col\">First Name</th>\n "
				."<th scope=\"col\">Last Name</th>\n "
				."<th scope=\"col\">Student ID</th>\n "
				."<th scope=\"col\">Score</th>\n "
				."<th scope=\"col\">Attempts</th>\n "
				."</tr>\n ";

				while ($row = mysqli_fetch_assoc($result)){
					echo "<tr>\n "
					."<td>", $row["first_name"], "</td>\n "
					."<td>", $row["last_name"], "</td>\n "
					."<td>", $row["student_number"], "</td>\n "
					."<td>", $row["score"], "</td>\n "
					."<td>", $row["attempts"], "</td>\n "
					."</tr>\n ";
				}
				echo "</table>\n ";
			}

			if(!empty($_POST['changeid']) && !empty($_POST['changescore']))
			{
				$changeid = trim($_POST['changeid']);
				$changescore = trim($_POST['changescore']);

				echo"<p>Before change</p>";
				$query = "SELECT * FROM `attempts` WHERE student_number = '$changeid' ORDER BY $sort";
				$result = mysqli_query($conn, $query);

				echo "<table id = 'resultTable'>\n";
				echo "<tr>\n "
				."<th scope=\"col\">First Name</th>\n "
				."<th scope=\"col\">Last Name</th>\n "
				."<th scope=\"col\">Student ID</th>\n "
				."<th scope=\"col\">Score</th>\n "
				."<th scope=\"col\">Attempts</th>\n "
				."</tr>\n ";

				while ($row = mysqli_fetch_assoc($result)){
					echo "<tr>\n "
					."<td>", $row["first_name"], "</td>\n "
					."<td>", $row["last_name"], "</td>\n "
					."<td>", $row["student_number"], "</td>\n "
					."<td>", $row["score"], "</td>\n "
					."<td>", $row["attempts"], "</td>\n "
					."</tr>\n ";
				}
				echo "</table>\n ";

				$query = "UPDATE `attempts` SET score = '$changescore' WHERE student_number = '$changeid'";
				$result = mysqli_query($conn, $query);
				$query = "SELECT * FROM `attempts` WHERE student_number = '$changeid' ORDER BY $sort";
				$result = mysqli_query($conn, $query);
				echo"<p>After change</p>";

				echo "<table id = 'resultTable'>\n";
				echo "<tr>\n "
				."<th scope=\"col\">First Name</th>\n "
				."<th scope=\"col\">Last Name</th>\n "
				."<th scope=\"col\">Student ID</th>\n "
				."<th scope=\"col\">Score</th>\n "
				."<th scope=\"col\">Attempts</th>\n "
				."</tr>\n ";

				while ($row = mysqli_fetch_assoc($result)){
					echo "<tr>\n "
					."<td>", $row["first_name"], "</td>\n "
					."<td>", $row["last_name"], "</td>\n "
					."<td>", $row["student_number"], "</td>\n "
					."<td>", $row["score"], "</td>\n "
					."<td>", $row["attempts"], "</td>\n "
					."</tr>\n ";
				}
				echo "</table>\n ";
			}
		}
	}
	else
	{
		echo "<p>Please enter admin details</p>";
	}


	?>
	<?php include "footer.inc" ?>
</body>
</html>