@extends('layouts.main')

@section('content')

<!-- Bagian FORM Pindah Brodi -->
<div class="page-content">
    <div class="wizard-v10-content">
        <div class="wizard-form">
            <div class="wizard-header">
                <h3>Formulir Pindah</h3>
            </div>
            <form class="form-register" action="#" method="post">
                <center><img src="img/gifgit.gif" width="60%"></center><br>

                sa

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
                                    <label for="subject">Klasifikasi Pindah</label>
                                    <select name="subject" id="subject" class="form-control">
                                        <option value="" disabled selected>Pilih salah satu</option>
                                        <option value="baru">Antar Kabupaten</option>
                                        <option value="hilang">Anatar Kota</option>
                                        <option value="rusak">Antar Provinsi</option>
                                    </select>
                                    <span class="select-btn">
                                        <i class="zmdi zmdi-chevron-down"></i>
                                    </span>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="subject">Jenis Kepindah</label>
                                    <select name="subject" id="subject" class="form-control">
                                        <option value="" disabled selected>Pilih salah satu</option>
                                        <option value="baru">Kepala Keluarga</option>
                                        <option value="hilang">Kepala Keluarga dan Semua Anggota Keluarga
                                        </option>
                                        <option value="rusak">Kepala Keluarga dan Sebagian Anggota Keluarga
                                        </option>
                                        <option value="baru">Anggota Keluarga</option>
                                    </select>
                                    <span class="select-btn">
                                        <i class="zmdi zmdi-chevron-down"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="subject">Alasan Pindah</label>
                                    <select name="subject" id="subject" class="form-control">
                                        <option value="" disabled selected>Pilih salah satu</option>
                                        <option value="baru">Pekerjaan</option>
                                        <option value="hilang">Pendidikan</option>
                                        <option value="rusak">Keamanan</option>
                                        <option value="rusak">Kesehatan</option>
                                        <option value="rusak">Perumahan</option>
                                        <option value="rusak">Keluarga</option>
                                        <option value="rusak">Lain-lain</option>
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
                    <h2><i class="fa fa-duotone fa-route"></i></h2>
                    <section>
                        <div class="inner">
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Provinsi (Tujuan Pindah)
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Kabupaten/Kota
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Kecamatan
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Desa/Kelurahan
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Alamat
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">RT
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">RW
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Tulis Nama Yang Pindah
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
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
                                    <label for="akta">Scan Kartu Keluarga</label>
                                    <input type="file" name="alahir" class="form-control" id="comment">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="akta">Scan Formulir F1-03</label>
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