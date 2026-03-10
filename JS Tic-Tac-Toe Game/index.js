
const style = document.createElement("style");
style.innerHTML = ` #gameContainer {
    text-align: center;
    font-family: Arial, sans-serif;
    margin-top: 20px;
}
#cellcontainer {
    display: grid;
    grid-template-columns: repeat(3, 75px);
    width: 225px;
    margin: 20px auto;
    gap: 5px;
}
.cell {
    width: 75px;
    height: 75px;
    border: 2px solid black;
    font-size: 40px;
    line-height: 75px;
    cursor: pointer;
    text-align: center;
}
button {
    margin-top: 15px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
}`;
document.head.appendChild(style);

const gameContainer = document.getElementById("gameContainer");
const cells = document.querySelectorAll(".cell");
const statusText = document.getElementById("statusText");
let title = document.createElement("h1");
title.innerText = "Tic-Tac-Toe";
gameContainer.prepend(title);

let restartButton = document.createElement("button");
restartButton.innerText = "Restart";
restartButton.id = "restartButton";
gameContainer.appendChild(restartButton);
let currentPlayer = "X";
let running = true;
let options = ["","","","","","","","",""];
let winConditions = [
    [0,1,2],[3,4,5],[6,7,8],[0,3,6],[1,4,7],[2,5,8], [0,4,8],[2,4,6]
];
statusText.innerText = "Player X Turn";

for (let i = 0; i < cells.length; i++) {

}