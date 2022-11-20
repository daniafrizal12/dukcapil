



<?php
$secret = "6LfiZVsiAAAAAHVX89yvjZejyVEY3SF8H7B2vIgK";
$verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='
    . $secret . '&response=' . $_POST['g-recaptcha-response']);
$response = json_decode($verify);
//  print_r($response);
if ($response->success) {
    //input ke database
    echo 'OK';
} else {
    //pesan
    echo 'GAGAL';
}
