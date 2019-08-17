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
      <!-- Default box -->
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

         <div class="box-body col-md-10 col-md-offset-1">
            <ul class="list-group">
               <li class="list-group-item active"></li>

               <form method="POST" action="">
                  <input type="hidden" name="id" value="<?php echo $mahasiswa['id']; ?>">
                  <div class="form-group">
                     <label for="nama">Nama Mahasiswa</label>
                     <input type="text" name="nama" value="<?php echo $mahasiswa['nama']; ?>" class="form-control" id="nama">
                     <small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
                  </div>
                  <div class="form-group">
                     <label for="nim">Nim</label>
                     <input type="text" name="nim" value="<?php echo $mahasiswa['nim']; ?>" class="form-control" id="nim">
                     <small class="form-text text-danger"><?php echo form_error('nim'); ?></small>
                  </div>
                  <div class="form-group">
                     <label for="tgl_lahir">Tanggal Lahir</label>
                     <input type="date" name="tgl_lahir" value="<?php echo $mahasiswa['tgl_lahir']; ?>" class="form-control" id="tgl_lahir">
                     <small class="form-text text-danger"><?php echo form_error('tgl_lahir'); ?></small>

                  </div>
                  <div class="form-group">
                     <label for="jurusan">Jurusan</label>
                     <input type="text" name="jurusan" value="<?php echo $mahasiswa['jurusan']; ?>" class="form-control" id="jurusan">
                     <small class="form-text text-danger"><?php echo form_error('jurusan'); ?></small>
                  </div>
                  <button type="submit" class="btn btn-success" style="float: right">Ubah</button>
                  <button type="reset" class="btn btn-danger" data-dismiss="modal" style="float: right">Reset</button>
                  <a href="<?php echo base_url('mahasiswa'); ?>" class="btn btn-primary">Kembali</a>
               </form>



         </div> <!-- /.box-body -->

         <!-- /.box-footer-->
      </div>
      <!-- /.box -->

   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->