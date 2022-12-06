<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $warga['nama']?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $warga['tgl_lahir']?></h6>
                    <p class="card-text"><?= $warga['alamat']?></p>
                    <p class="card-text"><?= $warga['jk']?></p>
                    <a href="<?= base_url();?>warga" class="btn btn-primary">Kembali</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>