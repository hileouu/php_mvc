<?php

class mata_pelajaran extends Controller {
    public function index()
    {
        $data['judul'] = 'Jadwal';
        $data['mpj'] = $this->model('mataPelajaran_model')->getAllMata_pelajaran();
        $this->view('templates/header', $data);
        $this->view('mata_pelajaran/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Jadwal';
        $data['mpj'] = $this->model('mataPelajaran_model')->getMata_pelajaranById($id);
        $this->view('templates/header', $data);
        $this->view('mata_pelajaran/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('mataPelajaran_model')->tambahMataPelajaran($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'mata pelajaran');
            header('Location: ' . BASEURL . '/mata_pelajaran');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'mata pelajaran');
            header('Location: ' . BASEURL . '/mata_pelajaran');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('mataPelajaran_model')->hapusMataPelajaran($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success', 'mata pelajaran');
            header('Location: ' . BASEURL . '/mata_pelajaran');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger', 'nama pelajaran');
            header('Location: ' . BASEURL . '/mata_pelajaran');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('mataPelajaran_model')->getMata_pelajaranById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('mataPelajaran_model')->ubahMataPelajaran($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success', 'mata pelajaran');
            header('Location: ' . BASEURL . '/mata_pelajaran');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger', 'mata pelajaran' );
            header('Location: ' . BASEURL . '/mata_pelajaran');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Jadwal';
        $data['mpj'] = $this->model('mataPelajaran_model')->cariMataPelajaran();
        $this->view('templates/header', $data);
        $this->view('mata_pelajaran/index', $data);
        $this->view('templates/footer');
    }

    

}