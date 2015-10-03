<!DOCTYPE html>
<html>
<head>
	<title>Chess</title>
	<meta charset="utf-8">
	<style>
	table{
		table-layout: fixed;
	}
	fieldset {
		display: inline-block
	}
	#chessTable {
		float: left;
	}
	img {
		width: 60px;
		height: 50px; 
	}
	td, th {
		border: 1px solid #005599;
		padding: 0px;
	}
	th {
		background-color: #006699;
	}
	td {
		background-color: #E0E0E0;
	}
	#undo, #turn, #timer, #save, #load, #timer2 {
		background-color: #E0E0E0;
		padding: 4px;
		margin: 4px;
		display: inline-flex;
		width: 150px;
		font-size: 200%;
		border: 2px ridge black;
		border-radius: 4px;
		overflow: hidden;
		box-shadow: 2px 2px 3px black;
	}
	#undo {
		font-size: 80%;
		width: 50px;
	}
@media screen and (max-width: 800px) {
	#undo {
		font-size: 100%;
		width: 150px;
	}
}
	#turnLabel {
		float: right;
		font-size: 50%;
	}
	#timer {
		display: initial;
	}
	#timer2 {
		display: none;
	}
	#contact {
		transform: rotate(-90deg)
	}
	#sidebar {
		display: flex;
		flex-direction: column;
		justify-content: space-between;
	}
	#attribution {
		font-size: 80%;
	}
	</style>
</head>
<body>
<main>
<div id="test"></div>
<fieldset><legend>Chess, by Bart Humphries</legend>
<table id="chessTable">
	<tr>
		<td><image id="18" name="black-rook" class="piece black" src="images/black-rook.svg" alt="black rook" ondragover="return false;" draggable="true"></td>
		<th><image id="28" name="black-knight" class="piece black" src="images/black-knight.svg" alt="black knight" ondragover="return false;" draggable="true"></th>
		<td><image id="38" name="black-bishop" class="piece black" src="images/black-bishop.svg" alt="black bishop" ondragover="return false;" draggable="true"></td>
		<th><image id="48" name="black-queen" class="piece black" src="images/black-queen.svg" alt="black queen" ondragover="return false;" draggable="true"></th>
		<td><image id="58" name="black-king" class="piece black" src="images/black-king.svg" alt="black king" ondragover="return false;" draggable="true"></td>
		<th><image id="68" name="black-bishop" class="piece black" src="images/black-bishop.svg" alt="black bishop" ondragover="return false;" draggable="true"></th>
		<td><image id="78" name="black-knight" class="piece black" src="images/black-knight.svg" alt="black knight" ondragover="return false;" draggable="true"></td>
		<th><image id="88" name="black-rook" class="piece black" src="images/black-rook.svg" alt="black rook" ondragover="return false;" draggable="true"></th>
	</tr>
	<tr>
		<th><image id="17" name="black-pawn" class="piece black" src="images/black-pawn.svg" alt="black pawn" ondragover="return false;" draggable="true"></th>
		<td><image id="27" name="black-pawn" class="piece black" src="images/black-pawn.svg" alt="black pawn" ondragover="return false;" draggable="true"></td>
		<th><image id="37" name="black-pawn" class="piece black" src="images/black-pawn.svg" alt="black pawn" ondragover="return false;" draggable="true"></th>
		<td><image id="47" name="black-pawn" class="piece black" src="images/black-pawn.svg" alt="black pawn" ondragover="return false;" draggable="true"></td>
		<th><image id="57" name="black-pawn" class="piece black" src="images/black-pawn.svg" alt="black pawn" ondragover="return false;" draggable="true"></th>
		<td><image id="67" name="black-pawn" class="piece black" src="images/black-pawn.svg" alt="black pawn" ondragover="return false;" draggable="true"></td>
		<th><image id="77" name="black-pawn" class="piece black" src="images/black-pawn.svg" alt="black pawn" ondragover="return false;" draggable="true"></th>
		<td><image id="87" name="black-pawn" class="piece black" src="images/black-pawn.svg" alt="black pawn" ondragover="return false;" draggable="true"></td>
	</tr>
	<tr>
		<td><image id="16" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></td>
		<th><image id="26" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></th>
		<td><image id="36" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></td>
		<th><image id="46" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></th>
		<td><image id="56" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></td>
		<th><image id="66" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></th>
		<td><image id="76" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></td>
		<th><image id="86" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></th>
	</tr>
	<tr>
		<th><image id="15" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></th>
		<td><image id="25" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></td>
		<th><image id="35" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></th>
		<td><image id="45" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></td>
		<th><image id="55" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></th>
		<td><image id="65" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></td>
		<th><image id="75" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></th>
		<td><image id="85" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></td>
	</tr>
	<tr>
		<td><image id="14" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></td>
		<th><image id="24" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></th>
		<td><image id="34" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></td>
		<th><image id="44" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></th>
		<td><image id="54" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></td>
		<th><image id="64" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></th>
		<td><image id="74" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></td>
		<th><image id="84" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></th>
	</tr>
	<tr>
		<th><image id="13" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></th>
		<td><image id="23" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></td>
		<th><image id="33" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></th>
		<td><image id="43" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></td>
		<th><image id="53" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></th>
		<td><image id="63" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></td>
		<th><image id="73" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></th>
		<td><image id="83" name="blank-blank" class="piece" src="images/blank-blank.svg" alt="" ondragover="return false;" draggable="false"></td>
	</tr>
	<tr>
		<td><image id="12" name="white-pawn" class="piece white" src="images/white-pawn.svg" alt="white pawn" ondragover="return false;" draggable="true"></td>
		<th><image id="22" name="white-pawn" class="piece white" src="images/white-pawn.svg" alt="white pawn" ondragover="return false;" draggable="true"></th>
		<td><image id="32" name="white-pawn" class="piece white" src="images/white-pawn.svg" alt="white pawn" ondragover="return false;" draggable="true"></td>
		<th><image id="42" name="white-pawn" class="piece white" src="images/white-pawn.svg" alt="white pawn" ondragover="return false;" draggable="true"></th>
		<td><image id="52" name="white-pawn" class="piece white" src="images/white-pawn.svg" alt="white pawn" ondragover="return false;" draggable="true"></td>
		<th><image id="62" name="white-pawn" class="piece white" src="images/white-pawn.svg" alt="white pawn" ondragover="return false;" draggable="true"></th>
		<td><image id="72" name="white-pawn" class="piece white" src="images/white-pawn.svg" alt="white pawn" ondragover="return false;" draggable="true"></td>
		<th><image id="82" name="white-pawn" class="piece white" src="images/white-pawn.svg" alt="white pawn" ondragover="return false;" draggable="true"></th>
	</tr>
	<tr>
		<th><image id="11" name="white-rook" class="piece white" src="images/white-rook.svg" alt="white rook" ondragover="return false;" draggable="true"></th>
		<td><image id="21" name="white-knight" class="piece white" src="images/white-knight.svg" alt="white knight" ondragover="return false;" draggable="true"></td>
		<th><image id="31" name="white-bishop" class="piece white" src="images/white-bishop.svg" alt="white bishop" ondragover="return false;" draggable="true"></th>
		<td><image id="41" name="white-queen" class="piece white" src="images/white-queen.svg" alt="white queen" ondragover="return false;" draggable="true"></td>
		<th><image id="51" name="white-king" class="piece white" src="images/white-king.svg" alt="white king" ondragover="return false;" draggable="true"></th>
		<td><image id="61" name="white-bishop" class="piece white" src="images/white-bishop.svg" alt="white bishop" ondragover="return false;" draggable="true"></td>
		<th><image id="71" name="white-knight" class="piece white" src="images/white-knight.svg" alt="white knight" ondragover="return false;" draggable="true"></th>
		<td><image id="81" name="white-rook" class="piece white" src="images/white-rook.svg" alt="white rook" ondragover="return false;" draggable="true"></td>
	</tr>
	<tr>
		<td id="attribution" colspan="8">Piece images are from https://commons.wikimedia.org/wiki/Category:SVG_chess_pieces<br>
		(This is the legal disclaimer that allows me to use these images.)</td>
	</tr>
</table>
<div id="sidebar">
	<button id="undo">Undo</button>
	<button id="save">Save</button>
	<button id="load">Load</button>
	<button id="timer">Timer</button>
	<button id="timer2">&#9654;</button>
	<button id="turn">Turn&nbsp;&nbsp;&nbsp;<label id="turnLabel">(white)</label></button>
	<!--<div id="contact"><a href="mailto:bart.humphries+chess@gmail.com>bart.humphries@gmail.com</a></div> -->
</div> <!-- end sidebar div -->
</fieldset>
</main>
<script type="text/javascript">
"use strict"; // strict JavaScript is better JavaScript
// The code is contained within a self-executing anonymous function
// This pres any "global" variables from truly being global, and allows this code to be mixed with other libraries.
(function() {
	// Having started the code, we want to wait until the browser is done parsing CSS, etc.
	// Otherwise, the background color of the "turn" button can't be changed.
	window.addEventListener("load", initialize);
	function initialize(){
//var test = document.getElementById("test").innerHTML;
		// Creating the three objects and their properties
		// Some of these have not yet been implemented -- there isn't yet any error checking.
		
		// myPiece = the piece being picked up
		var myPiece = {
			id:"11",
			name:"white-rook",
			src:"images/white-rook.svg",
			color:"white",
			type:"rook",
			alt:"white pawn",
		};
		// yourPiece:the piece being replaced (might be an empty piece)
		var yourPiece = {
			id:"11",
			name:"white-rook",
			src:"images/white-rook.svg",
			color:"white",
			type:"rook",
			alt:"white pawn",
		};
		// Because I have to set the piece picked up when it's picked up, before I know where the user wants to put it, I have a separate undoMyPiece
		var undoMyPiece = {
			id:"81",
			name:"white-rook",
			src:"images/white-rook.svg",
			color:"white",
			type:"rook",
			alt:"white pawn",
		};
		// Because I have to set the destination/target piece picked up and don't want to compare it then, I have a separate undoYourPiece
		var undoYourPiece = {
			id:"11",
			name:"white-rook",
			src:"images/white-rook.svg",
			color:"white",
			type:"rook",
			alt:"white pawn",
		};
		// The empty piece -- every square on the board has a piece
		// Either those pieces are "real" or they're "empty"
		var emptyPiece = {
			name:"blank-blank",
			src:"images/blank-blank.svg",
			color:"blank",
			type:"blank",
			alt:"",
		};
		// This variable keeps track of whose turn it is.
		var turn = true;
		
		// Normally chess switches players on every piece move
		// Luckily, as soon as a King moves, it can no longer castle
		var whiteKingCastle = true;
		var blackKingCastle = true;

		function e(element) {
			return document.getElementById(element);
		}

		// Event listeners
		e("chessTable").addEventListener("dragstart", startDrag);
		// The following aren't necessary, but at one point ancient Firefox lore says that they were
		// if I ever have unexplained Firefox problems, I'll see what reenabling them does
		//e("chessTable").addEventListener("dragover", firefox);
		//e("chessTable").addEventListener("dragenter", firefox);
		e("chessTable").addEventListener("drop", dropped);
		e("undo").addEventListener("click", undo);
		e("timer").addEventListener("click", shrinkTimer);
		e("timer2").addEventListener("click", shrinkTimer);
		e("save").addEventListener("click", saveGame);
		e("load").addEventListener("click", loadGame);
		e("turn").addEventListener("click", checkSwitch);
		
		// Again, this function isn't necessary, but just in case Firefox changes again...
		function firefox(e) {
			e.preventDefault();
			return false;
		}

		// Before I put in the drop shadows, I had the idea of changing the background color when buttons were clicked
		// Commenting out for now, but I might bring it back in later.
/*
		var clickers = document.querySelectorAll(".fancyClick");
		for(var i=0; i < clickers.length; i++) {
			clickers[i].addEventListener("mousedown", mouseDown);
			clickers[i].addEventListener("mouseup", mouseUp);
		}
		
		function mouseDown(e){
			this.style.backgroundColor = "#0000E0";
		}

		function mouseUp(){
			this.style.backgroundColor = "#E0E0E0";
		}
*/
	
		// The timer variables
		var player1Time = 0; // number of quarter seconds "white" has played
		var player2Time = 0; // number of quarter seconds "black" has played
		var time1 = setInterval(countdown,250); // variable "owns" white's timer
		var time2 = false; // timer "owns" black's timer

		// Adds on quarter seconds to a side, also sets display of time played
		function countdown (playerTime) {
			if (turn)
				player1Time++;
			else
				player2Time++;
			e("timer").innerHTML = Math.floor(player2Time / 4 / 60) + ":" + Math.round(player2Time / 4 % 60) + "<br>" + Math.floor(player1Time / 4 / 60) + ":" + Math.round(player1Time / 4 % 60) + "<br>&#9664;";
		}

		// Called later on, when a turn flips; sets/clears the timers
		function reverseTimer() {
			if (time1) {
				clearInterval(time1);
				time1 = false;
			} else {
				time1 = setInterval(countdown,250);
			}
			if (time2) {
				clearInterval(time2);
				time2 = false;
			} else {
				time2 = setInterval(countdown,250);
			}
		}
		
		// The event when a mouse starts dragging a piece (called by event listener)
		function startDrag(e) {
			// Yeah, I could just set these to the super variables now
			// but this is for future stuff down the road
			//e.dataTransfer.setData("text/plain", e.target.id);
			//e.dataTransfer.setData("text/name", e.target.name);
			myPiece.id = e.target.id;
			myPiece.name = e.target.name;
			myPiece.src = e.target.src;
			myPiece.color = myPiece.name.slice(0, myPiece.name.indexOf("-"));
			myPiece.type = myPiece.name.slice(myPiece.name.indexOf("-") + 1, myPiece.name.length);
			
			myPiece.alt = e.target.alt;
		}
		
		// The event when a mouse drops a piece (called by event listener)
		function dropped(e) {
			// This preventDefault is just for Firefox, because Firefox decided to default to parsing a dropped element.
			e.preventDefault();
			yourPiece.id = e.target.id;
			yourPiece.name = e.target.name;
			yourPiece.src = e.target.src;
			yourPiece.color = name.slice(0, yourPiece.name.indexOf("-"));
			yourPiece.type = (yourPiece.name.indexOf("-") + 1, yourPiece.name.length);
			yourPiece.alt = e.target.alt;
			capturePiece();
		}
		
		// Just made it easier to debug -- it's not used for anything
		function clearTest() {
			e("test").innerHTML = "";
		}
		
		// What happens when a piece is captured (remember, every square has a piece)
		function capturePiece() {
			var destinationPiece = e(yourPiece.id);
			var sourcePiece = e(myPiece.id);
			if (destinationPiece == sourcePiece) {
				return;
			}
			if ("white" == myPiece.color && !turn) {
				return;
			}
			if ("black" == myPiece.color && turn) {
				return;
			}
			undoMyPiece.id = myPiece.id;
			undoMyPiece.name = myPiece.name;
			undoMyPiece.src = myPiece.src;
			undoMyPiece.color = myPiece.color;
			undoMyPiece.type = myPiece.type
			undoMyPiece.alt = myPiece.alt;
			undoMyPiece.source = e(myPiece.id);
			undoYourPiece.id = yourPiece.id;
			undoYourPiece.name = yourPiece.name;
			undoYourPiece.src = yourPiece.src;
			undoYourPiece.color = yourPiece.color;
			undoYourPiece.type = yourPiece.type;
			undoYourPiece.alt = yourPiece.alt;
			undoYourPiece.destination = e(yourPiece.id);
			if ("king" == myPiece.type && canCastle()) {
				if (confirm("Would you like to castle?"))
					switchTurn();
				if (turn)
					whiteKingCastle = false;
				blackKingCastle = false;
			}
			
			destinationPiece.name = myPiece.name;
			destinationPiece.src = myPiece.src;
			destinationPiece.alt = myPiece.alt;
			destinationPiece.draggable = true;
			
			sourcePiece.name = emptyPiece.name;
			sourcePiece.src = emptyPiece.src;
			sourcePiece.alt = emptyPiece.alt;
			sourcePiece.draggable = false;
			
			switchTurn();
		}
		
		// May the king castle? (called in capturePiece())
		function canCastle() {
			if (turn && whiteKingCastle)
				return true;
			else if (!turn && blackKingCastle)
				return true;
			return false;
		}
		
		// The function called by the undo -- similar to capturePiece()
		function undo() {
			var destinationPiece = undoYourPiece.destination;
			var sourcePiece = undoMyPiece.source;

			
			destinationPiece.name = undoYourPiece.name;
			destinationPiece.src = undoYourPiece.src;
			destinationPiece.alt = undoYourPiece.alt;
			destinationPiece.draggable = true;
			
			sourcePiece.name = undoMyPiece.name;
			sourcePiece.src = undoMyPiece.src;
			sourcePiece.alt = undoMyPiece.alt;
			sourcePiece.draggable = true;
			
			switchTurn();
		}

		// When the timer is clicked, "alternate" timer is displayed
		function shrinkTimer () {
			var timerDisplay = window.getComputedStyle(e("timer")).getPropertyValue("display");
			if ("none" == timerDisplay) {
				e("timer").style.display = "inline-block";
				e("timer2").style.display = "none";
			} else {
				e("timer").style.display = "none";
				e("timer2").style.display = "inline-block";
			}
		}
		
		// left in for legacy reasons, it actually does nothing now
		function checkSwitch () {
		/*
			if (confirm("Do you want to pass your turn?"))
				switchTurn();
		*/
		}

		// Called when a player has moved (unless castling is occuring)
		function switchTurn () {
			flipTurn();
			reverseTimer();
		}
		
		// Flip the turn color/display
		function flipTurn() {
			turn = !turn;
			if (turn)
				e("turnLabel").innerHTML = "(white)";
			else
				e("turnLabel").innerHTML = "(black)";
			if (turn)
				e("turn").style.backgroundColor = "#E0E0E0";
			else
				e("turn").style.backgroundColor = "#006699";
		}

		// Google Developer costs $ -- in the meantime I cache it in localStorage
		// because too many people block cookies, also I call it once during the
		// initial runthrough just in case someone calls load before clicking save
		saveGame();
		function saveGame() {
			for (var i = 1; i <= 8; i++)
				for (var k = 1; k <=8; k++)
					localStorage[i * 10 + k] = e(i * 10 + k).name;
		}

		// Does what it says ;)
		function loadGame() {
			var alertString = "";
			for (var i = 1; i <= 8; i++) {
				for (var k = 1; k <= 8; k++) {
					var destinationPiece = e(i * 10 + k);
					destinationPiece.name = localStorage[i * 10 + k];
					destinationPiece.src = "images/" + destinationPiece.name + ".svg";
					destinationPiece.alt = localStorage[i * 10 + k];
					if ("blank-blank" == destinationPiece.name)
						destinationPiece.draggable = false;
					else
						destinationPiece.draggable = true;
				}
			}
		}
	}
})();
</script>
</body>
</html>
