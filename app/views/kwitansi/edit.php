<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Halaman Kwitansi</h1>
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
            <form role="form" action="<?= base_url; ?>/kwitansi/updateKwitansi" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['tb_kwitansi']['id']; ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label>Jumlah Kwitansi</label>
                        <input type="text" class="form-control" placeholder="masukkan golongan Jumlah Kwitansi..." name="jumlah_kwitansi" value="<?= $data['tb_kwitansi']['jumlah_kwitansi']; ?>">
                        <label>Kode Kwitansi</label>
                        <input type="text" class="form-control" placeholder="masukkan gugus Kode Kwitansi..." name="kode_kwitansi" value="<?= $data['tb_kwitansi']['kode_kwitansi']; ?>">
                        <label>Nomor Kwitansi</label>
                        <input type="text" class="form-control" placeholder="masukkan Nomor Kwitansi..." name="nomor_kwitansi" value="<?= $data['tb_kwitansi']['nomor_kwitansi']; ?>">
                        <label>Tanggal Kwitansi</label>
                        <input type="date" class="form-control" placeholder="masukkan Tanggal Kwitansi..." name="tanggal_kwitansi" value="<?= $data['tb_kwitansi']['tanggal_kwitansi']; ?>">
                        <label>Total Kwitansi</label>
                        <input type="text" class="form-control" placeholder="masukkan Total Kwitansi..." name="total_kwitansi" value="<?= $data['tb_kwitansi']['total_kwitansi']; ?>">
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