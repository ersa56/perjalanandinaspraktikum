<?php
class Kwitansi extends Controller
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
        $data['title'] = 'Data Kwitansi';
        $data['tb_kwitansi'] = $this->model('KwitansiModel')->getAllKwitansi();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('kwitansi/index', $data);
        $this->view('templates/footer');
    }

    public function cari()
    {
        $data['title'] = 'Data Kwitansi';
        $data['tb_kwitansi'] = $this->model('KwitansiModel')->cariKwitansi();
        $data['key'] = $_POST['key'];
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('kwitansi/index', $data);
        $this->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Detail Kwitansi';
        $data['tb_kwitansi'] = $this->model('KwitansiModel')->getKwitansiById($id);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('kwitansi/edit', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Kwitansi';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('kwitansi/create', $data);
        $this->view('templates/footer');
    }

    public function simpanKwitansi()
    {
        if ($this->model('KwitansiModel')->tambahKwitansi($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/kwitansi');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/kwitansi');
            exit;
        }
    }

    public function updateKwitansi()
    {
        if ($this->model('KwitansiModel')->updateDataKwitansi($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location:' . base_url . '/kwitansi');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location:' . base_url . '/kwitansi');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('KwitansiModel')->deleteKwitansi($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location:' . base_url . '/kwitansi');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/kwitansi');
            exit;
        }
    }

    public function lihatlaporan()
    {
        $data['title'] = 'Data Laporan Kwitansi';
        $data['tb_kwitansi'] = $this->model('KwitansiModel')->getAllKwitansi();
        $this->view('kwitansi/lihatlaporan', $data);
    }

    public function laporan()
    {
        $data['tb_kwitansi'] = $this->model('KwitansiModel')->getAllKwitansi();
        $pdf = new FPDF('p', 'mm', 'A4');

        // membuat halaman baru 
        $pdf->AddPage();
        // setting jenis font yang akan digunakan 
        $pdf->SetFont('Arial', 'B', 14);
        // mencetak string  
        $pdf->Cell(190, 7, 'LAPORAN DATA KWITANSI', 0, 1, 'C');
        // Memberikan space kebawah agar tidak terlalu rapat 
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(35, 6, 'JUMLAH KWITANSI', 1);
        $pdf->Cell(30, 6, 'KODE KWITANSI', 1);
        $pdf->Cell(35, 6, 'NOMOR KWITANSI', 1);
        $pdf->Cell(40, 6, 'TANGGAL KWITANSI', 1);
        $pdf->Cell(35, 6, 'TOTAL KWITANSI', 1);
        $pdf->Ln();
        $pdf->SetFont('Arial', '', 10);

        foreach ($data['tb_kwitansi'] as $row) {
            $pdf->Cell(35, 6, $row['jumlah_kwitansi'], 1);
            $pdf->Cell(30, 6, $row['kode_kwitansi'], 1);
            $pdf->Cell(35, 6, $row['nomor_kwitansi'], 1);
            $pdf->Cell(40, 6, $row['tanggal_kwitansi'], 1);
            $pdf->Cell(35, 6, $row['total_kwitansi'], 1);
            $pdf->Ln();
        }

        $pdf->Output('I', 'Laporan Kwitansi.pdf', true);
    }

}
