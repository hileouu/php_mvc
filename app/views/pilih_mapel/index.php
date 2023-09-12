<div class="container mt-3">
      

     <form action="<?= BASEURL; ?>/pilih_mapel/tambah" method="post">

        <div class="form-group">
          <label for="siswa">Siswa</label>
          <select id="siswa_id" class="form-control" name="siswa_id">
              <?php foreach ($data['swa'] as $swa) : ?>
                <option value="<?= $swa['id'] ?>"><?= $swa['nama'] ?></option>
              <?php endforeach; ?>
            </select>
              </div>

        <br>
        <div class="form-group">
          <label for="mata_pelajaran_id">Mata Pelajaran</label>
          <select id="mata_pelajaran_id" class="form-control" name="mata_pelajaran_id[]">
            <?php foreach ($data['mpj'] as $swa) : ?>
                <option value="<?= $swa['id'] ?>"><?= $swa['nama_mapel'] ?></option>
              <?php endforeach; ?>
            </select>
              </div>

              <br>
        <div class="form-group">
          <label for="mata_pelajaran_id">Mata Pelajaran</label>
          <select id="mata_pelajaran_id" class="form-control" name="mata_pelajaran_id[]">
            <?php foreach ($data['mpj'] as $swa) : ?>
                <option value="<?= $swa['id'] ?>"><?= $swa['nama_mapel'] ?></option>
              <?php endforeach; ?>
            </select>
              </div>

              <br>
        <div class="form-group">
          <label for="mata_pelajaran_id">Mata Pelajaran</label>
          <select id="mata_pelajaran_id" class="form-control" name="mata_pelajaran_id[]">
            <?php foreach ($data['mpj'] as $swa) : ?>
                <option value="<?= $swa['id'] ?>"><?= $swa['nama_mapel'] ?></option>
              <?php endforeach; ?>
            </select>
              </div>
          

              <br><br>
              <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
      </div>
        

</div>