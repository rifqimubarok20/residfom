<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Warga</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Detail Warga</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= $warga['nama']?></h5>
                    <p class="card-text text-muted"><?= $warga['tgl_lahir']?></p>
                    <p class="card-text"><?= $warga['jk']?></p>
                    <p class="card-text"><?= $warga['alamat']?></p>
                    <a href="<?= base_url();?>warga" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </section>
</div>