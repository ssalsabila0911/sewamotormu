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
     <main>
        <div class="content">
            <h2>Data Sewa</h2>
            <div class="table-sewa">
                <table>
                    <thead>
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
                        <tr>
                            <td>1</td>
                            <td>AB 1234 CD</td>
                            <td>Honda Vario 150</td>
                            <td>Rp 75,000/hari</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>

