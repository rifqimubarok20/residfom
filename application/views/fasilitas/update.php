<div class="container">
    <div class="row mt-3">
        <div class="row-md-6">
            <div class="card">
                <div class="card-header">
                    Form Update Data
                </div>
                <div class="card-body">
                <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $fasilitas['id'] ; ?>">
                        <div class="mb-3">
                            <label for="nama_peminjam" class="form-label">Nama Peminjam</label>
                            <input value="<?= $fasilitas['nama_peminjam']; ?>" type="text" name="nama_peminjam" class="form-control" id="nama_peminjam">
                            <small class="form-text text-danger"><?= form_error('nama_peminjam');?></small>
                        </div>
                        <div class="mb-3">
                            <label for="nama_fasilitas" class="form-label">Nama Fasilitas</label>
                            <input value="<?= $fasilitas['nama_fasilitas']; ?>" type="text" name= "nama_fasilitas" class="form-control" id="nama_fasilitas">
                            <small class="form-text text-danger"><?= form_error('nama_fasilitas');?></small>
                        </div>
                        <div class="mb-3">
                            <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
                            <input value="<?= $fasilitas['tgl_pinjam']; ?>" type="date" name= "tgl_pinjam" class="form-control" id="tgl_pinjam">
                            <small class="form-text text-danger"><?= form_error('tgl_pinjam');?></small>
                        </div>
                        <div class="mb-3">
                            <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                            <input value="<?= $fasilitas['tgl_kembali']; ?>" type="date" name= "tgl_kembali" class="form-control" id="tgl_kembali">
                            <small class="form-text text-danger"><?= form_error('tgl_kembali');?></small>
                        </div>
                        <button type="submit" name="update" class="btn btn-primary">Upadate</button>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>