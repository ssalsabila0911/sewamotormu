$(document).ready(function () {
    // switch dari mode edit dan lihat
    function toggleEditMode() {
        // Menyembunyikan dan menampilkan elemen yang sesuai
        $('.profile-view').toggleClass('d-none');
        $('.profile-edit').toggleClass('d-none');
        $('#saveBtn').toggleClass('d-none');
        $('#cancelBtn').toggleClass('d-none');
        $('#editBtn').toggleClass('d-none');
    }
  
    // tombol 'Edit Profil' diklik, beralih ke mode edit
    $('#editBtn').click(function () {
        toggleEditMode();
    });
  
    // tombol 'Simpan Perubahan' diklik, simpan perubahan
    $('#saveBtn').click(function (e) {
        e.preventDefault();
  
        // Ambil nilai dari input form
        var name = $('#editName').val();
        var email = $('#editEmail').val();
        var gender = $('#editGender').val();
        var phone = $('#editPhone').val();
        var address = $('#editAddress').val();
  
        // Perbarui tampilan profil dengan data baru
        $('#viewName').text(name);
        $('#viewEmail').text(email);
        $('#viewGender').text(gender);
        $('#viewPhone').text(phone);
        $('#viewAddress').text(address);
  
        // Beralih kembali ke mode lihat
        toggleEditMode();
    });
  
    // tombol 'Batal' diklik, batalkan perubahan dan kembali ke mode lihat
    $('#cancelBtn').click(function () {
        toggleEditMode();
    });
  
    // Menangani perubahan foto profil
    $('#editPhoto').change(function () {
        var file = this.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#profilePhoto').attr('src', e.target.result); // Mengubah foto profil
            };
            reader.readAsDataURL(file); // Membaca file gambar yang dipilih
        }
    });
  
    // Ketika foto profil diklik, hanya bisa melakukan pemilihan file jika dalam mode edit
    $('#profilePhoto').click(function () {
        if (!$('#editBtn').hasClass('d-none')) {
            // Jika tombol Edit Profil terlihat, berarti tidak dalam mode edit
            return;
        }
        $('#editPhoto').click(); // Memicu klik pada input file
    });
  });