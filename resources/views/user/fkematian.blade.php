@extends('layouts.main')

@section('content')

<!-- Bagian FORM Kematian -->
<div class="page-content">
    <div class="wizard-v10-content">
        <div class="wizard-form">
            <div class="wizard-header">
                <h3>Formulir Akta Kematian</h3>
            </div>
            <form class="form-register" action="#" method="post">
                <center><img src="img/moon.gif" width="60%"></center>


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
                                    <label for="first-name">NIK Jenazah
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Tanggal Meninggal
                                    </label>
                                    <input type="date" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Waktu Meninggal
                                    </label>
                                    <input type="time" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Tempat Meninggal
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Sebab Meninggal
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Yang Menerangkan Kematian</label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="last-name">Alamat e-mail</label>
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
                    <h2><i class="fa fa-solid fa-user"></i></h2>
                    <section>
                        <div class="inner">
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">NIK Pelapor
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Nama Pelapor
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">NIK Saksi 1
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Nama Saksi 1
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">NIK Saksi 2
                                    </label>
                                    <input type="text" class="form-control" id="first-name" name="first-name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="first-name">Nama Saksi 2
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
                                    <label for="kelahiran">Surat Keterangan Kematian
                                    </label>
                                    <input type="file" name="sklahir" class="form-control" id="comment">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="nikah">KTP Jenazah
                                    </label>
                                    <input type="file" name="bnikah" class="form-control" id="comment">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="nikah">Kartu Keluarga Jenazah
                                    </label>
                                    <input type="file" name="k_kk" class="form-control" id="comment">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="nikah">Formulir F2-01
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
<!-- End From -->



@endsection