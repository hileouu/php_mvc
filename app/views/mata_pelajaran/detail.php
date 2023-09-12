<div class="container mt-5">

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?= $data['mpj']['nama_mapel']; ?></h5>
        <p class="card-text"><?= $data['mpj']['jam_mulai']; ?></p>
        <p class="card-text"><?= $data['mpj']['jam_selesai']; ?></p>
        <a href="<?= BASEURL; ?>/mata_pelajaran" class="card-link">Kembali</a>
      </div>
    </div>

</div>