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
            <form role="form" action="<?= base_url; ?>/kwitansi/simpanKwitansi" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label>Jumlah Kwitansi</label>
                        <input type="text" class="form-control" placeholder="masukkan Jumlah Kwitansi..." name="jumlah_kwitansi">
                    </div>
                    <div class="form-group">
                        <label>Kode Kwitansi</label>
                        <input type="text" class="form-control" placeholder="masukkan Kode Kwitansi..." name="kode_kwitansi">
                    </div>
                    <div class="form-group">
                        <label>Nomor Kwitansi</label>
                        <input type="text" class="form-control" placeholder="masukkan Nomor Kwitansi..." name="nomor_kwitansi">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Kwitansi</label>
                        <input type="date" class="form-control" placeholder="masukkan Tanggal Kwitansi..." name="tanggal_kwitansi">
                    </div>
                    <div class="form-group">
                        <label>Total Kwitansi</label>
                        <input type="text" class="form-control" placeholder="masukkan Total Kwitansi..." name="total_kwitansi">
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