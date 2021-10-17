/**
* Author: Jack Betson 102580449
* Target: quiz.html
* Purpose: This file is for functionality in topic.html
* Last updated: 28/09/2020
* Credits:
*/

"use strict";

	var i = 0;
	var txt = "Node.js is an open source, cross-platform runtime environment used to develop networking and server-side applications. Applications created using Node.js are written in Javascript and they can be run within the runtime on Microsoft Windows, Mac OS X and Linux. Node.js is very handy and provides a rich library of various Javascript modules which makes the development of web applications a whole lot easier.";
	var typeSpeed = 50;
function textType() {
	if (i < txt.length) 
	{
	    document.getElementById("introTypewriter").innerHTML += txt.charAt(i);
    	i += 1;
    	setTimeout(textType, typeSpeed);
	}
}

function init()
{
	textType();
	document.getElementById("topicLink").style.backgroundColor = "red";
	
}

window.onload = init();