//Chart atau Grafik member pendaftar
var xmlhttp = new XMLHttpRequest();
var response;
xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        response = this.responseText;
        var ctxL = document.getElementById("lineChart").getContext('2d');
        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "March", "April", "May", "Jun", "Jul", "Agust", "Sept", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Grafik jumlah mendaftar",
                    data: response,
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
var ctxD = document.getElementById("doughnutChart").getContext('2d');
var myLineChart = new Chart(ctxD, {
    type: 'doughnut',
    data: {
        labels: ["Pasif", "Aktif", "Total anggota"],
        datasets: [{
            data: [300, 50, 100],
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