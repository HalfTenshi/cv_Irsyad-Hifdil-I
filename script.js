function showNotification() {
    const notification = document.getElementById('notification');
    
    // Tampilkan notifikasi
    notification.classList.add('show');
    notification.style.display = "block"; // Pastikan elemen terlihat

    // Hapus notifikasi setelah 3 detik
    setTimeout(function() {
        notification.classList.remove('show');
        notification.style.display = "none"; // Sembunyikan elemen setelah dihapus
    }, 3000);
    
    return true; 
}

// Ambil parameter URL untuk memeriksa apakah status adalah "success"
const urlParams = new URLSearchParams(window.location.search);
const status = urlParams.get('status');

if (status === 'success') {
    showNotification();
}