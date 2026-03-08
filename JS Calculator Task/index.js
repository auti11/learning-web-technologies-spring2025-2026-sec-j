
const display = document.getElementById("display");
const keys = document.getElementById("keys");
const calculator = document.getElementById("calculator");
calculator.style.width = "260px";
calculator.style.padding = "20px";
calculator.style.background = "pink";
calculator.style.borderRadius = "10px";
display.style.width = "100%";
display.style.height = "40px";
display.style.fontSize = "20px";
display.style.marginBottom = "10px";
keys.style.display = "grid";

keys.style.gridTemplateColumns = "repeat(4,1fr)";
keys.style.gap = "10px";

let buttons = ["+","7","8","9","-","4","5","6","*","1","2","3","/","0",".","=","AC","%"];
for(let i=0; i<buttons.length; i++){
   let btn = document.createElement("button");
   btn.innerText = buttons[i];
   keys.appendChild(btn);
    
    btn.onclick = function(){
        if(buttons[i] == "="){
            calculate();
        }else if(buttons[i] =="C"){
            clearDisplay();
        }
        else if(buttons[i] =="AC"){
            AllclearDisplay();
        }
        else if(buttons[i] == "%"){
            percentage();
        }
        else{
            appendToDisplay(buttons[i]);
        }
    };
    keys.appendChild(btn);
}
function appendToDisplay(value){
    display.value += value;
}
function clearDisplay(){
    display.value = display.value.slice(0,-1);
}

function AllclearDisplay(){
    display.value = "";
}
function calculate(){
    try{
        display.value=eval(display.value);
    }
    catch{
        display.value="Error";
    }
}
function percentage(){
    display.value = display.value/100;
}


