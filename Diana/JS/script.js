
var urims;
sendbutton.onclick = image_display;
selecting_faile.onchange = readFile;
function image_display(){
	alert(input_email.value + "\n" + input_text_fam.value + "\n" + input_text_name.value + "\n" + input_text_othestvo.value+"\n"+textarea.value);
	var im = document.getElementById("imges");
	im.src = urims;
};
function readFile() {
  let file = selecting_faile.files[0];
	urims = URL.createObjectURL(file);
}

