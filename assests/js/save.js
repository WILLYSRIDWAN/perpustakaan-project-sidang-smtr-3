$.ajax({
    url: 'save_buku.php',  // Pastikan path ke file save_buku.php benar
    type: 'POST',
    data: formData, // Data yang dikirim
    success: function(response) {
        // Menampilkan pesan sukses atau kesalahan
        $('#responseMessage').html('<div class="alert alert-success">' + response + '</div>');
        $('#bookForm')[0].reset();  // Reset form setelah berhasil
    },
    error: function() {
        // Menampilkan pesan kesalahan jika gagal
        $('#responseMessage').html('<div class="alert alert-danger">Terjadi kesalahan. Silakan coba lagi.</div>');
    }
});
