<div class="container mt-5">

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?= $data['swa']['nama']; ?></h5>
        <h6 class="card-subtitle mb-2 tetx-muted"><?= $data['swa']['nis']; ?></h6>
        <p class="card-text"><?= $data['swa']['email']; ?></p>
        <p class="card-text"><?= $data['swa']['jurusan']; ?></p>
        <p class="card-text"><?= $data['swa']['alamat']; ?></p>
        <p class="card-text"><?= $data['swa']['no_tlp']; ?></p>
        <a href="<?= BASEURL; ?>/siswa" class="card-link">Kembali</a>
      </div>
    </div>

</div>