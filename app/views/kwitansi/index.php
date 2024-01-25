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
                <h3 class="card-title"><?= $data['title'] ?></h3>
                <div class="btn-group float-right">
                    <a href="<?= base_url; ?>/kwitansi/tambah" class="btn float-right btn-xs btn btn-primary">Tambah Kwitansi</a>
                    <a href="<?= base_url; ?>/kwitansi/laporan" class="btn float-right btn-xs btn btn-info" target="_blank">Laporan Kwitansi</a>
                    <a href="<?= base_url; ?>/kwitansi/lihatlaporan" class="btn float-right btn-xs btn btn-warning" target="_blank">Lihat Laporan Kwitansi</a>
                </div>
            </div>
            <div class="card-body">
                <form action="<?= base_url; ?>/kwitansi/cari" method="post">
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="" name="key">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
                                    <a class="btn btn-outline-danger" href="<?= base_url; ?>/Kwitansi">Reset</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Jumlah Kwitansi</th>
                            <th>Kode Kwitansi</th>
                            <th>Nomor Kwitansi</th>
                            <th>Tanggal Kwitansi</th>
                            <th>Total Kwitansi</th>
                            <th style="width: 150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($data['tb_kwitansi'] as $row) : ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row['jumlah_kwitansi']; ?></td>
                                <td><?= $row['kode_kwitansi']; ?></td>
                                <td><?= $row['nomor_kwitansi']; ?></td>
                                <td><?= $row['tanggal_kwitansi']; ?></td>
                                <td><?= $row['total_kwitansi']; ?></td>
                                <td>
                                    <a href="<?= base_url; ?>/kwitansi/edit/<?= $row['id'] ?>" class="badge badge-info ">Edit</a>
                                    <a href="<?= base_url; ?>/kwitansi/hapus/<?= $row['id'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>
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