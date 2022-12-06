<div class="container">

    <?php if ( $this->session->flashdata('flash') ): ?>
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Success !</strong> Data Warga 
                    <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url('warga/create')?>" class="btn btn-primary">Tambah Data</a>
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
        <h3>Data Warga</h3>
        <?php if (empty($warga)) : ?>
            <div class="alert alert-danger" role="alert">
                Data Warga Tidak Ada
            </div>
        <?php endif; ?>
            <table class="table table-bordered">
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jenis Kelamin</th>
                </tr>
                <?php foreach( $warga as $warga) : ?>
                <tr>
                    <td><?= $warga['nama']?></td>
                    <td><?= $warga['tgl_lahir']?></td>
                    <td><?= $warga['alamat']?></td>
                    <td><?= $warga['jk']?></td>
                    <td>
                        <a href="<?= base_url(); ?>warga/delete/<?= $warga['id']; ?>"
                        class="badge text-bg-danger" onclick="return confirm('Yakin ingin menghapus ?');">Hapus</a>
                        <a href="<?= base_url(); ?>warga/update/<?= $warga['id']; ?>"
                        class="badge text-bg-success">Update</a>
                        <a href="<?= base_url(); ?>warga/detail/<?= $warga['id']; ?>"
                        class="badge text-bg-primary">Detail</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>

            <!-- Tidak Terbaca -->
            <?= $this->pagination->create_links(); ?>
    </div>
</div>