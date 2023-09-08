 <div class="container mt-3">

     <div class="row">
         <div class="col-lg-6">
             <?php Flasher::flash(); ?>
         </div>
     </div>

     <div class="row mb-3">
      <div class="col-lg-6">
      <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Siswa
          </button>
      </div>
     </div>

     <div class="row mb-3">
      <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/siswa/cari" method="post">
              <div class="input-group">
          <input type="text" class="form-control" placeholder="cari siswa..." name="keyword" id="keyword" autocomplete="off">
          <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
             </div>
    </form>
      </div>
     </div>

      <div class="row">
          <div class="col-lg-6">
            <h3>Daftar Siswa</h3>
            <ul class="list-group">
              <?php foreach ($data['swa'] as $swa) : ?>
                <li class="list-group-item">
                  <?= $swa['nama']; ?>
                  <a href="<?= BASEURL; ?>/siswa/detail/<?= $swa['id']; ?>" class="badge text-bg-primary float-end me-1">detail</a>
                  <a href="<?= BASEURL; ?>/siswa/ubah/<?= $swa['id']; ?>" class="badge text-bg-success float-end me-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $swa['id']; ?>">ubah</a>
                  <a href="<?= BASEURL; ?>/siswa/hapus/<?= $swa['id']; ?>" class="badge text-bg-danger float-end me-1" onclick="return confirm('yakin?');">hapus</a>
                </li>
              <?php endforeach; ?>
            </ul>
                  
          </div>
      </div>

 </div>


 <!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      

      <form action="<?= BASEURL; ?>/siswa/tambah" method="post">
      <input type="hidden" name="id" id="id">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>

        <div class="form-group">
            <label for="nis">Nis</label>
            <input type="number" class="form-control" id="nis" name="nis">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <select id="jurusan" class="form-control" name="jurusan">
            <option value="RPL">RPL</option>
            <option value="TKJ">TKJ</option>
            <option value="DKV">DKV</option>
            <option value="Animasi">Animasi</option>
        

          </select>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
      </div>
    </div>
  </div>
</div>