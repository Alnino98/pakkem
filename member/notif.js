setInterval(function(){
	var xmlhttp = new XMLHttpRequest();
	var response;
	xmlhttp.onreadystatechange = function () {
	    if (this.readyState == 4 && this.status == 200) {
	        response = this.responseText;
	        // document.getElementById("notifikasi").innerHTML = response;
	        document.getElementById("keterangan").innerHTML = response;
	    }
	}
	xmlhttp.open("GET", "models/notif.php?kategori=1", true);
	xmlhttp.send();
},2000);

setInterval(function(){
	var xmlhttp = new XMLHttpRequest();
	var response;
	xmlhttp.onreadystatechange = function () {
	    if (this.readyState == 4 && this.status == 200) {
	        response = this.responseText;
	        document.getElementById("notifikasi").innerHTML = response;
	    }
	}
	xmlhttp.open("GET", "models/notif.php?kategori=2", true);
	xmlhttp.send();
},2000);
var name;
function done(name){
	var xmlhttp = new XMLHttpRequest();
	var response;
	xmlhttp.onreadystatechange = function () {
	    if (this.readyState == 4 && this.status == 200) {
			response = this.responseText;
	    }
	}
	xmlhttp.open("GET", "models/notif.php?kategori=3&email="+name, true);
	xmlhttp.send();
	
}