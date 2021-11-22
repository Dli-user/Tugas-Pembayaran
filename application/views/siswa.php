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
                <h5 class="m-0"><?php echo $title; ?></h5>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>ID Siswa</th>
                      <th>NIS</th>
                      <th>Nama Siswa</th>
                      <th>Kelas</th>
                      <th>Kompetensi Keahlian</th>
                      <th>Alamat</th>
                      <th>Nomor Telepon</th>
                      <th>Tahun Ajaran</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no=0;
                      foreach ($siswa->result() as $value):
                        $no++;
                    ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $value->id_siswa; ?></td>
                      <td><?php echo $value->nis; ?></td>
                      <td><?php echo $value->nama_siswa; ?></td>
                      <td><?php echo $value->kelas ?></td>
                      <td><?php echo $value->kompetensi_keahlian ?></td>
                      <td><?php echo $value->alamat ?></td>
                      <td><?php echo $value->no_telp ?></td>
                      <td><?php echo $value->tahun_ajaran ?></td>
                      <td>
                        <a href=" <?php echo base_url('siswa/ubah/').$value->id_siswa ?>" class="btn btn-xs btn-warning">Edit</a>
                        <a href=" <?php echo base_url('siswa/hapus/').$value->id_siswa ?>" class="btn btn-xs btn-danger">Hapus</a>
                      </td>
                    </tr>
                    <?php 
                      endforeach;
                    ?>
                  </tbody>
                </table> 
              </div>
              <div class="card-footer clearfix">
                <a href=" <?php echo base_url('siswa/tambah') ?> " class="btn btn-xs btn-primary">Tambah Data</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
