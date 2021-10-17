<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Topic page for Assignment 1 - All about Node.js" />
  <meta name="keywords" content="HTML5, tags" />
  <meta name="author" content="Jack Betson"  />
  <title>All About Node.js Topic Page</title>
  <link href= "styles/style.css" rel="stylesheet"/>

  
</head>
<body>
	<?php include "header.inc";?>
	<?php include "menu.inc"; ?>
	<hr>

		<section >
			<h2>What is Node.js?</h2>
			<p id = "introTypewriter"></p>
			<p>Node.js = Javascript Library + Runtime environment</p>
			<h3>What is Node js? | Why is it so Famous?</h3>
			<p>Video by Telusko</p>
			<a id= "EmbeddedYoutubeVideo"></a>
				<iframe width="1280" height="720" src="https://www.youtube.com/embed/yEHCfRWz-EI" allowfullscreen></iframe>">
			
			<h3>Features</h3>
			<ul>
				<li>
					<strong>Asynchronous and Event driven.</strong> Every API of  the Node.js library is asynchronous, meaning that they are non-blocking. This essentially means that the server never waits for an API to return data. Instead the server moves to the next API after calling it and uses a notification mechanism that help the server get a response from the previous API call.
				</li>
				<li>
					<strong>Very Fast.</strong> Due to being built on Google Chrome’s V8 Javascript engine, the Node.js library is very fast when it comes to code execution.
				</li>
				<li>
					<strong>Single Threaded but highly scalable.</strong>Node.js uses a single threaded model with vent looping. The event mechanism helps the server to respond in a non-blocking way and therefor makes the server highly scalable as opposed to other traditional servers which create limited threads to handle requests. Instead Node.js uses a single threaded program and the same program can provide service to a much larger number of requests.
				</li>
				<li>
					<strong>No buffering.</strong> Due to Node.js outputting data in chunks there is never any buffer.
				</li>
			</ul>
		</section>
		<section>
			<h2>Creation</h2>
			<h3>Development</h3>
			<p>
				Ryan Dahl created Node.js in 2009 after he was challenged by problems which he believed should have been quite simple. The challenge he faced was updating a progress meter on a webpage for uploading files with Ruby web servers. Dahl combined his knowledge of event-driven servers with what he viewed as an appropriate language, Javascript to create the first version of Node.js.
			</p>
			<h3>Who Manages Node.js</h3>
			<p>
				Node.js was originally developed and maintained by Ryan Dahl and then later sponsored by a software and services company names Joyent. Dahl is no longer heavily involved in the project and advises from the sidelines. Joyent manages Node.js currently.
			</p>
		</section>
		<section>
			<h2>Version History</h2>
			<table>
				<caption>Node.js Version History</caption>
				<thead>
					<tr>
						<th scope= "col">Release Version</th>
						<th scope= "col">Status</th>
						<th scope= "col">Code Name</th>
						<th scope= "col">Release Date</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>V0.10.x</td>
						<td>End-of-life</td>
						<td></td>
						<td>11-03-2013</td>
					</tr>
					<tr>
						<td>V0.12.x</td>
						<td>End-of-life</td>
						<td></td>
						<td>06-02-2015</td>
					</tr>
					<tr>
						<td>4.x</td>
						<td>End-of-life</td>
						<td>Argon</td>
						<td>08-09-2015</td>
					</tr>
					<tr>
						<td>5.x</td>
						<td>End-of-life</td>
						<td></td>
						<td>29-10-2015</td>
					</tr>
					<tr>
						<td>6.x	</td>
						<td>End-of-life</td>
						<td>Boron</td>
						<td>26-04-2016</td>
					</tr>
					<tr>
						<td>7.x</td>
						<td>End-of-life</td>
						<td></td>
						<td>25-10-2016</td>
					</tr>
					<tr>
						<td>8.x</td>
						<td>End-of-life</td>
						<td>Carbon</td>
						<td>30-05-2017</td>
					</tr>
					<tr>
						<td>9.x</td>
						<td>End-of-life</td>
						<td></td>
						<td>01-01-2017</td>
					</tr>
					<tr>
						<td>10.x</td>
						<td>Older version, still maintained</td>
						<td>Dubnium</td>
						<td>24-04-2018</td>
					</tr>
					<tr>
						<td>11.x</td>
						<td>End-of-life</td>
						<td></td>
						<td>23-10-2018</td>
					</tr>
					<tr>
						<td>12.x</td>
						<td>Older version, still maintained</td>
						<td>Erbium</td>
						<td>23-04-2019</td>
					</tr>
					<tr>
						<td>13.x</td>
						<td>End-of-life</td>
						<td></td>
						<td>22-10-2019</td>
					</tr>
					<tr>
						<td>14.x</td>
						<td>Current</td>
						<td>Fermium</td>
						<td>21-04-2020</td>
					</tr>
					<tr>
						<td>15.x</td>
						<td>Pending</td>
						<td></td>
						<td>20-10-2020</td>
					</tr>
					<tr>
						<td>16.x</td>
						<td>Pending</td>
						<td>Gallium</td>
						<td>20-04-2021</td>
					</tr>
				</tbody>
			</table>
		</section>
		<aside>
			<h2>Node.js Users</h2>
			<ol>
				<li>
					<img src="images/Netflix_logo.jpg" alt="Netflix logo" title="Filesize 87kb" />
					Netflix
				</li>
				<li>
					<img src="images/Uber_logo.jpg" alt="Uber logo" title="Filesize 562 bytes" />
					Uber
				</li>
				<li>
					<img src="images/Ebay_logo.jpg" alt="Ebay logo" title="Filesize 87kb" />
					Ebay
				</li>
				<li>
					<img src="images/Linkedin_logo.jpg" alt="Linkedin logo" title="Filesize 87kb" />
					Linkedin
				</li>
				<li>
					<img src="images/Trello_logo.jpg" alt="Trello logo" title="Filesize 87kb" />
					Trello
				</li>
			</ol>
		</aside>
		<section>
			<h2 class= "Future">The Future of Node.js</h2>
			<p class= "Future">
				Node.js is has grown rapidly and will continue to grow due to the fact that it is a long-term solution. It will continue to be a key tool for complicated software infrastructures for years to come. This is due to its impressive key features mentioned earlier and the fact that it can be used for back end, front end and mobile development with ease.
			</p>
		</section>

	<?php include "footer.inc" ?>
</body>
</html>
 <script src="scripts/topic.js"></script>
