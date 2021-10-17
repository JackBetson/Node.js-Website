/**
* Author: Jack Betson 102580449
* Target: quiz.html
* Purpose: This file is for functionality in result.html
* Last updated: 28/09/2020
* Credits:
*/

"use strict";

function getData()
{

	document.getElementById("user_name").textContent = localStorage.uname;
	document.getElementById("idSpot").textContent = localStorage.id;
	document.getElementById("scoreSpot").textContent = localStorage.score;
	document.getElementById("attemptSpot").textContent = localStorage.attempts;
	if (localStorage.attempts == "3")
	{
		document.getElementById("retryButton").style.display = "none";
	}
	


}


function init(){
	getData();
}


//Wait to run your initialization code until the DOM is fully loaded. This is needed
// when wanting to access elements that are later in the HTML than the <script>.
if(document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
} else {
    //The DOMContentLoaded event has already fired. Just run the code.
    init();
}

//https://stackoverflow.com/questions/40558819/document-getelementbyid-returns-null-value
//above code was added as i could not run my result.html without the getElement returning null. I could either move the script element
//down in the html out of the head or use theabove code. I belive the above code is a better option.