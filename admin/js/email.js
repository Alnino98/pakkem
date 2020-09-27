setTimeout(function(){
    document.getElementById("wait").innerHTML = "Waiting...";
}, 100);

setInterval(function(){
    var xmlhttp = new XMLHttpRequest();
    var response;
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            response = this.responseText;
            document.getElementById("wait").innerHTML = "Email masuk";
            document.getElementById("email").innerHTML = response;
        }
    }
    xmlhttp.open("GET", "models/email_model.php?id=1", true);
    xmlhttp.send();
}, 3000);