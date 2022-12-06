<div class="container">
    <div class="row mt-3">
        <div class="row-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama');?></small>
                        </div>
                        <div class="mb-3">
                            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" name= "tgl_lahir" class="form-control" id="tgl_lahir">
                            <small class="form-text text-danger"><?= form_error('tgl_lahir');?></small>
                        </div>
                        <div class="mb-3">
                            <label for="jk" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" aria-label="Default select example" id="jk" name="jk">
                                <option selected>Jenis Kelamin</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                            <small class="form-text text-danger"><?= form_error('jk');?></small>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat">
                            <small class="form-text text-danger"><?= form_error('alamat');?></small>
                        </div>
                        <button type="submit" name="create" class="btn btn-primary">Simpan</button>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>