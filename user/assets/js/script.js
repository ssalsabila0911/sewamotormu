// Contoh logika JavaScript jika diperlukan
$(document).ready(function() {
    $('#lama_sewa').on('input', function() {
        var lama_sewa = $(this).val();
        var harga = $('input[name="harga"]').val();
        var total = lama_sewa * harga;
        $('#total_sewa').text('Total: Rp ' + total);
    });
});
