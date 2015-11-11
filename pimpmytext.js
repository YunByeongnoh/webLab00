"use strict"

function myfunc(){
	//alert("Hello, world!");

	
	//document.getElementById("input").style.fontSize = "xx-large";
	var el = document.getElementById('input');
	var style = window.getComputedStyle(el, null).getPropertyValue('font-size');
	var fontSize = parseInt(style); 
	// now you have a proper float for the font size (yes, it can be a float, not just an integer)
	el.style.fontSize = (fontSize + 2) + 'px'; 
}
function interval(){
	setInterval(function(){ myfunc() }, 500);
}
function bling(){
	if ($("checkbox").checked){
		$("input").style.color = "green";
		$("input").style.textDecoration = "underline";
		document.body.style.backgroundImage = "url('hundred.jpg')";
	}
	else{
		$("input").style.color = "black";
		$("input").style.textDecoration = "none";
	}
	
}
window.onload = function() {
   	document.getElementById("noo").onclick = Snoopify;
 }
function Snoopify(){
	document.form1.textarea.value = document.form1.textarea.value.toUpperCase();
	var content = document.form1.textarea.value;
	var splited = content.split(".");
	if(splited[1]){
		splited[0] = splited[0] + "-izzle";
	}
	
	var joined = splited.join(".");
	document.form1.textarea.value = joined;
}


/*
"use strict";

window.onload = function(){
	document.getElementById("bigger").onclick=function(){
		var myVar = setInterval(myFunction,500);
	};
	document.getElementById("checkbox").onchange = function(){
		var text = document.getElementById("input");
		text.className="check";
		var body = document.getElementById("body");
		body.className="background";
	};
	document.getElementById("noo").onclick=function(){
		var text = document.getElementById("input");
		text.value = text.value.toUpperCase();
		var s = text.value;
		var a = s.split("");
		s = a.join("-izzle.");
		text.value = s;
	};
};

function myFunction() {
	var text = document.getElementById("input");
	text.style.fontSize="12pt";
	text.style.fontSize = parseInt(text.style.fontSize) + 2;

}*/