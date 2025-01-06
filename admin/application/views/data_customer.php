<div class="container my-5 pt-5">
    <div class="content">
        <h2 class="mb-4 text-center fw-bold">Data Customer</h2>
        <div class="table-responsive">
            <table class="table table-bordered" id="mytable">
                <thead class="text-center table-customer-color">
                    <tr>
                        <th style="width: 1%;">No</th>
                        <th>Nama</th>
                        <th>Nomor Telepon</th>
                        <th>Email</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($user)) : ?>
                        <?php foreach ($user as $index => $customer) : ?> 
                            <tr>
                                <td class="text-center"><?php echo $index + 1; ?></td>
                                <td><?php echo $customer['nama']; ?></td>
                                <td><?php echo $customer['no_tlp']; ?></td>
                                <td><?php echo $customer['email']; ?></td>
                                <td class="text-center">
                                    <a href="<?php echo base_url('customer/detail/'. $customer['id_user']) ?>" class="btn btn-sm btn-success">Detail</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada data customer tersedia</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
