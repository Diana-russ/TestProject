var emil;
var textp;
var name;
var othestvo;
var sms;
var urims;
function read(){
	emil = document.getElementById("One");
	textp = document.getElementById("fam");
	name = document.getElementById("name");
	othestvo = document.getElementById("othestvo");
	sms = document.getElementById("style4");
};
function send(){
	alert(emil.value + "\n" + textp.value + "\n" + name.value + "\n" + othestvo.value+"\n"+sms.value);
	var im = document.getElementById("imges");
	im.src = urims;
};
function readFile(input) {
  let file = input.files[0];
	urims = URL.createObjectURL(file);
	
	
}

