<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Composer autoload

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'kussumabuddi369@gmail.com';
    $mail->Password = 'giuu tlxg zkvc kugm'; // Bukan password biasa
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('kussumabuddi369@gmail.com', 'Budi');
    $mail->addAddress('yusufbudikusuma7@gmail.com', 'Kusuma');

    $mail->isHTML(true);
    $mail->Subject = 'Judul Email Otomatis';
    $mail->Body    = 'Ini isi email <b>otomatis</b> yang dikirim dari PHP!';
    $mail->AltBody = 'Ini isi email otomatis versi teks.';

    $mail->send();
    echo 'Email berhasil dikirim.';
} catch (Exception $e) {
    echo "Email gagal dikirim. Error: {$mail->ErrorInfo}";
}
?>
