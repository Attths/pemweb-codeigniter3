<div class="d-flex justify-content-between align-items-center mb-3">
  <h3>📚 Daftar Mahasiswa</h3>
  <a href="<?= base_url('mahasiswa/create') ?>" class="btn btn-primary">
    + Tambah Data
  </a>
</div>

<!-- Flash message (notifikasi) -->
<?php if ($this->session->flashdata('pesan')): ?>
  <div class="alert alert-success alert-dismissible fade show">
    <?= $this->session->flashdata('pesan') ?>
    <button class="btn-close" data-bs-dismiss="alert"></button>
  </div>
<?php endif; ?>

<table class="table table-bordered table-striped bg-white">
  <thead class="table-dark">
    <tr>
      <th>No</th><th>NIM</th><th>Nama</th>
      <th>Jurusan</th><th>Email</th><th width="160">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; foreach ($mahasiswa as $m): ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $m->nim ?></td>
      <td><?= $m->nama ?></td>
      <td><?= $m->jurusan ?></td>
      <td><?= $m->email ?></td>
      <td>
        <a href="<?= base_url('mahasiswa/edit/'.$m->id) ?>"
           class="btn btn-warning btn-sm">Edit</a>
        <a href="<?= base_url('mahasiswa/delete/'.$m->id) ?>"
           class="btn btn-danger btn-sm"
           onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>