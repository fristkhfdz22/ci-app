<div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="card">
  <div class="card-header">
    Detail Data Mahasiswa
  </div>
  <div class="card-body">
  <h2><?= $judul; ?></h2>
    <?php if (!empty($mahasiswa)): ?>
        <p>Nama: <?= $mahasiswa['nama']; ?></p>
        <p>NIS: <?= $mahasiswa['nis']; ?></p>
        <p>Email: <?= $mahasiswa['email']; ?></p>
        <p>Jurusan: <?= $mahasiswa['jurusan']; ?></p>
    <?php else: ?>
        <p>Data tidak ditemukan.</p>
    <?php endif; ?>
    <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
        </div>
    </div>
</div>