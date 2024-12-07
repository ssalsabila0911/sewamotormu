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
        <a href="tambah_motor.html" class="btn-add">Tambah Data</a>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Plat Nomor</th>
                        <th>Merk &amp; Tipe</th>
                        <th>Harga Sewa</th>
                        <th>Status</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="https://via.placeholder.com/50" alt="Motor"></td>
                        <td>AB 1234 CD</td>
                        <td>Honda Vario 150</td>
                        <td>Rp 75,000/hari</td>
                        <td>Tersedia</td>
                        <td>
                            <a href="edit_motor.html" class="btn btn-edit">Edit</a>
                            <a href="delete.html" class="btn btn-delete">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
