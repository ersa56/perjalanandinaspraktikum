<?php
class KwitansiModel
{
    private $table = 'tb_kwitansi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKwitansi()
    {
        $this->db->query('SELECT * FROM ' . $this->table);

        return $this->db->resultSet();
    }

    public function getKwitansiById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function tambahKwitansi($data)
    {
        $query = "INSERT INTO tb_kwitansi(jumlah_kwitansi, kode_kwitansi, nomor_kwitansi, tanggal_kwitansi, total_kwitansi) VALUES (:jumlah_kwitansi, :kode_kwitansi, :nomor_kwitansi, :tanggal_kwitansi, :total_kwitansi)";
        $this->db->query($query);
        $this->db->bind('jumlah_kwitansi', $data['jumlah_kwitansi']);
        $this->db->bind('kode_kwitansi', $data['kode_kwitansi']);
        $this->db->bind('nomor_kwitansi', $data['nomor_kwitansi']);
        $this->db->bind('tanggal_kwitansi', $data['tanggal_kwitansi']);
        $this->db->bind('total_kwitansi', $data['total_kwitansi']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataKwitansi($data)
    {
        $query = 'UPDATE tb_kwitansi SET jumlah_kwitansi=:jumlah_kwitansi, kode_kwitansi=:kode_kwitansi, nomor_kwitansi=:nomor_kwitansi, tanggal_kwitansi=:tanggal_kwitansi, total_kwitansi=:total_kwitansi WHERE id=:id';
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('jumlah_kwitansi', $data['jumlah_kwitansi']);
        $this->db->bind('kode_kwitansi', $data['kode_kwitansi']);
        $this->db->bind('nomor_kwitansi', $data['nomor_kwitansi']);
        $this->db->bind('tanggal_kwitansi', $data['tanggal_kwitansi']);
        $this->db->bind('total_kwitansi', $data['total_kwitansi']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteKwitansi($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariKwitansi()
    {
        $key = $_POST['key'];
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE jumlah_kwitansi LIKE :key');
        $this->db->bind('key', "%$key%");

        return $this->db->resultSet();
    }

}
