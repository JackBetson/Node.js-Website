/**
* Author: Jack Betson 102580449
* Target: quiz.html
* Purpose: This file is for functionality in quiz.html
* Last updated: 28/09/2020
* Credits:
*/

"use strict";



function getScore() //Funtion to fetch the users total score based on answers
{
	var score = 0;
	var question1 = document.getElementById("Question1").value;
	var question2 = document.getElementById("2009").checked;
	var question3a = document.getElementById("Uber").checked;
	var question3b = document.getElementById("Netflix").checked;
	var question4 = document.getElementById("Question4").value;
	var question5 = document.getElementById("Question5").value;

	if (question1 == "Joyent")
	{
		score += 1;
	}

	if (question2 == true)
	{
		score += 1;
	}

	if (question3a == true)
	{
		score += 1;
	}

	if (question3b == true)
	{
		score += 1;
	}

	if (question4 == "Ryan Dahl")
	{
		score += 1;
	}

	if (question5 == "15")
	{
		score += 1;
	}

	return score

}

function validate() //function to validate various elements
{
	var errMsg = "";
	var result = true;
	var isUber = document.getElementById("Uber").checked;
	var isNetflix = document.getElementById("Netflix").checked;
	var isMcdonalds = document.getElementById("Mcdonalds").checked;
	var isColes = document.getElementById("Coles").checked;
	var isApple = document.getElementById("Apple").checked;


	if (!(isUber || isNetflix || isMcdonalds || isColes || isApple)){
		errMsg += "Please select at least one big name company.\n";
		result = false;
	}


	if (score == 0)
	{
		errMsg += "Your score is 0, you need to get atleast 1 to continue.\nHint: Netflix is a great site\n"
		result = false;
	}

	if (localStorage.attempts == 3) //prevents user from attempting the quiz if they have tried 3 times already
	{
		errMsg += "You have attempted the quiz 3 times, you cant do it again\n"
		result = false;
	}


	if (errMsg !=""){
		alert(errMsg);
	}

	if (result) //stores users quiz results if there are no errors
	{
		localStorage.uname = document.getElementById("givenname").value + " " + document.getElementById("familyname").value;
		localStorage.id = document.getElementById("studentid").value;
		localStorage.score = score;
		if (localStorage.attempts == null)
		{
			localStorage.attempts = "0"
		}
		else if (localStorage.attempts == "0")
		{
			localStorage.attempts = "1"
		}
		else if (localStorage.attempts == "1")
		{
			localStorage.attempts = "2"
		}
		else if(localStorage.attempts == "2")
		{
			localStorage.attempts = "3"
		}
		
	} 

	return result;
}


function init(){
	document.getElementById("quizLink").style.backgroundColor = "red";
	var quizForm = document.getElementById("quizForm");
	var debug = true
	if (!debug)
	{
		quizForm.onsubmit = validate;
	}
}

window.onload = init; //when the window opens init is called