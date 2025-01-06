<div class="container my-5 pt-6">
    <div class="content">
        <h2 class="mb-4 text-center fw-bold">Data Motor</h2>
            <table class="table table-bordered" id="mytable">
                <thead class="text-center table-mtr-color">
                    <tr>
                        <th style="width: 1%;">No</th>
                        <th>Gambar</th>
                        <th>Plat Motor</th>
                        <th>Merk & Tipe</th>
                        <th>Harga Sewa</th>
                        <th>Status</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($motors)) : ?>
                        <?php foreach ($motors as $index => $motor) : ?>
                            <tr>
                                <td class="text-center"><?php echo $index + 1; ?></td>
                                <td class="text-center">
                                    <img src="<?php echo $this->config->item('url_motor') . $motor['gambar']; ?>" alt="<?php echo $motor['motor']; ?>" width="80">
                                </td>
                                <td><?php echo $motor['plat_motor']; ?></td>
                                <td><?php echo $motor['merk']; ?> - <?php echo $motor['motor']; ?></td>
                                <td>Rp <?php echo number_format($motor['harga'], 0, ',', '.'); ?>/hari</td>
                                <td class="text-center"><?php echo ucfirst($motor['status']); ?></td>
                                <td class="text-center">
                                    <a href="<?php echo base_url('motor/edit/' . $motor['id_motor']); ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="<?php echo base_url('motor/hapus/' . $motor['id_motor']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin?');">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="8" class="text-center">Tidak ada data motor tersedia</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        <div class="d-flex justify-content-end mb-3">
            <a href="<?php echo base_url('motor/tambah'); ?>" class="btn btn-primary btn-sm">Tambah Data</a>
        </div>
    </div>
</div>
