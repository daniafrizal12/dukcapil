@extends('layouts.main')

@section('content')

<!-- Bagian FORM KIA Brodi -->
<div class="page-content">
    <div class="wizard-v10-content">
        <div class="wizard-form">
            <div class="wizard-header">
                <h3>Formulir KIA</h3>
            </div>
            <form class="form-register" action="#" method="post">
                <center><img src="img/boy.gif" width="50%"></center>

                <div id="form-total">
                    <!-- SECTION 1 -->
                    <h2><i class="fa fa-solid fa-id-card"></i></h2>
                    <section>
                        <div class="inner">
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Nomor Induk Kependudukan (NIK) Anak
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="last-name">Nomor Kartu Keluarga (KK)
                                    </label>
                                    <input type="text" class="form-control" id="last-name" name="last-name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="last-name">Nama Lengkap Anak

                                    </label>
                                    <input type="text" class="form-control" id="last-name" name="last-name">
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
                    <!-- SECTION 3 -->
                    <h2><i class="fa fa-solid fa-upload"></i></h2>
                    <section>
                        <div class="inner">
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="subject">Alasan Penerbitan</label>
                                    <select name="subject" id="subject" class="form-control">
                                        <option value="" disabled selected>Pilih salah satu</option>
                                        <option value="baru">Baru</option>
                                        <option value="hilang">Hilang</option>
                                        <option value="rusak">Rusak</option>
                                        <option value="edit">Perubahan Data</option>
                                    </select>
                                    <span class="select-btn">
                                        <i class="zmdi zmdi-chevron-down"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="akta">Akta Kelahiran</label>
                                    <input type="file" name="alahir" class="form-control" id="comment">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="akta">Kartu Keluarga Terbaru</label>
                                    <input type="file" name="kkterbaru" class="form-control" id="comment">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="akta">Pas Foto Formal (Usia 5 Tahun Keatas)</label>
                                    <input type="file" name="foto" class="form-control" id="comment">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="akta">Surat Kehilangan Kepolisan/KIA Lama</label>
                                    <input type="file" name="kehilangan" class="form-control" id="comment">
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