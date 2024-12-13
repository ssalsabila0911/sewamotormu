<main class="container my-5 pt-6">
    <div class="content">
        <h2 class="mb-4 text-center fw-bold">Data Sewa</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table text-center table-sewa-color">
                    <tr>
                        <th>ID Sewa</th>
                        <th>Nama Customer</th>
                        <th>Motor</th>
                        <th>Tanggal Sewa</th>
                        <th>Tanggal Kembali</th>
                        <th>Total Biaya</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($sewa)) : ?>
                        <?php foreach ($sewa as $sewa_item) : ?>
                            <tr>
                                <td class="text-center"><?php echo $sewa_item['id_sewa']; ?></td>
                                <td><?php echo $sewa_item['nama_customer']; ?></td>
                                <td><?php echo $sewa_item['merk']; ?> - <?php echo $sewa_item['motor']; ?></td>
                                <td class="text-center"><?php echo date('d-m-Y', strtotime($sewa_item['tgl_sewa'])); ?></td>
                                <td class="text-center"><?php echo date('d-m-Y', strtotime($sewa_item['tgl_kembali'])); ?></td>
                                <td class="text-center">Rp <?php echo number_format($sewa_item['total'], 0, ',', '.'); ?></td>
                                <td class="text-center"><?php echo ucfirst($sewa_item['status_sewa']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="7" class="text-center">Tidak ada data sewa tersedia</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
