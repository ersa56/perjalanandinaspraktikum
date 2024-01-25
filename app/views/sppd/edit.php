<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $data['title']; ?></h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><?= $data['title']; ?></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="<?= base_url; ?>/sppd/updateSppd" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['tb_sppd']['id']; ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Anggota Dewan</label>
                        <select class="form-control" name="nama_anggota_dewan_id">
                            <option value="">Pilih</option>
                            <?php foreach ($data['tb_anggota_dewan'] as $row) : ?>
                                <option value="<?= $row['id']; ?>" <?php if ($data['tb_sppd']['nama_anggota_dewan_id'] == $row['id']) {
                                                                        echo "selected";
                                                                    } ?>><?= $row['nama_anggota_dewan']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jangka Waktu</label>
                        <input type="date" class="form-control" placeholder="masukkan judul buku..." name="jangka_waktu" value="<?= $data['tb_sppd']['jangka_waktu']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Jenis Transportasi</label>
                        <select class="form-control" name="jenis_transportasi">
                            <option value="Mobil Dinas" <?= ($data['tb_sppd']['jenis_transportasi'] == 'Mobil Dinas') ? 'selected' : ''; ?>>Mobil Dinas</option>
                            <option value="Mobil Pribadi" <?= ($data['tb_sppd']['jenis_transportasi'] == 'Mobil Pribadi') ? 'selected' : ''; ?>>Mobil Pribadi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Judul Kegiatan</label>
                        <input type="text" class="form-control" placeholder="masukkan penerbit buku..." name="judul_kegiatan" value="<?= $data['tb_sppd']['judul_kegiatan']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Jumlah Anggaran</label>
                        <input type="number" class="form-control" placeholder="masukkan pengarang buku..." name="jumlah_anggaran" value="<?= $data['tb_sppd']['jumlah_anggaran']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Nomor Lampiran</label>
                        <input type="text" class="form-control" placeholder="masukkan tahun buku..." name="nomor_lampiran" value="<?= $data['tb_sppd']['nomor_lampiran']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Nomor Rekening</label>
                        <input type="number" class="form-control" placeholder="masukkan harga buku..." name="nomor_rekening" value="<?= $data['tb_sppd']['nomor_rekening']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Berangkat</label>
                        <input type="date" class="form-control" placeholder="masukkan harga buku..." name="tanggal_berangkat" value="<?= $data['tb_sppd']['tanggal_berangkat']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pulang</label>
                        <input type="date" class="form-control" placeholder="masukkan harga buku..." name="tanggal_pulang" value="<?= $data['tb_sppd']['tanggal_pulang']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Tempat Berangkat</label>
                        <input type="text" class="form-control" placeholder="masukkan harga buku..." name="tempat_berangkat" value="<?= $data['tb_sppd']['tempat_berangkat']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Tempat Tujuan</label>
                        <input type="text" class="form-control" placeholder="masukkan harga buku..." name="tempat_tujuan" value="<?= $data['tb_sppd']['tempat_tujuan']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Total Relisasi Anggaran</label>
                        <input type="number" class="form-control" placeholder="masukkan harga buku..." name="total_relisasi_anggaran" value="<?= $data['tb_sppd']['total_relisasi_anggaran']; ?>">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>
    <!-- /.content -->
</div>