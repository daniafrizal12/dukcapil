@extends('layouts.main')

@section('content')

<!-- Bagian FORM Layanan KK Brodi -->
<div class="page-content">
    <div class="wizard-v10-content">
        <div class="wizard-form">
            <div class="wizard-header">
                <h3>Formulir Pelayanan KK</h3>
            </div>
            <form class="form-register" action="#" method="post">
                <center><img src="img/P_KK.gif" width="50%"></center>


                <div id="form-total">
                    <!-- SECTION 1 -->
                    <h2><i class="fa fa-solid fa-id-card"></i></h2>
                    <section>
                        <div class="inner">
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Nomor Kartu Keluarga (KK)
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">NIK Kepala Keluarga
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Nama Kepala Keluarga
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="subject">Alasan Pengajuan</label>
                                    <select name="subject" id="subject" class="form-control">
                                        <option value="" disabled selected>Pilih salah satu</option>
                                        <option value="baru">Membentuk Keluarga Baru</option>
                                        <option value="hilang">Kematian Kepala Keluarga</option>
                                        <option value="rusak">Perubahan Data</option>
                                        <option value="rusak">Hilang/Rusak</option>
                                    </select>
                                    <span class="select-btn">
                                        <i class="zmdi zmdi-chevron-down"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="last-name">Alamat e-mail

                                    </label>
                                    <input type="text" class="form-control" id="last-name" name="last-name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="last-name">Nomor HP/Whatsapp
                                    </label>
                                    <input type="text" class="form-control" id="last-name" name="last-name">
                                </div>
                            </div>

                        </div>
                    </section>

                    <!-- SECTION 2 -->
                    <h2><i class="fa fa-solid fa-upload"></i></h2>
                    <section>
                        <div class="inner">
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="akta">Scan Kartu Keluarga</label>
                                    <input type="file" name="alahir" class="form-control" id="comment">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="akta">Buku Nikah/Akta Perkawinan/Akta Perceraian</label>
                                    <input type="file" name="kkterbaru" class="form-control" id="comment">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="akta">Akta Kematian</label>
                                    <input type="file" name="kkterbaru" class="form-control" id="comment">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="akta">Surat keterangan/bukti perubahan Peristiwa Kependudukan
                                        (cth:
                                        Paspor, SKPWNI) dan Peristiwa Penting</label>
                                    <input type="file" name="kkterbaru" class="form-control" id="comment">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="akta">Surat Keterangan Kehilangan Kepolisian/KK Rusak</label>
                                    <input type="file" name="kkterbaru" class="form-control" id="comment">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="akta">KTP el</label>
                                    <input type="file" name="kkterbaru" class="form-control" id="comment">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="akta">Formulir F1-02 dan atau Formulir F1-06</label>
                                    <input type="file" name="kkterbaru" class="form-control" id="comment">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- End From -->



@endsection