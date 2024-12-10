<main class="container mt-5 pt-5 flex-grow-1">
    <section id="motor" class="py-5">
        <div class="container">
            <div class="text-center">
                <h2 class="mb-5 fw-bold text-motor">List Motor</h2>
            </div>
            <div class="row">
                <?php foreach ($motors as $motor): ?>
                    <div class="col-md-6 col-lg-3 mb-4">
                         <a href="<?php echo site_url('motor/detail_motor/'.$motor['id_motor']); ?>" class="text-decoration-none">
                            <div class="card shadow-sm">
                                <img src="<?php echo $this->config->item('url_motor').$motor['gambar']; ?>" class="card-img-top" alt="<?php echo $motor['motor']; ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $motor['motor']; ?></h5>
                                    <p class="card-text text-muted">Harga sewa: Rp<?php echo number_format($motor['harga'], 0, ',', '.'); ?>/hari</p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>
