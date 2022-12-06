<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $fasilitas['nama_peminjam']?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $fasilitas['nama_fasilitas']?></h6>
                    <p class="card-text"><?= $fasilitas['tgl_pinjam']?></p>
                    <p class="card-text"><?= $fasilitas['tgl_kembali']?></p>
                    <a href="<?= base_url();?>fasilitas" class="btn btn-primary">Kembali</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>