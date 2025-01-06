<main class="container mt-5 pt-5 flex-grow-1"> 
    <!-- Tampilkan riwayat sewa -->
    <h4 class="mb-5 fw-bold">Riwayat Sewa</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Total</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($riwayat_sewa as $index => $sewa): ?>
                <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= $sewa['tgl_sewa']; ?></td>
                    <td><?= $sewa['total']; ?></td>
                    <td><?= $sewa['status_bayar']; ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo site_url('sewa/detail_sewa/'.$sewa['id_sewa']); ?>">Detail</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
