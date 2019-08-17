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
      <div class="tombol">
         <a class="btn btn-primary" href="<?php echo base_url('mahasiswa/tambah'); ?>" role="button">Tambah Data</a>
      </div>

   </section> <!-- Main content -->
   <section class="content">
      <!-- Flashdata -->
      <?php if ($this->session->flashdata()) : ?>
      <div class="alert alert-success alert-dismissible" role="alert">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         Selamat data <strong>Berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
      </div>
      <?php endif; ?>
      <!-- Akhir Flashdata -->
      <!-- Default box -->
      <div class="box col-md-6">
         <div class="box-header with-border">
            <h3 class="box-title">Data</h3>

            <div class="box-tools">
               <form action="" method="POST">
                  <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                     <input type="text" name="keyword" class="form-control pull-right" placeholder="Search">

                     <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                     </div>
                  </div>
               </form>

            </div>

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
               <?php foreach ($mahasiswa as $mhs) : ?>
               <li class="list-group-item"><?php echo $mhs['nama']; ?>
                  <a href="<?php echo base_url('mahasiswa/hapus/') . $mhs['id']; ?>" class="label label-danger" style="float: right" onclick="return confirm('Yakin ?');"> Hapus</a>
                  <a href="<?php echo base_url('mahasiswa/ubah/') . $mhs['id']; ?>" class="label label-success" style="float: right"> Ubah</a>
                  <a href="<?php echo base_url('mahasiswa/detail/') . $mhs['id']; ?>" class="label label-primary" style="float: right"> Detail</a>
               </li>
               <?php endforeach; ?>
         </div> <!-- /.box-body -->
         <!-- /.box-footer-->
      </div>
      <!-- /.box -->

   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->