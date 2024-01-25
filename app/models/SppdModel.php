<?php
class SppdModel
{
    private $table = 'tb_sppd';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSppd()
    {
        $this->db->query('SELECT tb_sppd.*, tb_anggota_dewan.nama_anggota_dewan FROM ' . $this->table . ' JOIN tb_anggota_dewan ON tb_anggota_dewan.id = tb_sppd.nama_anggota_dewan_id');

        return $this->db->resultSet();
    }

    public function getSppdById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' JOIN tb_anggota_dewan ON tb_anggota_dewan.id = tb_sppd.nama_anggota_dewan_id WHERE tb_sppd.id=:id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function tambahSppd($data)
    {
        $query = "INSERT INTO tb_sppd(nama_anggota_dewan_id, jangka_waktu, jenis_transportasi, judul_kegiatan, jumlah_anggaran, nomor_lampiran, nomor_rekening, tanggal_berangkat, tanggal_pulang, tempat_berangkat, tempat_tujuan, total_relisasi_anggaran) VALUES (:nama_anggota_dewan_id, :jangka_waktu, :jenis_transportasi, :judul_kegiatan, :jumlah_anggaran, :nomor_lampiran, :nomor_rekening, :tanggal_berangkat, :tanggal_pulang, :tempat_berangkat, :tempat_tujuan, :total_relisasi_anggaran)";
        $this->db->query($query);
        $this->db->bind('nama_anggota_dewan_id', $data['nama_anggota_dewan_id']);
        $this->db->bind('jangka_waktu', $data['jangka_waktu']);
        $this->db->bind('jenis_transportasi', $data['jenis_transportasi']);
        $this->db->bind('judul_kegiatan', $data['judul_kegiatan']);
        $this->db->bind('jumlah_anggaran', $data['jumlah_anggaran']);
        $this->db->bind('nomor_lampiran', $data['nomor_lampiran']);
        $this->db->bind('nomor_rekening', $data['nomor_rekening']);
        $this->db->bind('tanggal_berangkat', $data['tanggal_berangkat']);
        $this->db->bind('tanggal_pulang', $data['tanggal_pulang']);
        $this->db->bind('tempat_berangkat', $data['tempat_berangkat']);
        $this->db->bind('tempat_tujuan', $data['tempat_tujuan']);
        $this->db->bind('total_relisasi_anggaran', $data['total_relisasi_anggaran']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataSppd($data)
    {
        $query = "UPDATE tb_sppd SET nama_anggota_dewan_id=:nama_anggota_dewan_id, jangka_waktu=:jangka_waktu, jenis_transportasi=:jenis_transportasi, judul_kegiatan=:judul_kegiatan, jumlah_anggaran=:jumlah_anggaran, nomor_lampiran=:nomor_lampiran, nomor_rekening=:nomor_rekening, tanggal_berangkat=:tanggal_berangkat, tanggal_pulang=:tanggal_pulang, tempat_berangkat=:tempat_berangkat, tempat_tujuan=:tempat_tujuan, total_relisasi_anggaran=:total_relisasi_anggaran WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama_anggota_dewan_id', $data['nama_anggota_dewan_id']);
        $this->db->bind('jangka_waktu', $data['jangka_waktu']);
        $this->db->bind('jenis_transportasi', $data['jenis_transportasi']);
        $this->db->bind('judul_kegiatan', $data['judul_kegiatan']);
        $this->db->bind('jumlah_anggaran', $data['jumlah_anggaran']);
        $this->db->bind('nomor_lampiran', $data['nomor_lampiran']);
        $this->db->bind('nomor_rekening', $data['nomor_rekening']);
        $this->db->bind('tanggal_berangkat', $data['tanggal_berangkat']);
        $this->db->bind('tanggal_pulang', $data['tanggal_pulang']);
        $this->db->bind('tempat_berangkat', $data['tempat_berangkat']);
        $this->db->bind('tempat_tujuan', $data['tempat_tujuan']);
        $this->db->bind('total_relisasi_anggaran', $data['total_relisasi_anggaran']);
        $this->db->execute();

        return $this->db->rowCount();
    }
    
    public function deleteSppd($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariSppd()
    {
        $key = $_POST['key'];
        $this->db->query('SELECT * FROM ' . $this->table . ' JOIN tb_anggota_dewan ON tb_anggota_dewan.id = tb_sppd.nama_anggota_dewan_id WHERE judul_kegiatan LIKE :key');
        $this->db->bind('key', "%$key%");

        return $this->db->resultSet();
    }
}
