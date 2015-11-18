"use strict"

var interval = 3000;
var numberOfBlocks = 9;
var numberOfTarget = 3;
var targetBlocks = [];
var selectedBlocks = [];
var timer;
var state;
var answer;
document.observe('dom:loaded', function(){
	$("start").observe("click",stopToStart);
	$("stop").observe("click",stopGame);
});

function stopToStart(){
    stopGame();
    startToSetTarget();
}

function stopGame(){
	$("state").textContent = "Stop";
	$("answer").textContent = "0/0";

}

function startToSetTarget(){
	$("state").textContent = "Ready!";
	$("answer").textContent = "0/0";
	targetBlocks = [];

	for (var i = 0; i < 3; i++) {
		targetBlocks[i] = Math.floor(Math.random() * 8)	 
	};
	if (timer == null) {
		timer = setTimeout(setTargetToShow, 3000); 

	} 
	else {
		clearInterval(timer); 
		timer = null;
	}
}

function setTargetToShow(){
	timer = null;
	$("state").textContent = "Memorize!";
	var targetblock = $$("div#blocks div.block.normal");
	for (var i = 0; i < 3; i++) {
		targetblock[targetBlocks[i]].addClassName("target");
	};
	if (timer == null) {
		timer = setTimeout(showToSelect, 3000); 
	} 
	else {
		clearInterval(timer); 
		timer = null;
	}
}

function showToSelect(){
	timer = null;
	$("state").textContent = "Select!";
	
	var targetblock = $$("div#blocks div.block.normal");
	for (var i = 0; i < 3; i++) {
		targetblock[targetBlocks[i]].removeClassName("target");
	};
	var clicked = $("blocks").observe("click",clicking);
	selectedBlocks.push(clicked);
	console.log(selectedBlocks[0]+"///");

	for (var i = 0; i < selectedBlocks.length; i++) {
		selectedBlocks[i].addClassName("selected");
	};
	if (timer == null) {
		timer = setTimeout(selectToResult, 3000); 
	} 
	else {
		clearInterval(timer); 
		timer = null;
	}
}

function selectToResult(){
	$("state").textContent = "Checking!";

}
function clicking(){
	console.log("come");
}