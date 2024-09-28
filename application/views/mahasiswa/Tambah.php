<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form tambah data mahasiswa
                </div>
                <div class="card-body">


                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="" value="<?= set_value('nama'); ?>">
                            <small class="form-text text-danger"><?= form_error('nama')?></small>
                        </div>
                        <div class="form-group">
                            <label for="nis">NIS</label>
                            <input type="text" name="nis" class="form-control" id="nis" placeholder="" value="<?= set_value('nis'); ?>">
                            <small class="form-text text-danger"><?= form_error('nis')?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="" value="<?= set_value('email'); ?>">
                            <small class="form-text text-danger"><?= form_error('email')?></small>
                        </div>
                        <div class="form-group">
                            <label for="Jurusan">Jurusan</label>
                            <select class="form-control" id="Jurusan" name="jurusan">
                                <option value="RPL" <?= set_select('jurusan', 'RPL'); ?>>RPL</option>
                                <option value="AKL" <?= set_select('jurusan', 'AKL'); ?>>AKL</option>
                                <option value="TKJT" <?= set_select('jurusan', 'TKJT'); ?>>TKJT</option>
                                <option value="BP" <?= set_select('jurusan', 'BP'); ?>>BP</option>
                                <option value="PM" <?= set_select('jurusan', 'PM'); ?>>PM</option>
                                <option value="MPLB" <?= set_select('jurusan', 'MPLB'); ?>>MPLB</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
