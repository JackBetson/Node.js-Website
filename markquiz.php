<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "utf-8"/>
	<meta name = "description" content="All about Node.js mark quiz page"/>
	<meta name = "keywords" content="PHP, MySql"/>
	<meta name="author" content="Jack Betson"  />
	<link href= "styles/style.css" rel="stylesheet"/>
	<title>Quiz Mark</title>
</head>
<body>
	<?php include "header.inc";?>
	<?php include "menu.inc"; ?>

	<?php
		require_once ("settings.php");
		$date_and_time = date("Y/m/d H:i:s");
		$firstname = "";
		$lastname = "";
		$studentnumber = "";
		$attempts = 0;
		$score = 0;
		$valid = true;
		$i = 0;


		//connection to sql database
		$conn = @mysqli_connect($host,
				$user,
				$pwd,
				$sql_db
			);


		//Handling checkbox in a PHP form processor | HTML Form Guide. 2020. Handling checkbox in a PHP form processor | HTML Form Guide. [ONLINE] Available at: https://html.form.guide/php-form/php-form-checkbox/. [Accessed 23 October 2020].
		//function used to check checkbox values
		function IsChecked($chkname,$value)
	    {
	        if(!empty($_POST[$chkname]))
	        {
	            foreach($_POST[$chkname] as $chkval)
	            {
	                if($chkval == $value)
	                {
	                    return true;
	                }
	            }
	        }
	        return false;
	    }



	//sanatises and checks first name data
		if (isset ($_POST["givenname"]))	{
			if (preg_match("/[A-Za-z -]{1,20}$/", $_POST["givenname"]) == 1)
				{	
					$firstname = filter_var($_POST["givenname"], FILTER_SANITIZE_STRING);
			}
			else {
					echo "<p>Your first name does not meet the criteria, must be less than  20 characters and include only letters and hyphens.</p>";
					$valid = false;
			}
		}
		else {
			echo "<p>Error: Enter first name in the <a href=\"quiz.php\">form</a></p>";
			$valid = false;
		}

	//sanatises and checks last name data
		if (isset ($_POST["familyname"]))	{
			if (preg_match("/[A-Za-z -]{1,20}$/", $_POST["familyname"]) == 1)
				{	
					$lastname = filter_var($_POST["familyname"], FILTER_SANITIZE_STRING);
			}
			else {
					echo "<p>Your last name does not meet the criteria, must be less than  20 characters and include only letters and hyphens.</p>";
					$valid = false;
			}
		}
		else {
			echo "<p>Error: Enter last name in the <a href=\"quiz.php\">form</a></p>";
			$valid = false;
		}

	//sanatises and checks student id data
		if (isset ($_POST["studentid"]))	{
			if (preg_match("/^(\d{7})(\d{3})?$/", $_POST["studentid"]) == 1)
				{	
					$studentnumber = filter_var($_POST["studentid"], FILTER_SANITIZE_STRING);
			}
			else {
					echo "<p>Your student number does not meet the criteria, must be less than  20 characters and include only letters and hyphens.</p>";
					$valid = false;
			}
		}
		else {
			echo "<p>Error: Enter student number in the <a href=\"quiz.php\">form</a></p>";
			$valid = false;
		}


	//checks coonection to database, creates table if needed and stores data
		if (!$conn) {
				echo "<p>Database connection failure</p>";
				$valid = false;
			} 
			else {
				$sql_table = "attempts";

				$query = "select 1 from $sql_table";

				$exist = mysqli_query($conn, $query);

				if($exist == FALSE)
				{

					$query = "CREATE TABLE attempts (
					    attempt_id INT AUTO_INCREMENT PRIMARY KEY,
					    date_and_time VARCHAR(15),
					    first_name VARCHAR(20) NOT NULL,
					    last_name VARCHAR(20) NOT NULL,
					    student_number INT NOT NULL,
					    attempts INT(3),
					    score INT)";

					mysqli_query($conn, $query);
					echo "<p>Succesfully added new attempt table</p>";
				}


				if ($valid == true)
				{
					$question1 = filter_var($_POST["Question1"], FILTER_SANITIZE_STRING);
					$question2 = $_POST['Question2'];
					$question3a = IsChecked('Question3', 'Uber');
					$question3b = IsChecked('Question3', 'Netflix');
					$question4 = $_POST['Question4'];
					$question5 = $_POST['Question5'];

					
					if(!empty($question1))
					{
						if (strtolower($question1) == "joyent")
						{
							$score += 1;
						}
					}
					else
					{
						echo "<p>Unsuccessfull submission: You did not have an answer for question 1.";
						$valid = false;
					}

					if(!empty($question2))
					{
						if ($question2 == "2009")
						{
							$score += 1;
						}
					}
					else
					{
						echo "<p>Unsuccessfull submission: You did not have an answer for question 2.";
						$valid = false;
					}

					if(!empty($_POST["Question3"]))
					{
						if ($question3a == true)
						{
							$score += 1;
						}
						if ($question3b == true)
						{
							$score += 1;
						}
					}
					else
					{
						echo "<p>Unsuccessfull submission: You did not have an answer for question 3.";
						$valid = false;
					}

					if(!empty($question4))
					{
						if ($question4 == "Ryan Dahl")
						{
							$score += 1;
						}
					}
					else
					{
						echo "<p>Unsuccessfull submission: You did not have an answer for question 4.";
						$valid = false;
					}

					if(!empty($question5))
					{
						if ($question5 == "15")
						{
							$score += 1;
						}
					}
					else
					{
						echo "<p>Unsuccessfull submission: You did not have an answer for question 5.";
						$valid = false;
					}


					if ($valid == true)
					{
						$query = "SELECT `attempts` FROM $sql_table WHERE `student_number` = $studentnumber"; //Calculation of attempts and makes usre no more than

						$result = mysqli_query($conn, $query); 
						$i = 0;

						while ($fetchattempt = mysqli_fetch_assoc($result)) 
						{
							$i += 1;
						}

						if ($i < 3)
						{
							$attempts = $i += 1;

							$query = "insert into $sql_table (date_and_time, first_name, last_name, student_number, attempts, score) values ('$date_and_time', '$firstname', '$lastname', '$studentnumber', '$attempts', '$score')";

							$result = mysqli_query($conn, $query);

							$query = "SELECT first_name, last_name, student_number, score, attempts FROM attempts WHERE attempts = $attempts AND student_number = $studentnumber";

							$result = mysqli_query($conn, $query);

							if(!$result) {
								echo "<p>Something is wrong with ", $query, "</p>";
							} 
							else {
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
								
								echo "<p>Succesfully added new attempt record</p>";
								if ($attempts < 3){
									echo "<a id = 'retryButton' href = 'quiz.php'>Try Again?</a>";
								}
							}
						}
						else
						{
							echo "<p>Unsuccessfull submission: You have already attempted the quiz 3 times.";
						}
					}
					else
				{
					echo "<p>Unsuccessfull submission: Correct errors above.";
				}
				}
				else
				{
					echo "<p>Unsuccessfull submission. Correct errors above.";
				}
				mysqli_close($conn);
				}
	?>
	<?php include "footer.inc" ?>
</body>
</html>





	