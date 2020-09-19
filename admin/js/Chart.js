//Chart/Grafik member

var xmlhttp = new XMLHttpRequest();
var response;
xmlhttp.onreadystatechange=function(){
    if(this.readyState==4 && this.status==200){
        response = this.responseText;
        console.log(response);
        var ctxL = document.getElementById("lineChart").getContext('2d');
        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "March", "April", "May", "Jun", "Jul", "Agust", "Sept", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Grafik jumlah mendaftar",
                    data: response,
                    backgroundColor: [
                        'rgba(105, 0, 132, .2)',
                    ],
                    borderColor: [
                        'rgba(200, 99, 132, .7)',
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true
            }
        });
        }
}
xmlhttp.open("GET","http://localhost/pakkem/admin/models/chart.php", true);
xmlhttp.send();