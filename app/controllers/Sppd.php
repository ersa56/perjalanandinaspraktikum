<?php
class Sppd extends Controller
{
    public function __construct()
    {
        if ($_SESSION['session_login'] != 'sudah_login') {
            Flasher::setMessage('Login', 'Tidak ditemukan.', 'danger');
            header('location: ' . base_url . '/login');
            exit;
        }
    }

    public function index()
    {
        $data['title'] = 'Data Sppd';
        $data['tb_sppd'] = $this->model('SppdModel')->getAllSppd();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('sppd/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah SPDD';
        $data['tb_anggota_dewan'] = $this->model('AnggotaDewanModel')->getAllAnggota();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('sppd/create', $data);
        $this->view('templates/footer');
    }

    public function simpanSppd()
    {
        if ($this->model('SppdModel')->tambahSppd($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/sppd');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/sppd');
            exit;
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Detail SPPD';
        $data['tb_anggota_dewan'] = $this->model('AnggotaDewanModel')->getAllAnggota();
        $data['tb_sppd'] = $this->model('SppdModel')->getSppdById($id);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('sppd/edit', $data);
        $this->view('templates/footer');
    }

    public function updateSppd()
    {
        if ($this->model('SppdModel')->updateDataSppd($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location: ' . base_url . '/sppd');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location: ' . base_url . '/sppd');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('SppdModel')->deleteSppd($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . base_url . '/sppd');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/sppd');
            exit;
        }
    }

    public function cari()
    {
        $data['title'] = 'Data SPPD';
        $data['tb_sppd'] = $this->model('SppdModel')->cariSppd();
        $data['key'] = $_POST['key'];
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('sppd/index', $data);
        $this->view('templates/footer');
    }

    public function lihatlaporan()
    {
        $data['title'] = 'Data Laporan SPPD';
        $data['tb_sppd'] = $this->model('SppdModel')->getAllSppd();
        $this->view('sppd/lihatlaporan', $data);
    }

}
