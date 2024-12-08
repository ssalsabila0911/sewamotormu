<div class="container">
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="logo">
            <h2>SEWAMOTORMU</h2>
        </div>
        <nav>
            <ul>
                <li class="<?php echo ($active_page == 'dashboard') ? 'active' : ''; ?>">
                    <a href="<?php echo base_url('dashboard'); ?>">Dashboard</a>
                </li>
                <li class="<?php echo ($active_page == 'data_motor') ? 'active' : ''; ?>">
                    <a href="<?php echo base_url('motor'); ?>">Data Motor</a>
                </li>
                <li class="<?php echo ($active_page == 'data_sewa') ? 'active' : ''; ?>">
                    <a href="<?php echo base_url('sewa'); ?>">Data Sewa</a>
                </li>
                <li class="<?php echo ($active_page == 'data_customer') ? 'active' : ''; ?>">
                    <a href="<?php echo base_url('customer'); ?>">Data Customer</a>
                </li>
            </ul>
        </nav>
        <a href="<?php echo base_url('akun/logout'); ?>" class="logout">Logout</a>
    </aside>

    <!-- Main Content -->
    <div class="content">
        <h2>Data Motor</h2>
        <a href="<?php echo base_url('motor/tambah'); ?>" class="btn-add-motor">Tambah Data</a>
        <div class="table-motor">
            <table>
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Plat Motor</th>
                        <th>Merk &amp; Tipe</th>
                        <th>Harga Sewa</th>
                        <th>Status</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($motor_data)) : ?>
                        <?php foreach ($motor_data as $motor) : ?>
                            <tr>
                                <td>
                                    <img src="<?php echo $this->config->item('url_motor').$motor['gambar']; ?>" alt="<?php echo $motor['motor']; ?>" width="50">
                                </td>
                                <td><?php echo $motor['plat_motor']; ?></td>
                                <td><?php echo $motor['merk']; ?> - <?php echo $motor['motor']; ?></td>
                                <td>Rp <?php echo number_format($motor['harga'], 0, ',', '.'); ?>/hari</td>
                                <td><?php echo ucfirst($motor['status']); ?></td>
                                <td>
                                    <a href="<?php echo base_url('motor/edit/' . $motor['plat_motor']); ?>" class="btn btn-edit-motor">Edit</a>
                                    <a href="<?php echo base_url('motor/delete/' . $motor['plat_motor']); ?>" class="btn btn-delete-motor" onclick="return confirm('Apakah Anda yakin?');">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="6" style="text-align: center;">Tidak ada data motor tersedia</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
