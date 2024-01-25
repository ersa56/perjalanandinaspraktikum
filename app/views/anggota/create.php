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
            <form role="form" action="<?= base_url; ?>/anggota/simpanAnggota" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label>Asal</label>
                        <input type="text" class="form-control" placeholder="masukkan Asal..." name="asal">
                    </div>
                    <div class="form-group">
                        <label>ID Anggota Dewan</label>
                        <input type="text" class="form-control" placeholder="masukkan ID..." name="id_anggota_dewan">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin_id">
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Anggota Dewan</label>
                        <input type="text" class="form-control" placeholder="masukkan Nama..." name="nama_anggota_dewan">
                    </div>
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="text" class="form-control" placeholder="masukkan NIP..." name="nip">
                    </div>
                    <div class="form-group">
                        <label>No Anggota Dewan</label>
                        <input type="text" class="form-control" placeholder="masukkan No Anggota..." name="no_anggota_dewan">
                    </div>
                    <div class="form-group">
                        <label>Tanggal & Lahir</label>
                        <input type="date" class="form-control" placeholder="masukkan TTL..." name="ttl">
                    </div>
                    <div class="form-group">
                        <label>Umur</label>
                        <input type="text" class="form-control" placeholder="masukkan Umur..." name="umur">
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