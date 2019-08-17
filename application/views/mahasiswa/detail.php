<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         <?php echo $judul; ?>
         <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active"><?php echo $judul; ?></li>
      </ol>
   </section> <!-- Main content -->
   <section class="content">
      <div class="box col-md-6">
         <div class="box-header with-border">
            <h3 class="box-title">Data</h3>

            <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
               <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
            </div>
         </div>
         <div class="box-body">
            <ul class="list-group">
               <li class="list-group-item active"></li>


               <div class="row">
                  <div class="col-xs-12">
                     <div class="box">
                        <div class="box-header">
                           <h3 class="box-title">Tabel Mahasiswa</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                           <table class="table table-hover">
                              <tbody>
                                 <tr>
                                    <th>NO</th>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jurusan</th>
                                 </tr>
                                 <?php $no = 1; ?>
                                 <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $mahasiswa['nama']; ?></td>
                                    <td><?php echo $mahasiswa['nim']; ?></td>
                                    <td><?php echo $mahasiswa['tgl_lahir']; ?></td>
                                    <td><?php echo $mahasiswa['jurusan']; ?></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <!-- /.box-body -->
                     </div>
                     <!-- /.box -->
                  </div>
               </div>
               <a href="<?php echo base_url('mahasiswa'); ?>" class="btn btn-primary">Kembali</a>
         </div> <!-- /.box-body -->
         <!-- /.box-footer-->
      </div>
   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->