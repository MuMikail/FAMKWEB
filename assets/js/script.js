// Inisialisasi EmailJS dengan Public Key Anda
emailjs.init('gFdcqtUq96WPauyLG');  // Ganti dengan Public Key Anda dari EmailJS

// Event listener untuk form
document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault(); // Mencegah reload halaman

    // Kirim data ke EmailJS
    emailjs.sendForm('service_0qi8aag', 'template_w01nrp4', this)
        .then(function(response) {
            alert('Pesan berhasil dikirim!');
            console.log('SUCCESS!', response.status, response.text);
        }, function(error) {
            alert('Pesan gagal dikirim. Silakan coba lagi.');
            console.log('FAILED...', error);
        });
});
