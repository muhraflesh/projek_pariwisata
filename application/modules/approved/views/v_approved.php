<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<style>
    /* @media (min-width: 576px) */
    .modal-dialog {
        max-width: 800px;
        margin: 1.75rem auto;
    }
</style>

<h1 class="h3 mb-3 text-gray-800">Destinasi Wisata anda yang Terverifikasi</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="tableApproved" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Alamat</th>
                        <th>Penanggung Jawab</th>
                        <th>No. Ijin Teknis</th>
                        <th>Status</th>
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
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Pengajuan Wisata</h5>
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
                                <input type="text" class="form-control" name="nama_destinasi" id="nama_destinasi" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Jenis Usaha</label>
                                <select class="form-control" id="jenis_usaha">
                                    <option value=""></option>
                                    <option value="Pengelolaan Pemandian Air Panas Alami">Pengelolaan Pemandian Air Panas Alami</option>
                                    <option value="Pengelolaan Gua">Pengelolaan Gua</option>
                                    <option value="Pengelolaan Peninggalan Sejarah & Purbakala">Pengelolaan Peninggalan Sejarah & Purbakala</option>
                                    <option value="Pengelolaan Museum">Pengelolaan Museum</option>
                                    <option value="Pengelolaan Permukiman / Lingkungan Adat">Pengelolaan Permukiman / Lingkungan Adat</option>
                                    <option value="Pengelolaan Objek Ziarah">Pengelolaan Objek Ziarah</option>
                                    <option value="Pengelolaan Wisata Alam">Pengelolaan Wisata Alam</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="provinsi">Provinsi :</label>
                                <select class="form-control" id="provinsi" onchange="getKota('')">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kota">Kota / Kabupaten :</label>
                                <select class="form-control" id="kota" onchange="getKecamatan('')">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kecamatan">Kecamatan :</label>
                                <select class="form-control" id="kecamatan" onchange="getKelurahan('')">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kelurahan">Kelurahan :</label>
                                <select class="form-control" id="kelurahan">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat Detail</label>
                        <textarea class="form-control" name="alamat_detail" id="alamat_detail" rows="2"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">NPWP Daerah</label>
                                <input type="text" class="form-control" name="npwp_daerah" id="npwp_daerah" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sel1">No. SK Pendirian</label>
                                <input type="text" class="form-control" name="sk_pendirian" id="sk_pendirian" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Penanggung Jawab</label>
                                <input type="text" class="form-control" name="penanggungjawab" id="penanggungjawab" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sel1">Alamat Penanggung Jawab</label>
                                <input type="text" class="form-control" name="alamat_penanggungjawab" id="alamat_penanggungjawab" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">No. Ijin Teknis</label>
                                <input type="text" class="form-control" name="no_ijin_teknis" id="no_ijin_teknis" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sel1">No. Dokumen Pengelolaan Lingkungan</label>
                                <input type="text" class="form-control" name="no_pengelolaan_lingkungan" id="no_pengelolaan_lingkungan" placeholder="" required>
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
                    <hr>
                    <p style="font-weight: bold;">Keterangan Ditolak</p>
                    <div class="form-group">
                        <label for="">Notes</label>
                        <textarea class="form-control" name="" id="notes" rows="2" disabled></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Surat Tanda Registrasi</label>
                        <textarea class="form-control" name="" id="nomor_sk" rows="2" disabled></textarea>
                    </div>
                    <div class="form-group" id="form-download-sk">
                        <label for="dokumen_lampiran">Download Surat Tanda Registrasi</label> <br>
                        <a class="btn btn-secondary" type="button" id="download_sk">Download</a>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Anda ingin menghapus pengajuan destinasi wisata ini?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Klik "Hapus" dibawah jika anda ingin menghapus pengajuan destinasi wisata anda.</div>
            <div class="modal-footer" id="footer-modal-delete">
            </div>
        </div>
    </div>
</div>

<script src="assets/vendor/jquery/jquery.min.js"></script>

<script>
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
            "ajax": {
                "dataType": "json",
                "url": "<?php echo base_url(); ?>Approved/getAllData",
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
                "data": 'null',
                "orderable": false,
                "sClass": "text-left",
                render: function (data, type, row) {
                    // console.log(row)
                    var status = ''
                    if (row.approval_status == 0) {
                        status = 'Menunggu Persetujuan'
                    } else if (row.approval_status == 1) {
                        status = 'Telah Disetujui'
                    }
               
                    return status;
                }
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
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalDetail" onclick="showDetail('${row.id}')">Lihat Detail</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalDelete" onclick="showDelete('${row.id}')">Hapus Pengajuan</a>
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

    getProvinsi()

    function getProvinsi() {
        $.ajax({
            url     : "<?php echo base_url(); ?>Pengajuan/getProvinsi",
            type  : "POST",
            data    : {},
			dataType : 'json',
			async : true,
            success : function(response){
                console.log(response)
                if(response.status_code == 200) {
                    var element = '<option value=""></option>'

                    for(var x = 0; x < response.data.length; x++) {
                        var row = response.data[x]
                        
                        var items = `
                            <option value="${row.nama}">${row.nama}</option>
                        `
                        element = element + items
                    }
                    $('#provinsi').html(element)
                }
            }
        });
    }

    async function getKota(param) {
        var provinsi = param == '' ? $('#provinsi').val() : param
        await $.ajax({
            url     : "<?php echo base_url(); ?>Pengajuan/getKota",
            type  : "POST",
            data    : {provinsi : provinsi},
			dataType : 'json',
			async : true,
            success : function(response){
                console.log("1")
                if(response.status_code == 200) {
                    var element = '<option value=""></option>'

                    for(var x = 0; x < response.data.length; x++) {
                        var row = response.data[x]
                        
                        var items = `
                            <option value="${row.nama}">${row.nama}</option>
                        `
                        element = element + items
                    }
                    $('#kota').html(element)
                }
            }
        });
    }

    async function getKecamatan(param) {
        var kota = param == '' ? $('#kota').val() : param

        await $.ajax({
            url     : "<?php echo base_url(); ?>Pengajuan/getKecamatan",
            type  : "POST",
            data    : {kota : kota},
			dataType : 'json',
			async : true,
            success : function(response){
                console.log("2")
                if(response.status_code == 200) {
                    var element = '<option value=""></option>'

                    for(var x = 0; x < response.data.length; x++) {
                        var row = response.data[x]
                        
                        var items = `
                            <option value="${row.nama}">${row.nama}</option>
                        `
                        element = element + items
                    }
                    $('#kecamatan').html(element)
                }
            }
        });
    }

    async function getKelurahan(param) {
        var kecamatan = param == '' ? $('#kecamatan').val() : param

        await $.ajax({
            url     : "<?php echo base_url(); ?>Pengajuan/getKelurahan",
            type  : "POST",
            data    : {kecamatan : kecamatan},
			dataType : 'json',
			async : true,
            success : function(response){
                console.log("3")
                if(response.status_code == 200) {
                    var element = '<option value=""></option>'

                    for(var x = 0; x < response.data.length; x++) {
                        var row = response.data[x]
                        
                        var items = `
                            <option value="${row.nama}">${row.nama}</option>
                        `
                        element = element + items
                    }
                    $('#kelurahan').html(element)
                }
            }
        });
    }

    async function setAlamat(kota, kecamatan, kelurahan) {
        console.log("4")
        $('#kota').val(kota)
        $('#kecamatan').val(kecamatan)
        $('#kelurahan').val(kelurahan)
    }

    function showDetail(id) {
        // console.log(id)
        $.ajax({
            url     : "<?php echo base_url(); ?>Approved/getDetail",
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
                    $('#notes').val(row.note)
                    $('#nomor_sk').val(row.nomor_sk)
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

                    if(row.doc_persetujuan) {
                        $("#form-download-sk").show()
                        
                        var doc_sk = row.doc_persetujuan.split("/")[1]
                        $("#download_sk").prop("href", `<?php echo base_url(); ?>Persetujuan/downloadDocSK/${doc_sk}`)
                    } else {
                        $("#form-download-sk").hide()
                    }
                }
            }
        });
    }

    function showEdit(id) {
        var newButton = `
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <button class="btn btn-primary" type="button" onclick="saveUpdate('${id}')">Kirim</button>
        `
        $('#footer-modal-create').html(newButton)

        $.ajax({
            url     : "<?php echo base_url(); ?>Pengajuan/getDetail",
            type  : "POST",
            data    : {id: id},
			dataType : 'json',
			async : true,
            success : async function(response){
                console.log(response)
                if(response.status_code == 200) {
                    var row = response.data[0]
                    
                    $('#nama_destinasi').val(row.nama)
                    $('#jenis_usaha').val(row.jenis_usaha)
                    $('#provinsi').val(row.provinsi)
                    $('#alamat_detail').val(row.alamat)
                    $('#npwp_daerah').val(row.npwp_daerah)
                    $('#sk_pendirian').val(row.no_sk_pendirian)
                    $('#penanggungjawab').val(row.penanggung_jawab)
                    $('#alamat_penanggungjawab').val(row.alamat_penanggung_jawab)
                    $('#no_pengelolaan_lingkungan').val(row.no_doc_pengelolaan_lingkungan)
                    $('#no_ijin_teknis').val(row.no_izin_teknis)

                    await getKota(row.provinsi)
                    await getKecamatan(row.kota)
                    await getKelurahan(row.kecamatan)
                    await setAlamat(row.kota, row.kecamatan, row.kelurahan)
                }
            }
        });
    }

    function deletePengajuan(id) {
        $.ajax({
            url     : "<?php echo base_url(); ?>Pengajuan/delete",
            type  : "POST",
            data    : {id: id},
			dataType : 'json',
			async : true,
            success : async function(response){
                // console.log(response)
                if(response.status_code == 200) {
                    $('#modalDelete').hide()
                    $('.modal-backdrop').remove();
                    location.reload();
                } else {
                    alert(response.message)
                }
            }
        });
    }

    function showDelete(id) {
        var newButton = `
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="#" onclick="deletePengajuan('${id}')">Hapus</a>
        `
        $('#footer-modal-delete').html(newButton)
    }

    function saveUpdate(id) {
        var nama                = $('#nama_destinasi').val()
        var jenis_usaha         = $('#jenis_usaha').val()
        var provinsi            = $('#provinsi').val()
        var kota                = $('#kota').val()
        var kecamatan           = $('#kecamatan').val()
        var alamat_detail       = $('#alamat_detail').val()
        var npwp_daerah         = $('#npwp_daerah').val()
        var sk_pendirian        = $('#sk_pendirian').val()
        var penanggungjawab     = $('#penanggungjawab').val()
        var alamat_penanggungjawab      = $('#alamat_penanggungjawab').val()
        var kelurahan                   = $('#kelurahan').val()
        var no_pengelolaan_lingkungan   = $('#no_pengelolaan_lingkungan').val()
        var no_ijin_teknis              = $('#no_ijin_teknis').val()

        if(nama == '' || jenis_usaha == '' || provinsi == '' || kota == '' || kecamatan == '' || penanggungjawab == '' || alamat_penanggungjawab == '' || kelurahan == '' ) {
            alert("Formulir anda belum diisi dengan lengkap")
        } else {
            var data = {
                'id'            : id,
                'nama'          : nama,
                'jenis_usaha'   : jenis_usaha,
                'provinsi'      : provinsi,
                'kota'          : kota,
                'kecamatan'     : kecamatan,
                'alamat' : alamat_detail,
                'npwp_daerah'   : npwp_daerah,
                'sk_pendirian'  : sk_pendirian,
                'penanggungjawab'           : penanggungjawab,
                'alamat_penanggungjawab'    : alamat_penanggungjawab,
                'kelurahan'                 : kelurahan,
                'no_pengelolaan_lingkungan' : no_pengelolaan_lingkungan,
                'no_ijin_teknis'            : no_ijin_teknis,
            }

            $.ajax({
                url     : "<?php echo base_url(); ?>Approved/editPengajuan",
                type  : "POST",
                data    : data,
                dataType : 'json',
                async : true,
                success : function(response){
                    // console.log(response)
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
</script>

