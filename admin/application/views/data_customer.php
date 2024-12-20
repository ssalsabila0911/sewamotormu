<!-- Main Content -->
<main class="container my-5 pt-6">
    <div class="content">
        <h2 class="mb-4 text-center fw-bold">Data Customer</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table text-center table-customer-color">
                    <tr>
                        <th style="width: 11%;">ID Customer</th>
                        <th>Nama</th>
                        <th>Nomor Telepon</th>
                        <th>Email</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($user)) : ?>
                        <?php foreach ($user as $customer) : ?>
                            <tr>
                                <td class="text-center"><?php echo $customer['id_user']; ?></td>
                                <td><?php echo $customer['nama']; ?></td>
                                <td><?php echo $customer['no_tlp']; ?></td>
                                <td><?php echo $customer['email']; ?></td>
                                <td class="text-center">
                                    <a href="<?php echo base_url('customer/detail/' . $customer['id_user']); ?>" class="btn btn-sm btn-success">Detail</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="5" class="text-center">Tidak ada data customer tersedia</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        <div class="d-flex justify-content-end mb-3">
            <a href="<?php echo base_url('customer/tambah'); ?>" class="btn btn-primary btn-sm">Tambah Data</a>
        </div>
        </div>
    </div>
</main>
