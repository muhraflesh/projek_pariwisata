<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<style>
    /* @media (min-width: 576px) */
    .modal-dialog {
        max-width: 800px;
        margin: 1.75rem auto;
    }
</style>

<div class="row" style="margin-top: 5%;" id="card-download">
    
</div>

<script src="assets/vendor/jquery/jquery.min.js"></script>

<script>
    $('#accordionSidebar.navbar-nav .nav-item .nav-link.active').removeClass('active');
    $('#download_lampiran .nav-link').addClass('active');
    
    loadData()

    function loadData() {
        $.ajax({
            url     : "<?php echo base_url(); ?>Downloaddocument/getAllData",
            type  : "POST",
            data    : {},
			dataType : 'json',
			async : true,
            success : function(response){
                console.log(response)
                if(response.status_code == 200) {
                    var element = ''

                    for(var x = 0; x < response.data.length; x++) {
                        var row = response.data[x]
                        
                        var items = `
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2" style="cursor: pointer;">
                                <a class="" href="<?php echo base_url(); ?>Uploaddocument/downloadDoc/${row.filename}">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                ${row.nama}</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="totalDestinasiWisata"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-file fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div> 
                                </a>
                            </div>   
                        </div>
                        `
                        element = element + items
                    }
                    $('#card-download').html(element)
                }
            }
        });
    }

</script>

