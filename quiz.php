<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Quiz page for Assignment 1 - All about Node.js" />
  <meta name="keywords" content="HTML5, tags" />
  <meta name="author" content="Jack Betson"  />
  <title>All About Node.js Topic Page</title>
  <link href= "styles/style.css" rel="stylesheet"/>
  <script src="scripts/quiz.js"></script>
  
</head>

<body>
	<?php include "header.inc";?>
	<?php include "menu.inc"; ?>
	<p>You have 1 minute to complete the quiz</p>
	<form method = "post" action = "markquiz.php" novalidate="novalidate">
		<fieldset>
			<legend>Student Details</legend>
			<p>
			<label for="studentid">Student ID</label>
			<input type="text" name="studentid" id="studentid" maxlength="10" size="10" required="required" pattern="\d{7}|\d{10}">
			</p>
			<p>
			<label for="givenname">Given Name</label>
			<input type="text" name="givenname" id="givenname" maxlength="25" size="10" required="required" pattern="[A-Za-z -]{1,25}">
			<label for="familyname">Family Name</label>
			<input type="text" name="familyname" id="familyname" maxlength="25" size="10" required="required" pattern="[A-Za-z -]{1,25}">
			</p>
		</fieldset>
		<fieldset>
			<legend>Quiz</legend>
			<p>
				<label for="Question1">What was the name of the company that sponsored Node.js?</label>
				<input type="text" name="Question1" id="Question1" maxlength="20" size="10" required="required" pattern="[A-Za-z]{2,20}">
			</p>
			<p>
				<label>In what year was Node.js developed?</label>
				<input type="radio" id="2009" name="Question2" value="2009" required="required">
				<label for="2009">2009</label> 

				<input type="radio" id="2016" name="Question2" value="2016">
				<label for="2016">2016</label> 

				<input type="radio" id="2001" name="Question2" value="2001">
				<label for="2001">2001</label> 

				<input type="radio" id="2013" name="Question2" value="2013">
				<label for="2013">2013</label> 
			</p>
			<p>
				<label>Which big name companies use Node.js?</label>
				<label for="Uber">Uber</label>
				<input type="checkbox" id="Uber" name="Question3[]" value="Uber" checked="checked">

				<label for="Netflix">Netflix</label>
				<input type="checkbox" id="Netflix" name="Question3[]" value="Netflix">

				<label for="Mcdonalds">Mcdonalds</label>
				<input type="checkbox" id="Mcdonalds" name="Question3[]" value="Mcdonalds">

				<label for="Coles">Coles</label>
				<input type="checkbox" id="Coles" name="Question3[]" value="Coles">

				<label for="Apple">Apple</label>
				<input type="checkbox" id="Apple" name="Question3[]" value="Apple">
			</p>
			<p>
				<label for="Question4">Who created Node.js?</label>
				<select name="Question4" id="Question4" required="required">
				<option value="">Please Select</option>
				<option value="Danny Duncan">Danny Duncan</option>			
				<option value="Damian Lillard">Damian Lillard</option>
				<option id = "RyanDahl" value="Ryan Dahl">Ryan Dahl</option>
				<option value="Gordon Ramsay">Gordon Ramsay</option>
			</select>
			</p>
			<p>
				<label for="Question5">How many versions of Node.js have been released?(0-20)</label>
  				<input type="range" id="Question5" name="Question5" min="0" max="20">
			</p>
		</fieldset>
		<input type="submit" value="Submit Form">
		<input type="reset" value="Reset Form">
	</form>
	<?php include "footer.inc" ?>
</body>
</html>