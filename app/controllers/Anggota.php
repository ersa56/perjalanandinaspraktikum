<?php
class Anggota extends Controller
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
        $data['title'] = 'Data Anggota';
        $data['tb_anggota_dewan'] = $this->model('AnggotaDewanModel')->getAllAnggota();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('anggota/index', $data);
        $this->view('templates/footer');
    }

    public function cari()
    {
        $data['title'] = 'Data Anggota';
        $data['tb_anggota_dewan'] = $this->model('AnggotaDewanModel')->cariAnggota();
        $data['key'] = $_POST['key'];
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('anggota/index', $data);
        $this->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Detail Anggota';
        $data['tb_anggota_dewan'] = $this->model('AnggotaDewanModel')->getAnggotaById($id);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('anggota/edit', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Anggota';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('anggota/create', $data);
        $this->view('templates/footer');
    }

    public function simpanAnggota()
    {
        if ($this->model('AnggotaDewanModel')->tambahAnggota($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/anggota');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/anggota');
            exit;
        }
    }

    public function updateAnggota()
    {
        if ($this->model('AnggotaDewanModel')->updateDataAnggota($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location:' . base_url . '/anggota');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location:' . base_url . '/anggota');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('AnggotaDewanModel')->deleteAnggota($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location:' . base_url . '/anggota');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/anggota');
            exit;
        }
    }

    public function lihatlaporan()
    {
        $data['title'] = 'Data Laporan Anggota';
        $data['tb_anggota_dewan'] = $this->model('AnggotaDewanModel')->getAllAnggota();
        $this->view('anggota/lihatlaporan', $data);
    }


    public function laporan()
    {
        $data['tb_anggota_dewan'] = $this->model('AnggotaDewanModel')->getAllAnggota();
        $pdf = new FPDF('p', 'mm', 'A4');

        // membuat halaman baru 
        $pdf->AddPage();
        // setting jenis font yang akan digunakan 
        $pdf->SetFont('Arial', 'B', 14);
        // mencetak string  
        $pdf->Cell(190, 7, 'LAPORAN DATA ANGGOTA DEWAN', 0, 1, 'C');
        // Memberikan space kebawah agar tidak terlalu rapat 
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(30, 6, 'ASAL', 1);
        $pdf->Cell(25, 6, 'ID ANGGOTA', 1);
        $pdf->Cell(20, 6, 'JK', 1);
        $pdf->Cell(35, 6, 'NAMA ANGGOTA', 1);
        $pdf->Cell(20, 6, 'NIP', 1);
        $pdf->Cell(20, 6, 'NO.TELP', 1);
        $pdf->Cell(45, 6, 'TTL', 1);
        $pdf->Ln();
        $pdf->SetFont('Arial', '', 10);

        foreach ($data['tb_anggota_dewan'] as $row) {
            $pdf->Cell(30, 6, $row['asal'], 1);
            $pdf->Cell(25, 6, $row['id_anggota_dewan'], 1);
            $pdf->Cell(20, 6, $row['jenis_kelamin_id'], 1);
            $pdf->Cell(35, 6, $row['nama_anggota_dewan'], 1);
            $pdf->Cell(20, 6, $row['nip'], 1);
            $pdf->Cell(20, 6, $row['no_anggota_dewan'], 1);
            $pdf->Cell(45, 6, $row['ttl'], 1);
            $pdf->Ln();
        }

        $pdf->Output('I', 'Laporan Anggota.pdf', true);
    }

}
