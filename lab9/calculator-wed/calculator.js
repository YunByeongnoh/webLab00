"use strict"
window.onload = function () {
    var stack = [];
    var displayVal = "0";
    var end_flag;
    for (var i in $$('button')) {
        $$('button')[i].onclick = function () {
            var value = this.innerHTML;
            var languageCheck = /[0-9]/;
            var fact_flag;
            var high_flag;
            
            var stackLength = stack.length;
            if (languageCheck.test(value)) {
                if(end_flag == 1){
                    document.getElementById('expression').innerHTML = "0";
                    end_flag = 0;
                }
                if (displayVal == "0") {
                   displayVal = value;
               }
               else{
                displayVal = displayVal+value;
            }
            document.getElementById('result').innerHTML = displayVal; 
        }else if (value =="AC") {
            displayVal = "0";
            stack = [];
            fact_flag = 0;
            high_flag = 0;
            document.getElementById('result').innerHTML = displayVal;
            document.getElementById('expression').innerHTML = displayVal;
        }
        else if (value =='.') {
            
            if(displayVal.charAt(displayVal.length-1) =='.')
            {
            }
            else{
               displayVal = displayVal+'.';
           }
           
           document.getElementById('result').innerHTML = displayVal;
       } 
       else{   
        if(displayVal.charAt(displayVal.length-1) == value)
        {
        }
        if(stack[stackLength-1]=="*" || stack[stackLength-1]=="/" || stack[stackLength-1]=="^"){
            high_flag = 1;
            highPriorityCalculator(stack,displayVal);
        }
        
        
        if (value == '!'){
            var fact;
            if(displayVal.charAt(displayVal.length-1) =='!' )
            {
                fact_flag = 1;
            }
            else{
                fact_flag = 1;
                fact = factorial(parseFloat(displayVal));
                displayVal = displayVal+'!';
                stack.push(fact);  
            }
            
        }
        else {
            if(high_flag == 1){
                high_flag = 0;
                if(document.getElementById('expression').innerHTML  == "0"){
                    displayVal = displayVal+value;
                    document.getElementById('expression').innerHTML = displayVal; 
                }
                else{
                    displayVal = displayVal+value;
                    document.getElementById('expression').innerHTML += displayVal; 
                    document.getElementById('result').innerHTML = "0";
                }
            }
            else{
                stack.push(parseFloat(displayVal));
                if(document.getElementById('expression').innerHTML  == "0"){
                    console.log("comein?");
                    displayVal = displayVal+value;
                    document.getElementById('expression').innerHTML = displayVal; 
                }
                else{
                    displayVal = displayVal+value;
                    document.getElementById('expression').innerHTML += displayVal; 
                    document.getElementById('result').innerHTML = "0";
                }
            }
            
            
        }
        if(fact_flag == 1){
            fact_flag = 0;
        }
        else{
            if(high_flag == 1){
                high_flag = 0;
                stack.push(value);
                displayVal="0";
                document.getElementById('result').innerHTML = displayVal;
            }
            else{
                stack.push(value);
                displayVal="0";
                document.getElementById('result').innerHTML = displayVal;
            }
            
        }
        
        if (value == '='){
            displayVal = calculator(stack);
            document.getElementById('result').innerHTML = displayVal;
            stack = [];
            fact_flag = 0;
            end_flag = 1;
            displayVal = 0;
        }
        
    }
}
}

}


function factorial (x) {
    for (var i = x-1; i > 1; i--) {
        x = x* i;
    };
    return x;
}
function highPriorityCalculator(s, val) {
    var operator = s.pop();
    var number = s.pop();
    if(operator == "*"){
        s.push(number * val);
    }
    else if(operator =="/"){
        s.push(number / val);
    }
    else{
        s.push(Math.pow(number,val));
    }

}
function calculator(s) {
    var result = s[0];
    for(var i = 0; i < s.length; i++){
        if(s[i] == "+") {
            result =result + s[i+1];
        }
        else if(s[i] == "-") {
            result = result - s[i+1];
        }
    }
    return result;
}
