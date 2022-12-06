<div class="container">

    <?php if ( $this->session->flashdata('flash') ): ?>
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Success !</strong> Data Fasilitas 
                    <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url('fasilitas/create')?>" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
            <div class="input-group mb-3">
                <input type="text" name="keyword" class="form-control" placeholder="Search Data" aria-label="Search Data" aria-describedby="button-addon2">
                <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
            </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <h3>Data Fasilitas</h3>
        <?php if (empty($fasilitas)) : ?>
            <div class="alert alert-danger" role="alert">
                Data Fasilitas Tidak Ada
            </div>
        <?php endif; ?>
            <table class="table table-bordered">
                <tr>
                    <th scope="col">Nama Peminjam</th>
                    <th scope="col">Nama Fasilitas</th>
                    <th scope="col">Tangggal Pinjam</th>
                    <th scope="col">Tanggal Kembali</th>
                </tr>
                <?php foreach( $fasilitas as $fasilitas) : ?>
                <tr>
                    <td><?= $fasilitas['nama_peminjam']?></td>
                    <td><?= $fasilitas['nama_fasilitas']?></td>
                    <td><?= $fasilitas['tgl_pinjam']?></td>
                    <td><?= $fasilitas['tgl_kembali']?></td>
                    <td>
                        <a href="<?= base_url(); ?>fasilitas/delete/<?= $fasilitas['id']; ?>"
                        class="badge text-bg-danger" onclick="return confirm('Yakin ingin menghapus ?');">Hapus</a>
                        <a href="<?= base_url(); ?>fasilitas/update/<?= $fasilitas['id']; ?>"
                        class="badge text-bg-success">Update</a>
                        <a href="<?= base_url(); ?>fasilitas/detail/<?= $fasilitas['id']; ?>"
                        class="badge text-bg-primary">Detail</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>

            <!-- Tidak Terbaca -->
            <?= $this->pagination->create_links(); ?>
    </div>
</div>