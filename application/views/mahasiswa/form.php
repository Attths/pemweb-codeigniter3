<h3><?= $title ?></h3>

<!-- tampilkan error validasi -->
<?= validation_errors('<div class="alert alert-danger">', '</div>') ?>

<form method="post" action="<?= $aksi ?>" class="card card-body bg-white">
  <div class="mb-3">
    <label class="form-label">NIM</label>
    <input type="text" name="nim" class="form-control"
           value="<?= $mhs->nim ?? set_value('nim') ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control"
           value="<?= $mhs->nama ?? set_value('nama') ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Jurusan</label>
    <input type="text" name="jurusan" class="form-control"
           value="<?= $mhs->jurusan ?? set_value('jurusan') ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control"
           value="<?= $mhs->email ?? set_value('email') ?>">
  </div>
  <button class="btn btn-primary">Simpan</button>
  <a href="<?= base_url('mahasiswa') ?>" class="btn btn-secondary">Batal</a>
</form>