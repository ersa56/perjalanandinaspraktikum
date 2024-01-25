<?php
class Jabatan extends Controller
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
        $data['title'] = 'Data Jabatan';
        $data['tb_jabatan'] = $this->model('JabatanModel')->getAllJabatan();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('jabatan/index', $data);
        $this->view('templates/footer');
    }

    public function cari()
    {
        $data['title'] = 'Data Jabatan';
        $data['tb_jabatan'] = $this->model('JabatanModel')->cariJabatan();
        $data['key'] = $_POST['key'];
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('jabatan/index', $data);
        $this->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Detail Jabatan';
        $data['tb_jabatan'] = $this->model('JabatanModel')->getJabatanById($id);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('jabatan/edit', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Jabatan';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('jabatan/create', $data);
        $this->view('templates/footer');
    }

    public function simpanJabatan()
    {
        if ($this->model('JabatanModel')->tambahJabatan($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/jabatan');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/jabatan');
            exit;
        }
    }

    public function updateJabatan()
    {
        if ($this->model('JabatanModel')->updateDataJabatan($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location:' . base_url . '/jabatan');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location:' . base_url . '/jabatan');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('JabatanModel')->deleteJabatan($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location:' . base_url . '/jabatan');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/jabatan');
            exit;
        }
    }
}
