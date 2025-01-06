<?php if (isset($_GET['notif']) && $_GET['notif'] == 'success'): ?>
    <script type="text/javascript">
        alert('Sewa motor Anda berhasil!');
        // Remove ?notif=success from the URL
        const url = new URL(window.location.href);
        url.searchParams.delete('notif'); // Remove the "notif" parameter
        window.history.replaceState({}, document.title, url);
    </script>
<?php endif; ?>

<main class="container mt-5 pt-5 mb-5 flex-grow-1">
<?php if (!empty($cekmidtrans)): ?>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-mrh" style="padding: 15px; border: 1px solid #ddd; border-radius: 8px;">
                        <div class="text-center mb-3">
                            <h4 class="text-danger"><b>Pembayaran belum diselesaikan. Segera lakukan pembayaran sebelum waktu habis!</b></h4>
                        </div>
                        <div class="row">
                            <!-- Kolom kiri -->
                            <div class="col-md-6">
                                <table class="table table-sm">
                                    <tr>
                                        <td><b>Total</b></td>
                                        <td><?php echo $cekmidtrans["gross_amount"] ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Pembayaran</b></td>
                                        <td><?php echo $cekmidtrans["payment_type"] ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Status Pembayaran</b></td>
                                        <td><?php echo $cekmidtrans["transaction_status"] ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Waktu Transaksi</b></td>
                                        <td><?php echo $cekmidtrans["transaction_time"] ?></td>
                                    </tr>
                                </table>
                            </div>

                            <!-- Kolom kanan -->
                            <div class="col-md-6">
                                <table class="table table-sm">
                                    <tr>
                                        <td><b>Nomor VA/BANK</b></td>
                                        <td>
                                            <?php echo isset($cekmidtrans["bill_key"]) ? $cekmidtrans["bill_key"] : "" ?>
                                            <?php echo isset($cekmidtrans['va_numbers'][0]['bank']) ? $cekmidtrans['va_numbers'][0]['bank'] : "" ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Kode VA/QRIS</b></td>
                                        <td>
                                            <?php echo isset($cekmidtrans["biller_code"]) ? $cekmidtrans["biller_code"] : "" ?>
                                            <?php echo isset($cekmidtrans['va_numbers'][0]['va_number']) ? $cekmidtrans['va_numbers'][0]['va_number'] : "" ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Batas Akhir Pembayaran</b></td>
                                        <td><?php echo $cekmidtrans["expiry_time"] ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endif ?>

    <h2 class="mt-5 mb-4 text-center fw-bold">Detail Sewa</h2>
    <div class="card">
        <div class="card-header">
            <h4>Informasi Detail Sewa</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>ID Sewa</th>
                        <td><?php echo $sewa['id_sewa']; ?></td>
                    </tr>
                    <tr>
                        <th>Nama Motor</th>
                        <td><?php echo $sewa['motor']; ?></td>
                    </tr>
                    <tr>
                        <th>Nama User</th>
                        <td><?php echo $sewa['nama']; ?></td>
                    </tr>
                    <tr>
                        <th>Status Bayar</th>
                        <td><?php echo $sewa['status_bayar']; ?></td>
                    </tr>
                    <tr>
                        <th>Lama Sewa</th>
                        <td><?php echo $sewa['lama_sewa_hari']; ?> hari</td>
                    </tr>
                    <tr>
                        <th>Total Pembayaran</th>
                        <td><?php echo $sewa['total']; ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Sewa</th>
                        <td><?php echo $sewa['tgl_sewa']; ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Kembali</th>
                        <td><?php echo $sewa['tgl_sewa']; ?></td>
                    </tr>
                </tbody>
            </table>

            <div class="text-center">
            <?php if (!empty($snapToken)): ?>
            <button type="button" id="pay-button" class="btn btn-success">Bayar Sekarang</button> 
            <?php endif ?>
                <a href="<?php echo base_url('sewa/riwayat'); ?>" class="btn btn-primary">Kembali ke Riwayat Sewa</a>
            </div>
        </div>
    </div>
    
</main>


<?php if (!empty($snapToken)): ?>
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="//client key here"></script>
    <script type="text/javascript">
      document.getElementById('pay-button').onclick = function(){
        snap.pay('<?php echo $snapToken?>', {
          onSuccess: function(result){
            //document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          },
          onPending: function(result){
            //document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          },
          onError: function(result){
            //document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          }
        });
      };
    </script>
<?php endif ?>
