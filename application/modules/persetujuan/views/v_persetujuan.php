<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<style>
    /* @media (min-width: 576px) */
    .modal-dialog {
        max-width: 800px;
        margin: 1.75rem auto;
    }
</style>

<h1 class="h3 mb-3 text-gray-800">Daftar Pengajuan Destinasi Wisata</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="tablePersetujuan" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Alamat</th>
                        <th>Penanggung Jawab</th>
                        <th>No. Ijin Teknis</th>
                        <th>Diajukan Oleh</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="table-persetujuan">
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Detail Pengajuan Wisata</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Destinasi</label>
                                <input type="text" class="form-control" name="nama_destinasi" id="detail_nama_destinasi" placeholder="" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Jenis Usaha</label>
                                <input type="text" class="form-control" name="" id="detail_jenis_usaha" placeholder="" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="provinsi">Provinsi :</label>
                                <input type="text" class="form-control" name="" id="detail_provinsi" placeholder="" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kota">Kota / Kabupaten :</label>
                                <input type="text" class="form-control" name="" id="detail_kota" placeholder="" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kecamatan">Kapanewon :</label>
                                <input type="text" class="form-control" name="" id="detail_kecamatan" placeholder="" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kelurahan">Kalurahan :</label>
                                <input type="text" class="form-control" name="" id="detail_kelurahan" placeholder="" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat Detail</label>
                        <textarea class="form-control" name="" id="detail_alamat" rows="2" disabled></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">NPWP Daerah</label>
                                <input type="text" class="form-control" name="npwp_daerah" id="detail_npwp_daerah" placeholder="" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sel1">No. SK Pendirian</label>
                                <input type="text" class="form-control" name="sk_pendirian" id="detail_sk_pendirian" placeholder="" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Penanggung Jawab</label>
                                <input type="text" class="form-control" name="penanggungjawab" id="detail_penanggungjawab" placeholder="" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sel1">Telephone</label>
                                <input type="text" class="form-control" name="telephone_penanggungjawab" id="telephone_penanggungjawab" placeholder="" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="sel1">Alamat Penanggung Jawab</label>
                                <input type="text" class="form-control" name="alamat_penanggungjawab" id="detail_alamat_penanggungjawab" placeholder="" disabled>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Total Pelaku</label>
                                <input type="text" class="form-control" name="total_pelaku" id="total_pelaku" placeholder="" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Pelaku Wanita</label>
                                <input type="text" class="form-control" name="pelaku_wanita" id="pelaku_wanita" placeholder="" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Pelaku Pria</label>
                                <input type="text" class="form-control" name="pelaku_pria" id="pelaku_pria" placeholder="" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dokumen_lampiran">Dokumen Susunan Pengurus</label> <br>
                                <a class="btn btn-secondary" type="button" id="download_susunan_pengurus">Download</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Status Lahan</label>
                                <input type="text" class="form-control" name="pelaku_pria" id="status_lahan" placeholder="" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nomor Surat</label>
                                <input type="text" class="form-control" name="no_registrasi_kalurahan" id="no_registrasi_kalurahan" placeholder="" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">No. Ijin Teknis</label>
                                <input type="text" class="form-control" name="no_ijin_teknis" id="detail_no_ijin_teknis" placeholder="" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sel1">No. Dokumen Pengelolaan Lingkungan</label>
                                <input type="text" class="form-control" name="no_pengelolaan_lingkungan" id="detail_no_pengelolaan_lingkungan" placeholder="" disabled>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dokumen_lampiran">Surat Permohonan Registrasi</label> <br>
                                <a class="btn btn-secondary" type="button" id="download_permohonan_registrasi">Download</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dokumen_lampiran">Foto & Deskripsi Destinasi</label> <br>
                                <a class="btn btn-secondary" type="button" id="download_deskripsi_destinasi">Download</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Tanggal Pengajuan</label>
                                <input type="text" class="form-control" name="" id="detail_tgl_pengajuan" placeholder="" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sel1">Status</label>
                                <input type="text" class="form-control" name="" id="detail_status" placeholder="" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sel1">Diajukan Oleh</label>
                        <input type="text" class="form-control" name="" id="detail_created_by" placeholder="" disabled>
                    </div>
                </form>
                <hr>
                <p style="font-weight: bold;">Persetujuan</p>
                <div class="form-group">
                    <label for="">Notes</label>
                    <textarea class="form-control" name="" id="notes" rows="2" ></textarea>
                </div>
                <div class="form-group">
                    <label for="">Nomor Surat Keputusan</label>
                    <input type="text" class="form-control" name="" id="nomor_sk" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="dokumen_lampiran">Upload Surat Tanda Registrasi</label>
                    <input type="file" class="form-control-file" id="sk_registrasi" name="file">
                </div>
            </div>
            <div class="modal-footer" id="footer-modal-detail">

            </div>
        </div>
    </div>
</div>

<script src="assets/vendor/jquery/jquery.min.js"></script>

<script>
    $('#accordionSidebar.navbar-nav .nav-item .nav-link.active').removeClass('active');
    $('#persetujuan .nav-link').addClass('active');
    $(document).ready(function() {
        $('#tablePersetujuan').DataTable({
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
                "url": "<?php echo base_url(); ?>Persetujuan/getAllData",
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
                "data": "tanggal_pendaftaran",
                "searchable": true,
                "className": "item",
                "defaultContent": ""
            },
            {
                "data": "alamat",
                "searchable": true,
                "className": "item",
                "defaultContent": ""
            },
            {
                "data": "penanggung_jawab",
                "searchable": true,
                "className": "item",
                "defaultContent": ""
            },
            {
                "data": "no_izin_teknis",
                "searchable": true,
                "className": "item",
                "defaultContent": ""
            },
            {
                "data": "username",
                "searchable": true,
                "className": "item",
                "defaultContent": ""
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
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalDetail" onclick="showDetail('${row.id}')">
                            <i class="fas fa-eye mr-3 text-muted"></i>Detail
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

    function showDetail(id) {
        var newButton = `
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
            <button class="btn btn-success" type="button" onclick="saveApproval('1', '${id}')">Verifikasi</button>
            <button class="btn btn-danger" type="button" onclick="saveApproval('2', '${id}')">Tolak Pengajuan</button>
        `
        $('#footer-modal-detail').html(newButton)

        $.ajax({
            url     : "<?php echo base_url(); ?>Persetujuan/getDetail",
            type  : "POST",
            data    : {id: id},
			dataType : 'json',
			async : true,
            success : function(response){
                console.log(response)
                if(response.status_code == 200) {
                    var row = response.data[0]
                    var status = ''
                    if (row.approval_status == 0) {
                        status = 'Menunggu Persetujuan'
                    } else if (row.approval_status == 1) {
                        status = 'Telah Disetujui'
                    }

                    $('#detail_nama_destinasi').val(row.nama)
                    $('#detail_jenis_usaha').val(row.jenis_usaha)
                    $('#detail_provinsi').val(row.provinsi)
                    $('#detail_kota').val(row.kota)
                    $('#detail_kecamatan').val(row.kecamatan)
                    $('#detail_alamat').val(row.alamat)
                    $('#detail_npwp_daerah').val(row.npwp_daerah)
                    $('#detail_sk_pendirian').val(row.no_sk_pendirian)
                    $('#detail_penanggungjawab').val(row.penanggung_jawab)
                    $('#detail_alamat_penanggungjawab').val(row.alamat_penanggung_jawab)
                    $('#detail_kelurahan').val(row.kelurahan)
                    $('#detail_no_pengelolaan_lingkungan').val(row.no_doc_pengelolaan_lingkungan)
                    $('#detail_no_ijin_teknis').val(row.no_izin_teknis)
                    $('#detail_tgl_pengajuan').val(row.tanggal_pendaftaran)
                    $('#detail_status').val(status)
                    $('#detail_created_by').val(row.username)
                    $('#telephone_penanggungjawab').val(row.telephone_penanggung_jawab)
                    $('#total_pelaku').val(row.total_pelaku)
                    $('#pelaku_pria').val(row.pelaku_pria)
                    $('#pelaku_wanita').val(row.pelaku_wanita)
                    $('#status_lahan').val(row.status_lahan)
                    $('#no_registrasi_kalurahan').val(row.no_registrasi_kalurahan)

                    var doc_susunan_pengurus = row.doc_susunan_pengurus.split("/")[1]
                    var doc_permohonan_registrasi = row.doc_permohonan_registrasi.split("/")[1]
                    var doc_deskripsi_destinasi = row.doc_deskripsi_destinasi.split("/")[1]

                    $("#download_susunan_pengurus").prop("href", `<?php echo base_url(); ?>Persetujuan/downloadDoc/${doc_susunan_pengurus}`)
                    $("#download_permohonan_registrasi").prop("href", `<?php echo base_url(); ?>Persetujuan/downloadDoc/${doc_permohonan_registrasi}`)
                    $("#download_deskripsi_destinasi").prop("href", `<?php echo base_url(); ?>Persetujuan/downloadDoc/${doc_deskripsi_destinasi}`)
                }
            }
        });
    }

    function saveApproval(status, id) {
        var note        = $('#notes').val()
        var nomor_sk    = $('#nomor_sk').val()
        var formData        = new FormData();
		var files       = $('#sk_registrasi')[0].files;

        if(nomor_sk == '' && status == 1) {
            alert("Nomor SK Mohon diisi")
        } else if(note == '' && status == 2) {
            alert("Notes untuk pemohon harap diisi")
        } else {
            var data = {
                'status' : status, 
                'id' : id, 
                'note': note, 
                'nomor_sk': nomor_sk
            }

            formData.append('status', status);
            formData.append('id', id);
            formData.append('note', note);
            formData.append('nomor_sk', nomor_sk);
            if(files.length > 0 ){
                formData.append('file', files[0]);
            }

            $.ajax({
                url     : "<?php echo base_url(); ?>Persetujuan/approveReject",
                type  : "POST",
                data    : formData,
                processData: false,
                contentType: false,
                async : true,
                success : function(response){
                    response = JSON.parse(response)
                    console.log(response)
                    if(response.status_code == 200) {
                        $('#modalDetail').hide()
                        $('.modal-backdrop').remove();
                        location.reload();
                    } else {
                        alert(response.message)
                    }
                }
            });
        }
    }
</script>

