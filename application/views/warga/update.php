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
                        <input type="hidden" name="id" value="<?= $warga['id'] ; ?>">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $warga['nama'];?>">
                            <small class="form-text text-danger"><?= form_error('nama');?></small>
                        </div>
                        <div class="mb-3">
                            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" name= "tgl_lahir" class="form-control" id="tgl_lahir" value="<?= $warga['tgl_lahir'];?>">
                            <small class="form-text text-danger"><?= form_error('tgl_lahir');?></small>
                        </div>
                        <div class="mb-3">
                            <label for="jk" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" aria-label="Default select example" id="jk" name="jk" value="<?= $warga['nama'];?>">
                                <?php foreach ($jk as $j) : ?>
                                    <?php if($j == $warga['jk']) : ?>
                                        <option value="<?= $j ;?>" selected><?= $j ;?></option>
                                    <?php else: ?>
                                        <option value="<?= $j ;?>"><?= $j ;?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('jk');?></small>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $warga['alamat'];?>">
                            <small class="form-text text-danger"><?= form_error('alamat');?></small>
                        </div>
                        <a href="<?= base_url();?>warga" class="btn btn-warning">Kembali</a>
                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                    </form>
        </div>
    </section>
</div>