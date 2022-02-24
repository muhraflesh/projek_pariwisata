<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<style>
    /* @media (min-width: 576px) */
    .modal-dialog {
        max-width: 800px;
        margin: 1.75rem auto;
    }
</style>

<h1 class="h3 mb-3 text-gray-800">Daftar Dokumen Lampiran</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a class="btn btn-small btn-primary" href="#" data-toggle="modal" data-target="#modalCreate" onclick="setModalCreate()">Upload Dokumen +</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="tableUploaded" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Path Folder</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="table-pengajuan">
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Dokumen Lampiran</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nama Dokumen</label>
                                <select class="form-control" id="nama_dokumen">
                                    <option value="Susunan Pengurus">Susunan Pengurus</option>
                                    <option value="Form Surat Permohonan Registrasi">Form Surat Permohonan Registrasi (Diket Lurah)</option>
                                    <option value="Foto dan Deskripsi Destinasi">Foto dan Deskripsi Destinasi</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dokumen_lampiran">Dokumen</label>
                                <input type="file" class="form-control-file" id="dokumen_lampiran" name="file">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer" id="footer-modal-create">
            </div>
        </div>
    </div>
</div>

<script src="assets/vendor/jquery/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $('#tableUploaded').DataTable({
            "processing": true,
            "serverSide": false,
            "responsive": true,
            "tabIndex": false,
            "ordering": true,
            "info":     true,
            "language": {
                search: "",
                searchPlaceholder: "Search"
            },
            "ajax": {
                "dataType": "json",
                "url": "<?php echo base_url(); ?>Uploaddocument/getAllData",
                "type": "POST",
                "data": function(data) {

                }
            },
            "columns": [
            {
                "data": "nama",
                "searchable": true,
                "className": "item",
                "defaultContent": ""
            },
            {
                "data": "path",
                "searchable": true,
                "className": "item",
                "defaultContent": ""
            },
            {
                "data": 'null',
                "orderable": false,
                "sClass": "text-left",
                render: function (data, type, row) {
                    var action = `
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo base_url(); ?>Uploaddocument/downloadDoc/${row.filename}">Download</a>
                    </div>
                    `
               
                    return action;
                }
            }
            
            ],
            // "fnDrawCallback": function( Settings ) {
            //     initDatatableAction()
            // },
        });
    });


    function submitPengajuan() {
        var data = new FormData();
		var files = $('#dokumen_lampiran')[0].files;

        data.append('nama', $("#nama_dokumen").val());
        if(files.length > 0 ){
            data.append('file', files[0]);
        }

        if($("#nama_dokumen").val() == '' || !files.length > 0) {
            alert("Formulir anda belum diisi dengan lengkap")
        } else {
            $.ajax({
                url     : "<?php echo base_url(); ?>Uploaddocument/insert",
                type  : "POST",
                data: data,
                dataType: "json",
                encode: true,
                processData: false,
                contentType: false,
                success : function(response){
                    console.log(response)
                    if(response.status_code == 200) {
                        $('#modalCreate').hide()
                        $('.modal-backdrop').remove();
                        location.reload();
                    } else {
                        alert(response.message)
                    }
                }
            });
        }
    }

    function setModalCreate() {
        var newButton = `
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <button class="btn btn-primary" type="button" onclick="submitPengajuan()">Kirim</button>
        `
        $('#footer-modal-create').html(newButton)
    }

</script>

