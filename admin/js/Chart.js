//Chart atau Grafik member pendaftar
var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        var response1;
        response1 = this.responseText;
        var ctxL = document.getElementById("lineChart").getContext('2d');
        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "March", "April", "May", "Jun", "Jul", "Agust", "Sept", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Grafik jumlah mendaftar",
                    data: response1,
                    backgroundColor: [
                        'rgb(24, 230, 51)',
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
xmlhttp.open("GET", "models/chart.php?kategori=1", true);
xmlhttp.send();

//doughnut
var xmlhttp_rasio = new XMLHttpRequest();
xmlhttp_rasio.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        var response2;
        response2 = this.responseText;
        console.log(response2);

        var ctxD = document.getElementById("doughnutChart").getContext('2d');
        var myLineChart = new Chart(ctxD, {
            type: 'doughnut',
            data: {
                labels: ["Pasif", "Aktif", "Total anggota"],
                datasets: [{
                    data: [2, 50, response2],
                    backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C"],
                    hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870"]
                }]
            },
            borderWidth: 100,
            weight: 720,
            options: {
                aspectRatio: 1,
                responsive: true,
                animateScale: true,
                cutoutPercentage: 70
            }
        });
    }
}
xmlhttp_rasio.open("GET", "models/chart.php?kategori=4", true);
xmlhttp_rasio.send();