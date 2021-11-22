<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0"><?php echo $subtitle; ?></h5>
              </div>
              <form class="form-horizontal" method="post" action="<?php echo base_url('siswa/simpan') ?>">
              <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ID Siswa</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" name="id_siswa" placeholder="ID Siswa" required>
                    </div>
                  </div>                
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">NIS</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nis" placeholder="Nomer Induk Siswa" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Siswa</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kelas</label>
                    <select class="form-control" style="width: 20%;" name="kelas" required>
                      <option value="0" selected>- Pilih -</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kompetensi Keahlian</label>
                    <select class="form-control" style="width: 20%;" name="kompetensi_keahlian" required>
                      <option value="0" selected>- Pilih -</option>
                      <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                      <option value="Multimedia">Multimedia</option>
                      <option value="Akuntansi">Akuntansi</option>
                      <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                      <option value="Broadcasting">Broadcasting</option>
                    </select>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="no_telp" placeholder="Nomor Telepon" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tahun Ajaran</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="tahun_ajaran" placeholder="Tahun Ajaran" required>
                    </div>
                  </div>
                
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                <button type="reset" class="btn btn-sm btn-default">Reset</button>
              </div>
            </form>