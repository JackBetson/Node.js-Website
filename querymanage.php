<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "utf-8"/>
	<meta name = "description" content="All about Node.js result managment page"/>
	<meta name = "keywords" content="PHP, MySql"/>
	<meta name="author" content="Jack Betson"  />
	<link href= "styles/style.css" rel="stylesheet"/>
	<title>Manage Results</title>
</head>
<body>
	<?php include "header.inc";?>

	<?php include "menu.inc"; ?>
	<form method = "post" action = "manage.php" novalidate="novalidate">
		<fieldset>
			<legend>Username and Password</legend>
			<label>Username: </label>
			<input type="text" name="adminuser" id="adminuser" maxlength="20" size="10"/>
			<label>Password: </label>
			<input type="text" name="adminpword" id="adminpword" maxlength="20" size="10"/>
		</fieldset>
		<fieldset>
			<legend>Search Criteria</legend>
			<p>
				<input type="radio" id="allattempts" name="query" value="allattempts"/>
				<label for="allattempts">All attempts</label> 

				<input type="radio" id="1001stattempts" name="query" value="1001stattempts"/>
				<label for="1001stattempts">100% on first try attempts</label> 

				<input type="radio" id="minus50on3rd" name="query" value="minus50on3rd"/>
				<label for="minus50on3rd">Less than 50% on third try attempts</label> 
			</p>
		</fieldset>
		<fieldset>
			<legend>List all via ID or Name</legend>
			<label>First name: </label>
			<input type="text" name="allbyfirstname" id="allbyfirstname" maxlength="20" size="10"/>
			<label>Last name: </label>
			<input type="text" name="allbylastname" id="allbylastname" maxlength="20" size="10"/>
			<label>ID: </label>
			<input type="text" name="allbyid" id="allbyid" maxlength="20" size="10"/>
		</fieldset>
		<fieldset>
			<legend>Delete all by student ID</legend>
			<label>ID: </label>
			<input type="text" name="delete" id="delete" maxlength="20" size="10"/>
		</fieldset>
		<fieldset>
			<legend>Change score</legend>
			<label>ID: </label>
			<input type="text" name="changeid" id="changeid" maxlength="20" size="10"/>
			<label>Score: </label>
			<input type="text" name="changescore" id="changescore" maxlength="20" size="10"/>
		</fieldset>
		<fieldset>
			<legend>Sort by</legend>
			<p>
				<label for="sort">Sort by:</label>
				<select name="sort" id="sort">
				<option value="1">Default</option>
				<option value="first_name">First name</option>			
				<option value="last_name">Last name</option>
				<option value="student_number">Student number</option>
				<option value="score">Score</option>
				<option value="attempts">Attempts</option>
				</select>
			</p>
		</fieldset>
		<input type="submit" value="Submit Form"/>
		<input type="reset" value="Reset Form"/>
	</form>
	
	<?php include "footer.inc" ?>

</body>
</html>