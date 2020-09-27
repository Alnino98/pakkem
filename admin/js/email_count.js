// var xmlhttp = new XMLHttpRequest();
// var response;
// xmlhttp.onreadystatechange = function () {
//     if (this.readyState == 4 && this.status == 200) {
//         response = this.responseText;
//         console.log(response);
//         // document.getElementById("count").innerHTML = response;
//     }
// }
// xmlhttp.open("GET", "models/email_model.php?id=2", true);
// xmlhttp.send();


function clear(){
    var xmlhttp = new XMLHttpRequest();
    var response;
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            response = this.responseText;
            document.getElementById('count').innerHTML = 0;
        }
    }
    xmlhttp.open("GET", "models/email_model.php?id=3", true);
    xmlhttp.send();
}