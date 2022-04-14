<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<style>
    /* @media (min-width: 576px) */
    .modal-dialog {
        max-width: 800px;
        margin: 1.75rem auto;
    }
</style>

<h1 class="h3 mb-3 text-gray-800">Laporan Bulanan</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a class="btn btn-small btn-primary" href="#" data-toggle="modal" data-target="#modalCreate">Laporan +</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="tableApproved" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Pelapor</th>
                        <th>Tanggal Lapor</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="table-pengajuan">
                    <tr>
                        <td>Wulan</td>
                        <td>02-12-2021</td>
                        <td>Rp 200.000</td>
                        <td>
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#" onclick="">
                                    <i class="fas fa-download mr-3 text-muted"></i>Unduh
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalDelete" onclick="">
                                    <i class="fas fa-trash mr-3 text-danger"></i>Hapus
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Buat Laporan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="">Nama Pelapor</label>
                        <input type="text" class="form-control" name="pelapor" id="pelapor" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="">File Laporan</label>
                        <input type="file" class="form-control" name="pelapor" id="pelapor" placeholder="" required>
                        <small class="text-muted">Format file yang dapat diunggah: xlsx</small>
                    </div>
                </form>
            </div>
            <div class="modal-footer" id="footer-modal-create">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <button class="btn btn-primary" type="button" onclick="">Unggah</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Anda ingin menghapus laporan?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Klik "Hapus" dibawah jika anda ingin menghapus laporan bulanan wisata anda.</div>
            <div class="modal-footer" id="footer-modal-delete">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <button class="btn btn-danger" type="button" onclick="">Hapus</button>
            </div>
        </div>
    </div>
</div>

<script src="assets/vendor/jquery/jquery.min.js"></script>

<script>
    $('#accordionSidebar.navbar-nav .nav-item .nav-link.active').removeClass('active');
    $('#approved .nav-link').addClass('active');

    $(document).ready(function() {
        $('#tableApproved').DataTable({
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
            "columns": [
            {
                "data": "nama",
                "searchable": true,
                "className": "item",
                "defaultContent": ""
            },
            {
                "data": "tanggal_pendaftaran",
                "searchable": true,
                "className": "item",
                "defaultContent": "",
                "sClass": "text-right"
            },
            {
                "data": "alamat",
                "searchable": true,
                "className": "item",
                "defaultContent": "",
                "sClass": "text-right"
            },
            {
                "data": 'null',
                "orderable": false,
                "sClass": "text-center",
                render: function (data, type, row) {
                    var action = `
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-h"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#" onclick="">
                            <i class="fas fa-download mr-3 text-muted"></i>Unduh
                        </a>
                        <!-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalDetail" onclick="">
                            <i class="fas fa-edit mr-3 text-primary"></i>Ubah Data
                        </a> -->
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalDelete" onclick="">
                            <i class="fas fa-trash mr-3 text-danger"></i>Hapus
                        </a>
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

    
</script>

