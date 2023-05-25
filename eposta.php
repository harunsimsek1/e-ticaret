<?php
if ($_POST) {
    $kime = 'harunsimsek1940@gmail.com';
    $kimden = $_POST['kimden'];
    $eposta = $kimden . '<' . $_POST['eposta'] . '>';
    $konu = $_POST['konu'];
    $mesaj = $_POST['mesaj'] . " - " . $kimden;
    $tanimlar = 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/html; charset=UTF-8' . "\r\n" . 'From: ' . $eposta . "\r\n" . 'Reply-To: harunsimsek1940' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
    
    try {
        mail($kime, $konu, $mesaj, $tanimlar);
        header('Location: hakkimizda.php?islem=tamam');
        exit; // It's good practice to include an exit statement after a redirect
    } catch (Exception $e) {
        header('Location: hakkimizda.php?islem=hata');
        exit; // It's good practice to include an exit statement after a redirect
    }
}
?>
