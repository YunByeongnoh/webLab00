"use strict"
/* CSE3026 : Web Application Development
 * Lab 8 - Maze
 * 
 */

var loser = null;  // whether the user has hit a wall
var end_flag = false;
window.onload = function() {
	$("start").observe("click",startClick);
	$("end").observe("mouseover" ,overEnd);
	var boundaries = $$("div#maze div.boundary");
	for (var i = 0 ; i<boundaries.length; i++) {

		boundaries[i].observe("mouseover",overBoundary);
		boundaries[i].observe("mouseover",overBody);
	};
	$("maze").observe("mouseleave",overBody);

};

// called when mouse enters the walls; 
// signals the end of the game with a loss
function overBoundary(event) {
	loser = true;
	if(end_flag == false){
		$("status").textContent = "you lose! :(";
		var boundaries = $$("div#maze div.boundary");
		console.log(boundaries+"////");
		for (var i = 0; i < boundaries.length; i++) {
			boundaries[i].addClassName("youlose");
		};
	}
}

// called when mouse is clicked on Start div;
// sets the maze back to its initial playable state
function startClick() {
	loser = false;
	end_flag = false;
	$("status").textContent = "Find the end!";
	var boundaries = $$("div#maze div.boundary");
	for (var i = 0; i < boundaries.length; i++) {
		boundaries[i].removeClassName("youlose");
	};

}

// called when mouse is on top of the End div.
// signals the end of the game with a win
function overEnd() {
	if(!loser){
		$("status").textContent = "you win! :)";
		end_flag = true;
	}
}

// test for mouse being over document.body so that the player
// can't cheat by going outside the maze
function overBody(event) {
	overBoundary();
}



