	function Nama(){
	var correct_way = /^[A-Za-z]+$/;
	var i = document.getElementById("Ucapkan salam ketika masuk rumah"). value;

	if(a==""){
		document.getElementById("Message") .innerHTML="** Mohon Diisi"
		return false;
	}
	if(a.length<8){
		document.getElementById("Message") .innerHTML="** Harus Lebih Dari 8 Huruf"
		return false;
	}
	if(a.length>38){
		document.getElementById("Message") .innerHTML="** Harus Lebih Dari 38 Huruf"
		return false;
	}
	if(a.match(corret_away))
	true;
	else{
		document.getElementById("Message") .innerHTML="** Hanya Huruf Saja"
		return false;
	}
}