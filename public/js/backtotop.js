// Ketika dokumen telah dimuat sepenuhnya
document.addEventListener("DOMContentLoaded", function() {
    // Jika pengguna telah menggulir lebih dari 20 piksel dari bagian atas dokumen
    window.onscroll = function() {
        scrollFunction();
    };
    
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            // Tampilkan tombol back to top
            document.getElementById("back-to-top").style.display = "block";
        } else {
            // Sembunyikan tombol back to top
            document.getElementById("back-to-top").style.display = "none";
        }
    }
    
    // Ketika tombol back to top diklik
    document.getElementById("back-to-top").addEventListener("click", function(event) {
        // Menghentikan perilaku default dari tautan
        event.preventDefault();
        // Gulir halaman ke bagian atas
        document.body.scrollTop = 0; // Untuk Safari
        document.documentElement.scrollTop = 0; // Untuk Chrome, Firefox, IE, dan Opera
    });
});