<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<style>
    /* @media (min-width: 576px) */
    .modal-dialog {
        max-width: 800px;
        margin: 1.75rem auto;
    }
</style>

<h1 class="h3 mb-3 text-gray-800">Daftar Pengajuan Wisata</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a class="btn btn-small btn-primary" href="#" data-toggle="modal" data-target="#modalCreate" onclick="setModalCreate()">Pengajuan Wisata +</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="tablePengajuan" width="100%" cellspacing="0">
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
                                <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="D.I Yogyakarta" value="D.I Yogyakarta" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kota">Kota / Kabupaten :</label>
                                <input type="text" class="form-control" name="kota" id="kota" placeholder="Bantul" value="Bantul" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kecamatan">Kapanewon :</label>
                                <select class="form-control" id="kecamatan" onchange="getKelurahan('')">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kelurahan">Kalurahan :</label>
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
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Penanggung Jawab</label>
                                <input type="text" class="form-control" name="penanggungjawab" id="penanggungjawab" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sel1">Telephone</label>
                                <input type="text" class="form-control" name="telephone_penanggungjawab" id="telephone_penanggungjawab" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="sel1">Alamat Penanggung Jawab</label>
                                <input type="text" class="form-control" name="alamat_penanggungjawab" id="alamat_penanggungjawab" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Total Pelaku</label>
                                <input type="text" class="form-control" name="total_pelaku" id="total_pelaku" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Pelaku Wanita</label>
                                <input type="text" class="form-control" name="pelaku_wanita" id="pelaku_wanita" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Pelaku Pria</label>
                                <input type="text" class="form-control" name="pelaku_pria" id="pelaku_pria" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dokumen_lampiran">Dokumen Susunan Pengurus</label>
                                <input type="file" class="form-control-file" id="doc_susunan_pengurus" name="filePengurus">
                            </div>
                        </div>
                    </div>
                    <hr>
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Status Lahan</label>
                                <select class="form-control" id="status_lahan">
                                    <option value=""></option>
                                    <option value="Hak Milik">Hak Milik</option>
                                    <option value="Sultan Ground">Sultan Ground</option>
                                    <option value="Tanah Kas Desa">Tanah Kas Desa</option>
                                    <option value="Tanah Tutupan">Tanah Tutupan</option>
                                    <option value="Oro-oro">Oro-oro</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nomor Surat</label>
                                <input type="text" class="form-control" name="no_registrasi_kalurahan" id="no_registrasi_kalurahan" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dokumen_lampiran">Surat Permohonan Registrasi</label>
                                <input type="file" class="form-control-file" id="doc_permohonan_registrasi" name="filePermohonan">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dokumen_lampiran">Foto & Deskripsi Destinasi</label>
                                <input type="file" class="form-control-file" id="doc_deskripsi_destinasi" name="fileDeskripsi">
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

<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Ubah Data Pengajuan</h5>
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
                                <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="D.I Yogyakarta" value="D.I Yogyakarta" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kota">Kota / Kabupaten :</label>
                                <input type="text" class="form-control" name="kota" id="kota" placeholder="Bantul" value="Bantul" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kecamatan">Kapanewon :</label>
                                <select class="form-control" id="kecamatan" onchange="getKelurahan('')">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kelurahan">Kalurahan :</label>
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
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Penanggung Jawab</label>
                                <input type="text" class="form-control" name="penanggungjawab" id="penanggungjawab" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sel1">Telephone</label>
                                <input type="text" class="form-control" name="telephone_penanggungjawab" id="telephone_penanggungjawab" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="sel1">Alamat Penanggung Jawab</label>
                                <input type="text" class="form-control" name="alamat_penanggungjawab" id="alamat_penanggungjawab" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Total Pelaku</label>
                                <input type="text" class="form-control" name="total_pelaku" id="total_pelaku" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Pelaku Wanita</label>
                                <input type="text" class="form-control" name="pelaku_wanita" id="pelaku_wanita" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Pelaku Pria</label>
                                <input type="text" class="form-control" name="pelaku_pria" id="pelaku_pria" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dokumen_lampiran">Dokumen Susunan Pengurus</label>
                                <input type="file" class="form-control-file" id="doc_susunan_pengurus" name="filePengurus">
                            </div>
                        </div>
                    </div>
                    <hr>
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Status Lahan</label>
                                <select class="form-control" id="status_lahan">
                                    <option value=""></option>
                                    <option value="Hak Milik">Hak Milik</option>
                                    <option value="Sultan Ground">Sultan Ground</option>
                                    <option value="Tanah Kas Desa">Tanah Kas Desa</option>
                                    <option value="Tanah Tutupan">Tanah Tutupan</option>
                                    <option value="Oro-oro">Oro-oro</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nomor Surat</label>
                                <input type="text" class="form-control" name="no_registrasi_kalurahan" id="no_registrasi_kalurahan" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dokumen_lampiran">Surat Permohonan Registrasi</label>
                                <input type="file" class="form-control-file" id="doc_permohonan_registrasi" name="filePermohonan">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dokumen_lampiran">Foto & Deskripsi Destinasi</label>
                                <input type="file" class="form-control-file" id="doc_deskripsi_destinasi" name="fileDeskripsi">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer" id="footer-modal-edit">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <button class="btn btn-primary" type="button" onclick="saveUpdate('${id}')">Ubah</button>
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
                                <label for="">Nama Penanggung Jawab</label>
                                <input type="text" class="form-control" name="penanggungjawab" id="detail_penanggungjawab" placeholder="" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sel1">Alamat Penanggung Jawab</label>
                                <input type="text" class="form-control" name="alamat_penanggungjawab" id="detail_alamat_penanggungjawab" placeholder="" disabled>
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
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Anda ingin menghapus pengajuan?</h5>
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
    $('#accordionSidebar.navbar-nav .nav-item .nav-link.active').removeClass('active');
    $('#pengajuan .nav-link').addClass('active');

    $(document).ready(function() {
        $('#tablePengajuan').DataTable({
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
                "url": "<?php echo base_url(); ?>Pengajuan/getAllData",
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
                "sClass": "text-center",
                render: function (data, type, row) {
                    var action = `
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-h"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo base_url('detailPengajuan') ?>">
                            <i class="fas fa-eye mr-3 text-muted"></i>Detail
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalEdit" onclick="">
                            <i class="fas fa-edit mr-3 text-primary"></i>Ubah Data
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalDelete" onclick="showDelete('${row.id}')">
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

    getKecamatan("")

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

    function submitPengajuan() {
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
        var telephone_penanggungjawab   = $('#telephone_penanggungjawab').val()
        var kelurahan                   = $('#kelurahan').val()
        var no_pengelolaan_lingkungan   = $('#no_pengelolaan_lingkungan').val()
        var no_ijin_teknis              = $('#no_ijin_teknis').val()
        var status_lahan                = $('#status_lahan').val()
        var total_pelaku                = $('#total_pelaku').val()
        var pelaku_pria                 = $('#pelaku_pria').val()
        var pelaku_wanita               = $('#pelaku_wanita').val()
        var no_registrasi_kalurahan     = $('#no_registrasi_kalurahan').val()

		var filesPengurus = $('#doc_susunan_pengurus')[0].files;
		var filesDeskripsi = $('#doc_permohonan_registrasi')[0].files;
		var filesPermohonan = $('#doc_deskripsi_destinasi')[0].files;

        var formData = new FormData();

        if(nama == '' || jenis_usaha == '' || kecamatan == '' || penanggungjawab == '' || alamat_penanggungjawab == '' || kelurahan == '' || !filesPengurus.length > 0 || !filesDeskripsi.length > 0 || !filesPermohonan.length > 0) {
            alert("Formulir anda belum diisi dengan lengkap")
        } else {
            var data = {
                'nama'          : nama,
                'jenis_usaha'   : jenis_usaha,
                'provinsi'      : provinsi,
                'kota'          : kota,
                'kecamatan'     : kecamatan,
                'alamat'        : alamat_detail,
                'npwp_daerah'   : npwp_daerah,
                'sk_pendirian'  : sk_pendirian,
                'status_lahan'  : status_lahan,
                'penanggungjawab'           : penanggungjawab,
                'alamat_penanggungjawab'    : alamat_penanggungjawab,
                'kelurahan'                 : kelurahan,
                'no_pengelolaan_lingkungan' : no_pengelolaan_lingkungan,
                'no_ijin_teknis'            : no_ijin_teknis,
                'telephone_penanggungjawab' : telephone_penanggungjawab,
                'total_pelaku'              : total_pelaku,
                'pelaku_pria'               : pelaku_pria,
                'pelaku_wanita'             : pelaku_wanita,
                'no_registrasi_kalurahan'   : no_registrasi_kalurahan,
            }

            formData.append('nama', nama);
            formData.append('jenis_usaha', jenis_usaha);
            formData.append('provinsi', provinsi);
            formData.append('kota', kota);
            formData.append('kecamatan', kecamatan);
            formData.append('alamat', alamat_detail);
            formData.append('npwp_daerah', npwp_daerah);
            formData.append('sk_pendirian', sk_pendirian);
            formData.append('status_lahan', status_lahan);
            formData.append('penanggungjawab', penanggungjawab);
            formData.append('alamat_penanggungjawab', alamat_penanggungjawab);
            formData.append('kelurahan', kelurahan);
            formData.append('no_pengelolaan_lingkungan', no_pengelolaan_lingkungan);
            formData.append('no_ijin_teknis', no_ijin_teknis);
            formData.append('telephone_penanggungjawab', telephone_penanggungjawab);
            formData.append('total_pelaku', total_pelaku);
            formData.append('pelaku_pria', pelaku_pria);
            formData.append('pelaku_wanita', pelaku_wanita);
            formData.append('no_registrasi_kalurahan', no_registrasi_kalurahan);
            formData.append('filePengurus', filesPengurus[0]);
            formData.append('fileDeskripsi', filesDeskripsi[0]);
            formData.append('filePermohonan', filesPermohonan[0]);

            $.ajax({
                url     : "<?php echo base_url(); ?>Pengajuan/insertPengajuan",
                type  : "POST",
                data    : formData,
                processData: false,
                contentType: false,
                async : true,
                success : function(response){
                    // console.log(response)
                    response = JSON.parse(response)
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

    function showDetail(id) {
        console.log(id)
        $.ajax({
            url     : "<?php echo base_url(); ?>Pengajuan/getDetail",
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
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <a class="btn btn-danger" href="#" onclick="deletePengajuan('${id}')">Hapus</a>
        `
        $('#footer-modal-delete').html(newButton)
    }

    function setModalCreate() {
        var newButton = `
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <button class="btn btn-primary" type="button" onclick="submitPengajuan()">Kirim</button>
        `
        $('#footer-modal-create').html(newButton)
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
                url     : "<?php echo base_url(); ?>Pengajuan/editPengajuan",
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

