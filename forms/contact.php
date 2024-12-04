<?php
// Cek apakah form dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Email tujuan (ganti dengan email Anda)
    $to = "FAMK.cyber@gmail.com";

    // Subject email
    $email_subject = "Pesan Baru dari: $name";

    // Isi pesan email
    $email_body = "Anda menerima pesan baru dari formulir kontak:\n\n";
    $email_body .= "Nama: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subjek: $subject\n";
    $email_body .= "Pesan:\n$message\n";

    // Header untuk email
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";

    // Kirim email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Pesan gagal dikirim. Coba lagi nanti.";
    }
} else {
    echo "Metode pengiriman tidak valid.";
}
?>
