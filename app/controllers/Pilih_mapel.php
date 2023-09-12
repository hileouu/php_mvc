<?php
class Pilih_mapel extends Controller {
    public function index()
    {
        $data['judul'] = 'Mata Pelajaran';
        $data['mpj'] = $this->model('mataPelajaran_model')->getAllMata_pelajaran();
        $data['swa'] = $this->model('Siswa_model')->getAllSiswa();
        $this->view('templates/header', $data);
        $this->view('pilih_mapel/index', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if( $this->model('mapel_model')->tambahMapel($_POST)  > 0 ) {
            Flasher::setFlash('berhasil', 'dipilih', 'success', 'mata pelajaran');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }

} 