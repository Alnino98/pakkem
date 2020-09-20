setTimeout(function () {
    var xmlHttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("total_pendaftar").innerHTML = this.responseText;

        }
    }
    xmlhttp.open("GET", "http://localhost/pakkem/admin/models/chart.php?kategori=2", true);
    xmlhttp.send();
}, 2000);

function chart() {
    var xmlhttp = new XMLHttpRequest();
    var response;
    setInterval(function () {
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                response = this.responseText;
                var ctxL = document.getElementById("lineChart").getContext('2d');
                var myLineChart = new Chart(ctxL, {
                    type: 'line',
                    data: {
                        labels: ["Jan", "Feb", "March", "April", "May", "Jun", "Jul", "Agust", "Sept", "Oct", "Nov", "Dec"],
                        datasets: [{
                            label: "Grafik jumlah anggota",
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
        xmlhttp.open("GET", "http://localhost/pakkem/admin/models/chart.php?kategori=3", true);
        xmlhttp.send();
    }, 2000);
}