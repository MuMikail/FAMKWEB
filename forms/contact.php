<?php
// Cek apakah form dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama_lengkap = htmlspecialchars($_POST['nama_lengkap']);
    $email = htmlspecialchars($_POST['email']);
    $masalah = htmlspecialchars($_POST['masalah']);
    $pesan = htmlspecialchars($_POST['pesan']);

    // Email tujuan (ganti dengan email Anda)
    $to = "FAMK.cyber@gmail.com";

    // Subject email
    $email_subject = "Pesan Baru dari: $nama_lengkap";

    // Isi pesan email
    $email_body = "Anda menerima pesan baru dari formulir kontak:\n\n";
    $email_body .= "Nama: $nama_lengkap\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subjek: $masalah\n";
    $email_body .= "Pesan:\n$pesan\n";

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
