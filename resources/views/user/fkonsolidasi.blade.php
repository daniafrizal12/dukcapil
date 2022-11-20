@extends('layouts.main')

@section('content')

<!-- Bagian FORM Brodii -->
<div class="page-content">
    <div class="wizard-v10-content">
        <div class="wizard-form">
            <div class="wizard-header">
                <h3>Form Konsolidasi Data</h3>
            </div>
            <form class="form-register" action="#" method="post">
                <center><img src="img/konsolidasi.gif" width="50%"></center>

                <div id="form-total">

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
                                <label for="last-name">Nomor Induk Kependudukan (NIK)
                                </label>
                                <input type="text" class="form-control" id="last-name" name="last-name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder form-holder-2">
                                <label for="last-name">Permasalahan/Keperluan

                                </label>
                                <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Contoh: Akses Bank">
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
                        </div><br>

                        <button class="button-22" role="button">Confirm</button>


                    </div>



                </div>
            </form>
        </div>
    </div>
</div>
<!-- End From -->



@endsection