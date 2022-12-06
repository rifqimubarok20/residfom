<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Update Data</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Update Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="nama_peminjam" class="form-label">Nama Peminjam</label>
                    <input type="text" name="nama_peminjam" class="form-control" id="nama_peminjam">
                    <small class="form-text text-danger">
                        <?= form_error('nama_peminjam'); ?>
                    </small>
                </div>
                <div class="mb-3">
                    <label for="nama_fasilitas" class="form-label">Nama Fasilitas</label>
                    <input type="text" name="nama_fasilitas" class="form-control" id="nama_fasilitas">
                    <small class="form-text text-danger">
                        <?= form_error('nama_fasilitas'); ?>
                    </small>
                </div>
                <div class="mb-3">
                    <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
                    <input type="date" name="tgl_pinjam" class="form-control" id="tgl_pinjam">
                    <small class="form-text text-danger">
                        <?= form_error('tgl_pinjam'); ?>
                    </small>
                </div>
                <div class="mb-3">
                    <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                    <input type="date" name="tgl_kembali" class="form-control" id="tgl_kembali">
                    <small class="form-text text-danger">
                        <?= form_error('tgl_kembali'); ?>
                    </small>
                </div>
                <a href="<?= base_url();?>fasilitas" class="btn btn-warning">Kembali</a>
                <button type="submit" name="create" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </section>
</div>