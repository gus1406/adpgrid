function Opensc() {
	document.getElementById("Sc-container").style.top = '70px';
	document.getElementById("Icon-os").style.display = "none";
	document.getElementById("Icon-cs").style.display = "inline-block";
}

function Closesc() {
	document.getElementById("Sc-container").style.top = '0';
	document.getElementById("Icon-os").style.display = "inline-block";
	document.getElementById("Icon-cs").style.display = "none";
}

function Openmenu() {
	document.getElementById("Menu").style.marginLeft = '0';
}

function Closemenu() {
	document.getElementById("Menu").style.marginLeft = '-100%';
}

function OpenSL() {
	document.getElementById("ShareLink").style.display = "block";
}