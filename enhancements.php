<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "utf-8"/>
	<meta name = "description" content="All about Node.js enhancements 3 page"/>
	<meta name = "keywords" content="PHP, MySql"/>
	<meta name="author" content="Jack Betson"  />
	<link href= "styles/style.css" rel="stylesheet"/>
	<title>Enhancements 3</title>
</head>
<body>
	<?php include "header.inc";?>
	<?php include "menu.inc"; ?>
	<h1>Enhancements</h1>
	<section>
		<h2>Enhancement 1 - Admin access</h2>
		<p>
			Ive set up some code so that only admins with a username and password stored in the data base can make querys on the stored data in the attempts table. To do this i had to create a new table and add some usernames and passwords for admin access. I then added 2 textboxes to the query form and made it that the query would only return a table or edit data if the password and username where correct. if they were not correct a message would be diaplyed teling them either they did not enter details or the details were incorrect.
		</p> 
	</section>
	<section>
	<h2>Enhancement 2 - Sort Data</h2>
	<p>
		A sort function for the querys has been set up. Ive added a drop down box that contains various sort options, the admin selects one of these before submitting the query and the results will be returned sorted by that input. This is added by getting the value of the drop down when it is submitted, assigning it to a variable and adding ORDER BY $sort to the end of all of the quries.
	</p>
	</section>
	<?php include "footer.inc" ?>
</body>
</html>