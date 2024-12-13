<main class="container mt-5 pt-5 flex-grow-1">
    <h2 class="mb-4">Detail Sewa</h2>
    <div class="card">
        <div class="card-header">
            <h4>Informasi Detail Sewa</h4>
        </div>
        <pre><?php print_r($sewa) ?></pre>
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
                        <th>Status Sewa</th>
                        <td><?php echo $sewa['status_sewa']; ?></td>
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
                <a href="<?php echo base_url('sewa/riwayat'); ?>" class="btn btn-primary">Kembali ke Riwayat Sewa</a>
            </div>
        </div>
    </div>
</main>
