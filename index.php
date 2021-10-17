<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Index page for Assignment 1 - All about Node.js" />
  <meta name="keywords" content="HTML5, tags" />
  <meta name="author" content="Jack Betson"  />
  <title>All About Node.js Index</title>
  <link href= "styles/style.css" rel="stylesheet"/>
  
</head>

<body>
	<?php include "header.inc";?>
	<?php include "menu.inc"; ?>
		<section id= "intro">
			<h2>
				Introduction To Node.js
			</h2>
			<p> 
				Node.js is a server-side platform built on Google Chrome's JavaScript Engine. Node.js was developed by Ryan Dahl in 2009(more on him in a bit), it is currently running v0.10.36. As defined by the official documentation, the definition of Node,js is as follows.
			</p>
			<p><i>
				"Node.js is a platform built on Chrome's JavaScript runtime for easily building fast and scalable network applications. Node.js uses an event-driven, non-blocking I/O model that makes it lightweight and efficient, perfect for data-intensive real-time applications that run across distributed devices.
			</i><p>
		</section>
		<section>
			<h2>
				About The Creator
			</h2>
			
			<p id="RyanDahl">
				<a id="RyanPic" href="images/Ryan_Dahl.jpg"> <img src="images/Ryan_Dahl_small.jpg" alt="Ryan Dahl - Node.js Creator" title="Filesize 547kb"/></a>
				 Ryan Dahl is an American software engineer adn the original developer of not only Node.js, but also the Deno Javascriptand Typescript runtime. Dahl was born in 1981 and grew up in San Deigo, California. Dahl was very interested in mathematics and algebraic topology early on in his life and studied both at college but later got bored as they were "not so applicable to real life." Dahl announced in January of 2012 that he would be stepping away from the Node.js project after working on it for 3 years. Dahl is still an employee at Joyent and advises from the sideline but is no longer included in the the day-to-day bug fixes.
			</p>
		</section>

	<img id ="Bibliography" src="images/Bibliography.jpg" alt="Bibliography" usemap="#linkmap">
	<map name="linkmap">

	<area href="https://en.wikipedia.org/wiki/Ryan_Dahl" coords="43,73,30" shape="circle" alt= "Ryan Dahl - wikipedia">

    <area href="http://www.h-online.com/open/features/The-H-Speed-Guide-to-Node-js-1363974.html%3Fpage=2" coords="107,51,197,101" shape="rect" alt= "The H Online">

    <area href="https://nodejs.org/en/" coords="235,73,245,65,259,72,269,69,279,62,293,70,313,64,319,48,360,72,356,87,349,96,332,85,314,96,307,115,297,122,284,116,284,95,267,89,261,93,248,87,234,91,233,82" shape="poly" alt= "Node.js Website">

    <area href="https://www.w3schools.com/html/html_images_imagemap.asp" coords="442,66,35" shape="circle" alt= "Image Maps w3schools">

    <area href="https://www.w3schools.com/html/html_youtube.asp" coords="443,174,35" shape="circle" alt= "Youtbe Embedd w3schools">

    <area href="https://en.wikipedia.org/wiki/Node.js" coords="43,168,32" shape="circle" alt= "Node.js Wikipedia">

    <area href="https://yourstory.com/mystory/why-node-is-the-future" coords="190,155,347,196" shape="rect" alt= "My story website">

    <area href="https://www.youtube.com/watch?v=yEHCfRWz-EI&amp;feature=youtu.be" coords="83,276,191,309" shape="rect" alt= "Youtube Video link">

    <area href="https://www.tutorialspoint.com/nodejs/nodejs_introduction.htm" coords="281,255,463,309" shape="rect" alt= "tutorialspoint node.js">

</map>
	<?php include "footer.inc" ?>
</body>
</html>
 <script src="scripts/index.js"></script>