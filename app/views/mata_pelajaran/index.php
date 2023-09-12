<div class="container mt-3">

     <div class="row">
         <div class="col-lg-6">
             <?php Flasher::flash(); ?>
         </div>
     </div>

     <div class="row mb-3">
      <div class="col-lg-6">
      <button type="button" class="btn btn-primary tmblTambahData" data-bs-toggle="modal" data-bs-target="#mpjModal">
            Tambah Mata Pelajaran
          </button>
      </div>
     </div>

     <div class="row mb-3">
      <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/mata_pelajaran/cari" method="post">
              <div class="input-group">
          <input type="text" class="form-control" placeholder="cari mata pelajaran..." name="keyword" id="keyword" autocomplete="off">
          <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
             </div>
    </form>
      </div>
     </div>

      <div class="row">
          <div class="col-lg-6">
            <h3>Mata Pelajaran</h3>
            <ul class="list-group">
              <?php foreach ($data['mpj'] as $mpj) : ?>
                <li class="list-group-item">
                  <?= $mpj['nama_mapel']; ?>
                  <a href="<?= BASEURL; ?>/mata_pelajaran/detail/<?= $mpj['id']; ?>" class="badge text-bg-primary float-end me-1">detail</a>
                  <a href="<?= BASEURL; ?>/mata_pelajaran/ubah/<?= $mpj['id']; ?>" class="badge text-bg-success float-end me-1 tmplModalUbah" data-bs-toggle="modal" data-bs-target="#mpjModal" data-id="<?= $mpj['id']; ?>">ubah</a>
                  <a href="<?= BASEURL; ?>/mata_pelajaran/hapus/<?= $mpj['id']; ?>" class="badge text-bg-danger float-end me-1" onclick="return confirm('yakin?');">hapus</a>
                </li>
              <?php endforeach; ?>
            </ul>
                  
          </div>
      </div>

 </div>


 <!-- Modal -->
<div class="modal fade" id="mpjModal" tabindex="-1" aria-labelledby="mpjModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="mpjModalLabel">Tambah Mata Pelajaran</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      

      <form action="<?= BASEURL; ?>/mata_pelajaran/tambah" method="post">
      <input type="hidden" name="id" id="id">
        <div class="form-group">
            <label for="nama_mapel">Mata Pelajaran</label>
            <input type="text" class="form-control" id="nama_mapel" name="nama_mapel">
        </div>

        <div class="form-group">
            <label for="jam_mulai">Mulai</label>
            <input type="time" class="form-control" id="jam_mulai" name="jam_mulai">
        </div>

        <div class="form-group">
            <label for="jam_selesai">Selesai</label>
            <input type="time" class="form-control" id="jam_selesai" name="jam_selesai">
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