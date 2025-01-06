<main class="container my-5 pt-6a">
    <div class="content">
        <h2 class="mb-4 text-center fw-bold">Data Sewa</h2>
        <div class="table-responsive">
            <table class="table table-bordered" id="mytable">
                <thead class="text-center table-sewa-color">
                    <tr>
                        <th style="width: 1%;">No</th>
                        <th>Nama Customer</th>
                        <th>Motor</th>
                        <th>Tanggal Sewa</th>
                        <th>Tanggal Kembali</th>
                        <th>Total Biaya</th>
                        <th>Status</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($sewa)) : ?>
                        <?php foreach ($sewa as $index => $sewa_item) : ?> 
                            <tr>
                                <td class="text-center"><?php echo $index + 1; ?></td>
                                <td><?php echo $sewa_item['nama_customer']; ?></td>
                                <td><?php echo $sewa_item['plat_motor']; ?> - <?php echo $sewa_item['motor']; ?></td>
                                <td class="text-center"><?php echo date('d-m-Y', strtotime($sewa_item['tgl_sewa'])); ?></td>
                                <td class="text-center"><?php echo date('d-m-Y', strtotime($sewa_item['tgl_kembali'])); ?></td>
                                <td class="text-center">Rp <?php echo number_format($sewa_item['total'], 0, ',', '.'); ?></td>
                                <td class="text-center"><?php echo ucfirst($sewa_item['status_sewa']); ?></td>
                                <td class="text-center">
                                    <?php if (strtolower($sewa_item['status_sewa']) == 'aktif') : ?>
                                        <div class="d-flex gap-2 justify-content-center"> 
                                            <a href="<?php echo base_url("sewa/notifSewa/".$sewa_item['id_sewa']) ?>" class="btn btn-primary btn-sm">Kirim Notif</a>
                                            <a class="btn btn-success btn-sm" href="<?php echo site_url('sewa/ubahStatus/' . $sewa_item['id_sewa']); ?>">Selesai Sewa</a>
                                        </div>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="9" class="text-center">Tidak ada data sewa tersedia</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
