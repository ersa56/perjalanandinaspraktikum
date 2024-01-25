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
            <form role="form" action="<?= base_url; ?>/anggota/updateAnggota" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['tb_anggota_dewan']['id']; ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label>Asal</label>
                        <input type="text" class="form-control" placeholder="masukkan judul buku..." name="asal" value="<?= $data['tb_anggota_dewan']['asal']; ?>">
                    </div>
                    <div class="form-group">
                        <label>ID Anggota Dewan</label>
                        <input type="text" class="form-control" placeholder="masukkan penerbit buku..." name="id_anggota_dewan" value="<?= $data['tb_anggota_dewan']['id_anggota_dewan']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin_id">
                            <option value="Pria" <?= ($data['tb_anggota_dewan']['jenis_kelamin_id'] == 'Pria') ? 'selected' : ''; ?>>Pria</option>
                            <option value="Wanita" <?= ($data['tb_anggota_dewan']['jenis_kelamin_id'] == 'Wanita') ? 'selected' : ''; ?>>Wanita</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Anggota Dewan</label>
                        <input type="text" class="form-control" placeholder="masukkan tahun buku..." name="nama_anggota_dewan" value="<?= $data['tb_anggota_dewan']['nama_anggota_dewan']; ?>">
                    </div>
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="text" class="form-control" placeholder="masukkan harga buku..." name="nip" value="<?= $data['tb_anggota_dewan']['nip']; ?>">
                    </div>
                    <div class="form-group">
                        <label>No Anggota Dewan</label>
                        <input type="text" class="form-control" placeholder="masukkan harga buku..." name="no_anggota_dewan" value="<?= $data['tb_anggota_dewan']['no_anggota_dewan']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Tanggal&Lahir</label>
                        <input type="date" class="form-control" placeholder="masukkan harga buku..." name="ttl" value="<?= $data['tb_anggota_dewan']['ttl']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Umur</label>
                        <input type="text" class="form-control" placeholder="masukkan harga buku..." name="umur" value="<?= $data['tb_anggota_dewan']['umur']; ?>">
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