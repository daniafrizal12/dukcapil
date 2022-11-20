@extends('layouts.main')

@section('content')

<!-- Bagian FORM Brodii -->
<div class="page-content">
    <div class="wizard-v10-content">
        <div class="wizard-form">
            <div class="wizard-header">
                <h3>Formulir Akta Kelahiran</h3>
            </div>
            <form class="form-register" action="#" method="post">
                <center><img src="img/baby.gif" width="60%"></center>


                <div id="form-total">
                    <!-- SECTION 1 -->
                    <h2><i class="fa fa-solid fa-baby"></i></h2>
                    <section>
                        <div class="inner">
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">NIK Bayi
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Nama Lengkap Bayi
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="last-name">Jenis Kelamin
                                    </label>
                                    <input type="text" class="form-control" id="last-name" name="last-name">
                                </div>
                                <div class="form-holder form-holder-2">
                                    <label for="last-name">Jenis Kelahiran
                                    </label>
                                    <input type="text" class="form-control" id="last-name" name="last-name">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="last-name">Tempat Kelahira
                                    </label>
                                    <input type="text" class="form-control" id="last-name" name="last-name">
                                </div>
                                <div class="form-holder form-holder-2">
                                    <label for="last-name">Penolong Kelahiran
                                    </label>
                                    <input type="text" class="form-control" id="last-name" name="last-name">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Tempat Lahir
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Tanggal Lahir
                                    </label>
                                    <input type="date" class="form-control" id="first-name" name="first-name">
                                </div>
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Jam
                                    </label>
                                    <input type="time" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Anak Ke
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Berat
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Panjang
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>

                        </div>
                    </section>


                    <!-- SECTION 2 -->
                    <h2><i class="fas fa-user-friends"></i></h2>
                    <section>
                        <div class="inner">
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Nomor KK
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Nama Kepala Keluarga
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Tanggal Kawin
                                    </label>
                                    <input type="date" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">NIK Ibu
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Nama Lengkap Ibu
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">NIK Ayah
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Nama Lengkap Ayah
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>

                        </div>
                    </section>

                    <!-- SECTION 3 -->
                    <h2><i class="fa fa-solid fa-user "></i></h2>
                    <section>
                        <div class="inner">
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">NIK Pelapor
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Nama Lengkap Pelapor
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Hubungan Keluarga Dengan Bayi
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">NIK Saksi
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Nama Lengkap Saksi
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
                                    <label for="kelahiran">Surat Keterangan Kelahiran
                                    </label>
                                    <input type="file" name="sklahir" class="form-control" id="comment">
                                </div>
                                <div class="form-holder form-holder-2">
                                    <label for="nikah">Buku Nikah/Akta Perkawinan
                                    </label>
                                    <input type="file" name="bnikah" class="form-control" id="comment">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="nikah">Kartu Keluarga
                                    </label>
                                    <input type="file" name="k_kk" class="form-control" id="comment">
                                </div>
                                <div class="form-holder form-holder-2">
                                    <label for="nikah">KTP Orang Tua
                                    </label>
                                    <input type="file" name="k_f2" class="form-control" id="comment">
                                </div>
                            </div>

                        </div>



                    </section>
                </div>
            </form>

        </div>
    </div>
</div>




@endsection