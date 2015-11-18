"use strict"

var interval = 3000;
var numberOfBlocks = 9;
var numberOfTarget = 3;
var targetBlocks = [];
var selectedBlocks = [];
var timer;
var num_try = 0;
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
	var blocks = $$(".block");
	clearInterval(timer);
	timer = true;
	for (var i = 0; i < numberOfBlocks; i++) {
		blocks[i].removeClassName("target");
		blocks[i].removeClassName("selected");
		blocks[i].stopObserving("click");
	}
}

function startToSetTarget(){
	clearInterval(timer);
	timer = null;
	$("state").textContent = "Ready!";
	
	targetBlocks = [];
	selectedBlocks = [];
	var blocks = $$(".block");
	for (var i = 0; i < targetBlocks.length; i++) {
		blocks[targetBlocks[i]].removeClassName("target");
	}
	var block_number =[0,1,2,3,4,5,6,7,8];
	for (var i = 0; i < 8; i++) { //중복되지 않는 난수
		var rand = Math.floor(Math.random() * 8)
		var temp = block_number[i];
		block_number[i] = block_number[rand];
		block_number[rand] = temp;
	};
	for (var i = 0; i < 3; i++) {
		targetBlocks.push(block_number[i]);
	}
	console.log(targetBlocks[0]+"@@");
	console.log(targetBlocks[1]+"@@");
	console.log(targetBlocks[2]+"@@");
	if (timer == null) {
		timer = setTimeout(setTargetToShow, 3000); 

	} 
	else {
		clearInterval(timer); 
		timer = null;
	}
	
}

function setTargetToShow(){
	clearInterval(timer);
	timer = null;
	$("state").textContent = "Memorize!";
	var targetblock = $$("div#blocks div.block.normal");
	for (var i = 0; i < 3; i++) {
		targetblock[targetBlocks[i]].addClassName("target");
		console.log(targetblock[targetBlocks[i]]+"///"+targetBlocks[i]);
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
	clearInterval(timer);
	timer = null;
	$("state").textContent = "Select!";
	var blocks = $$(".block");
	for (var i = 0; i < 9; i++) {//타겟 블록외에 다른 블록 지정할 수도 있으니 전체 해제
		blocks[i].removeClassName("target");
		blocks[i].observe("click", clicked);
	}
	if (timer == null) {
		timer = setTimeout(selectToResult, 3000); 
	} 
	else {
		clearInterval(timer); 
		timer = null;
	}

}

function selectToResult(){
	clearInterval(timer);
	timer = null;
	$("state").textContent = "Checking!";
	
	var blocks = $$(".block");
	for (var i = 0; i < 9; i++) {
		blocks[i].removeClassName("selected");
		blocks[i].stopObserving("click");
	}
	var check = 0;
	for (var i = 0; i < 3; i++) {
		for (var j = 0; j < 3; j++) {
			if (targetBlocks[i] == selectedBlocks[j]) {
				check++;
			}
		}
	}
	var answer = ($("answer").innerHTML).split("/");
	console.log(answer[0] + "eee"+ check);
	num_try +=numberOfTarget;
	$("answer").textContent = (parseInt(answer[0]) + check) + "/" + num_try;
	if (timer == null) {
		timer = setTimeout(startToSetTarget, 3000); 
	} 
	else {
		clearInterval(timer); 
		timer = null;
	}
}
function clicked(){// 블록 클릭했을때
	if (selectedBlocks.length < 3) {
		this.addClassName("selected");
		this.stopObserving("click");
		selectedBlocks.push(this.readAttribute("data-index"));
	}

}
