<div class="container mt-5">
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-success mb-4" data-toggle="modal" data-target="#tambahData">
        Tambah Data
      </button>

      <h3>Daftar Mahasiswa</h3>

      <ul class="list-group">
        <?php foreach($data['mhs'] as $mhs) : ?>
        <li class="list-group-item text-dark"><?= $mhs['nama']; ?>
          <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right p-2 ml-1"
            onclick="return confirm('apa kamu yakin ingin menghapus <?= $mhs['nama']; ?>')">hapus</a>
          <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>"
            class="badge badge-primary float-right p-2 ml-1">detail</a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="tambahDataLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content text-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahDataLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
              <option value="">pilih jurusan</option>
              <option value="RPL">RPL</option>
              <option value="PBS">PBS</option>
              <option value="TBO">TBO</option>
              <option value="MIA">MIA</option>
              <option value="IPS">IPS</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>