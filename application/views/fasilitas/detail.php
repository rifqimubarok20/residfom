<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Fasilitas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Detail Fasilitas</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
            <div class="card-body">
                    <h5 class="card-title"><?= $fasilitas['nama_peminjam']?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $fasilitas['nama_fasilitas']?></h6>
                    <p class="card-text"><?= $fasilitas['tgl_pinjam']?></p>
                    <p class="card-text"><?= $fasilitas['tgl_kembali']?></p>
                    <a href="<?= base_url();?>fasilitas" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </section>
</div>