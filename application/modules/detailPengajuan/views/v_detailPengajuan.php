<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<style>
    /* @media (min-width: 576px) */
    .modal-dialog {
        max-width: 800px;
        margin: 1.75rem auto;
    }
</style>

<h1 class="h3 mb-3 text-gray-800">Detail Pengajuan</h1>

<div class="card shadow mb-4">
    <div class="card-body p-5">
        <div class="mb-3">
            <h5 class="text-gray-900">Obyek Wisata</h5>
            <hr class="sidebar-divider">
            <div class="d-flex">
                <ul style="list-style: none; padding: 0;" class="mb-0 col-6">
                    <li>
                        <p style="font-weight: 600" class="mb-2">Nama Destinasi</p>
                    </li>
                    <li>
                        <p style="font-weight: 600" class="mb-2">Jenis Usaha</p>
                    </li>
                    <li>
                        <p style="font-weight: 600" class="mb-2">No. SK Pendirian</p>
                    </li>
                    <li>
                        <p style="font-weight: 600" class="mb-2">Nomor Ijin Teknis</p>
                    </li>
                    <li>
                        <p style="font-weight: 600" class="mb-2">Nomor Pengelolaan Lingkungan</p>
                    </li>
                    <li>
                        <p style="font-weight: 600" class="mb-2">Provinsi</p>
                    </li>
                    <li>
                        <p style="font-weight: 600" class="mb-2">Kota / Kabupaten</p>
                    </li>
                    <li>
                        <p style="font-weight: 600" class="mb-2">Kapanewon</p>
                    </li>
                    <li>
                        <p style="font-weight: 600" class="mb-2">Kelurahan</p>
                    </li>
                    <li>
                        <p style="font-weight: 600" class="mb-2">Alamat Lengkap</p>
                    </li>
                    <li>
                        <p style="font-weight: 600" class="mb-2">NPWP Daerah</p>
                    </li>
                </ul>
                <ul style="list-style: none; padding: 0;" class="mb-0 col-6">
                    <li>
                        <p class="mb-2">: Sendang Anget</p>
                    </li>
                    <li>
                        <p class="mb-2">: Pemanian Air Panas</p>
                    </li>
                    <li>
                        <p class="mb-2">: 3894579</p>
                    </li>
                    <li>
                        <p class="mb-2">: 29834579</p>
                    </li>
                    <li>
                        <p class="mb-2">: 2875092383</p>
                    </li>
                    <li>
                        <p class="mb-2">: D.I.Yogyakarta</p>
                    </li>
                    <li>
                        <p class="mb-2">: Bantul</p>
                    </li>
                    <li>
                        <p class="mb-2">: Bantul</p>
                    </li>
                    <li>
                        <p class="mb-2">: Palbapang</p>
                    </li>
                    <li>
                        <p class="mb-2">: Dusun A, Palbapang, Bantul, Bantul, D.I.Yogyakarta</p>
                    </li>
                    <li>
                        <p class="mb-2">: 56982034</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mb-3">
            <h5 class="text-gray-900">Penanggung Jawab</h5>
            <hr class="sidebar-divider">
            <div class="d-flex">
                <ul style="list-style: none; padding: 0;" class="mb-0 col-6">
                    <li>
                        <p style="font-weight: 600" class="mb-2">Nama</p>
                    </li>
                    <li>
                        <p style="font-weight: 600" class="mb-2">Nomor telepon</p>
                    </li>
                    <li>
                        <p style="font-weight: 600" class="mb-2">Alamat Lengkap</p>
                    </li>
                </ul>
                <ul style="list-style: none; padding: 0;" class="mb-0 col-6">
                    <li>
                        <p class="mb-2">: Kelin</p>
                    </li>
                    <li>
                        <p class="mb-2">: 08384520930</p>
                    </li>
                    <li>
                        <p class="mb-2">: Dusun A, Palbapang, Bantul, Bantul, D.I.Yogyakarta</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mb-3">
            <h5 class="text-gray-900">Pemohon</h5>
            <hr class="sidebar-divider">
            <div class="d-flex">
                <ul style="list-style: none; padding: 0;" class="mb-0 col-6">
                    <li>
                        <p style="font-weight: 600" class="mb-2">Nama</p>
                    </li>
                    <li>
                        <p style="font-weight: 600" class="mb-2">Tanggal</p>
                    </li>
                    <li>
                        <p style="font-weight: 600" class="mb-2">Status</p>
                    </li>
                </ul>
                <ul style="list-style: none; padding: 0;" class="mb-0 col-6">
                    <li>
                        <p class="mb-2">: Rafli</p>
                    </li>
                    <li>
                        <p class="mb-2">: 2022-04-12 16:18:20</p>
                    </li>
                    <li>
                        <p class="mb-2">: <span class="badge badge-pill badge-warning">Menunggu Persetujuan</span></p>
                    </li>
                </ul>
            </div>
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
    $('#accordionSidebar.navbar-nav .nav-item .nav-link.active').removeClass('active');
    $('#pengajuan .nav-link').addClass('active');
</script>

