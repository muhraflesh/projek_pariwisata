<h1 class="h3 mb-2 text-gray-800">Destinasi Wisata</h1>

<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Destinasi Wisata</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800" id="totalDestinasiWisata"></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-pie-chart fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Sudah Terverifikasi</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800" id="destinasiTerverifikasi"></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-check fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Menunggu Verifikasi</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800" id="menungguVerifikasi"></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hourglass fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                            Tertolak</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800" id="destinasiReject"></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-ban fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        Chart
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-7">
                <canvas id="barChart"></canvas>
            </div>
            <div class="col-md-5">
                <canvas id="pieChart"></canvas>
            </div>
        </div>
    </div>
</div>


<script src="assets/vendor/jquery/jquery/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.1.0/chart.min.js" integrity="sha512-RGbSeD/jDcZBWNsI1VCvdjcDULuSfWTtIva2ek5FtteXeSjLfXac4kqkDRHVGf1TwsXCAqPTF7/EYITD0/CTqw==" crossorigin="anonymous"></script>

<script>
    loadChart();

    function loadChart(){
        $.ajax({
            url     : "<?php echo base_url(); ?>Dashboard/getCharts",
            type  : "POST",
            data    : {},
			dataType : 'json',
			async : true,
            success : function(response){
                console.log(response)
                if(response.status_code == 200) {
                    var kecamatan = []
                    var totalByKecamatan = []
                    var jenisUsaha = []
                    var totalByJenis = []
                    var totalDestinasi = response.totalWisata.length
                    var destinasiVerified = 0
                    var menungguApprove = 0
                    var rejected = 0

                    for(var x = 0; x < response.wisataByKecamatan.length; x++) {
                        var row = response.wisataByKecamatan[x]
                        kecamatan.push(row.kecamatan)
                        totalByKecamatan.push(row.total)
                    }

                    for(var x = 0; x < response.totalWisata.length; x++) {
                        var row = response.totalWisata[x]
                        if(row.approval_status == 0) {
                            menungguApprove = menungguApprove + 1
                        } else if(row.approval_status == 1) {
                            destinasiVerified = destinasiVerified + 1
                        } else {
                            rejected = rejected + 1
                        }
                    }

                    for(var x = 0; x < response.wisataByJenis.length; x++) {
                        var row = response.wisataByJenis[x]
                        jenisUsaha.push(row.jenis_usaha)
                        totalByJenis.push(row.total)
                    }
                    console.log("totalByKecamatan")
                    console.log(totalByKecamatan)

                    var ctx = document.getElementById('barChart').getContext('2d');
                    var chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: kecamatan,
                            datasets: [{
                                label:"Total Destinasi Wisata",
                                backgroundColor: ['#FF5733', '#FFB533', '#F3E212', '#ABF312', '#3EF312', '#12F390', '#12F3C7', '#12C7F3', '#127CF3', '#1231F3', '#7112F3', '#A112F3', '#CE12F3', '#F3129E', '#F3126E', '#F31220', '#F36012'],
                                data: totalByKecamatan
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero:true
                                    }
                                }]
                            }
                        }
                    });

                    var ctx = document.getElementById('pieChart').getContext('2d');
                    var chart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: jenisUsaha,
                            datasets: [{
                                label:"Total Destinasi Wisata",
                                backgroundColor: ['#6412F3', '#1260F3', '#12CAF3', '#12F390', '#09E613', '#DCED0D', '#EDC10D', '#ED950D', '#ED2F0D'],
                                data: totalByJenis
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero:true
                                    }
                                }]
                            }
                        }
                    });

                    $('#totalDestinasiWisata').html(totalDestinasi)
                    $('#destinasiTerverifikasi').html(destinasiVerified)
                    $('#menungguVerifikasi').html(menungguApprove)
                    $('#destinasiReject').html(rejected)
                }
            }
        });
    }
</script>