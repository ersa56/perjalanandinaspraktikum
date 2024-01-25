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
            <form role="form" action="<?= base_url; ?>/sppd/simpanSppd" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Anggota Dewan</label>
                        <select class="form-control" name="nama_anggota_dewan_id">
                            <option value="">Pilih</option>
                            <?php foreach ($data['tb_anggota_dewan'] as $row) : ?>
                                <option value="<?= $row['id']; ?>"><?= $row['nama_anggota_dewan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jangka Waktu</label>
                        <input type="date" class="form-control" placeholder="masukkan Jangka Waktu..." name="jangka_waktu">
                    </div>
                    <div class="form-group">
                        <label>Jenis Transportasi</label>
                        <select class="form-control" name="jenis_transportasi">
                            <option value="Mobil Dinas">Mobil Dinas</option>
                            <option value="Mobil Pribadi">Mobil Pribadi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Judul Kegiatan</label>
                        <input type="text" class="form-control" placeholder="masukkan Judul Kegiatan..." name="judul_kegiatan">
                    </div>
                    <div class="form-group">
                        <label>Jumlah Anggaran</label>
                        <input type="number" class="form-control" placeholder="masukkan Jumlah Anggaran..." name="jumlah_anggaran">
                    </div>
                    <div class="form-group">
                        <label>Nomor Lampiran</label>
                        <input type="text" class="form-control" placeholder="masukkan Nomor Lampiran..." name="nomor_lampiran">
                    </div>
                    <div class="form-group">
                        <label>Nomor Rekening</label>
                        <input type="number" class="form-control" placeholder="masukkan Judul Kegiatan..." name="nomor_rekening">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Berangkat</label>
                        <input type="date" class="form-control" placeholder="masukkan Judul Kegiatan..." name="tanggal_berangkat">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pulang</label>
                        <input type="date" class="form-control" placeholder="masukkan Judul Kegiatan..." name="tanggal_pulang">
                    </div>
                    <div class="form-group">
                        <label>Tempat Berangkat</label>
                        <input type="text" class="form-control" placeholder="masukkan Judul Kegiatan..." name="tempat_berangkat">
                    </div>
                    <div class="form-group">
                        <label>Tempat Tujuan</label>
                        <input type="text" class="form-control" placeholder="masukkan Tempat Tujuan..." name="tempat_tujuan">
                    </div>
                    <div class="form-group">
                        <label>Total Relisasi Anggaran</label>
                        <input type="number" class="form-control" placeholder="masukkan Total Relisasi Anggaran..." name="total_relisasi_anggaran">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->      