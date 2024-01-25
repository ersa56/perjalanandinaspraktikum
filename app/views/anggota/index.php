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
        <div class="row">
            <div class="col-sm-12">
                <?php Flasher::Message(); ?>
            </div>
        </div>
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <a href="<?= base_url; ?>/anggota/tambah" class="btn float-right btn-xs btn btn-primary">Tambah Anggota</a>
                <a href="<?= base_url; ?>/anggota/laporan" class="btn float-right btn-xs btn btn-info" target="_blank">Laporan Anggota</a>
                <a href="<?= base_url; ?>/anggota/lihatlaporan" class="btn float-right btn-xs btn btn-warning" target="_blank">Lihat Laporan Anggota</a>
            </div>
            <div class="card-body">
                <form action="<?= base_url; ?>/anggota/cari" method="post">
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="" name="key">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
                                    <a class="btn btn-outline-danger" href="<?= base_url; ?>/anggota">Reset</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Asal</th>
                            <th>ID Anggota Dewan</th>
                            <th>Jenis Kelamin</th>
                            <th>Nama Anggota</th>
                            <th>NIP</th>
                            <th>No Anggota</th>
                            <th>ttl</th>
                            <th>umur</th>
                            <th style="width: 150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($data['tb_anggota_dewan'] as $row) : ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row['asal']; ?></td>
                                <td><?= $row['id_anggota_dewan']; ?></td>
                                <td>
                                    <div class="badge badge-warning"><?= $row['jenis_kelamin_id']; ?></div>
                                </td>
                                <td><?= $row['nama_anggota_dewan']; ?></td>
                                <td><?= $row['nip']; ?></td>
                                <td><?= $row['no_anggota_dewan']; ?></td>
                                <td><?= $row['ttl']; ?></td>
                                <td><?= $row['umur']; ?></td>
                                <td>

                                    <a href="<?= base_url; ?>/anggota/edit/<?= $row['id'] ?>" class="badge badge-info ">Edit</a>
                                    <a href="<?= base_url; ?>/anggota/hapus/<?= $row['id'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                                </td>
                            </tr>
                        <?php $no++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->