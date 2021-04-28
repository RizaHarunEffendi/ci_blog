<!-- Header -->
<?php $this->view('templates/header') ?>
<!-- Sidebar -->
<?php $this->view('templates/sidebar') ?>
<!-- Topbar -->
<?php $this->view('templates/topbar') ?>

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Postingan</h1>
    </div>
<!-- alert -->
    <?php if($this->session->flashdata('message')) : ?>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('message');?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
<!-- end alert -->
    
<!-- Button -->
    <a href="<?= base_url('postingan/tambah'); ?>" class="btn btn-primary">Tambah Berita & Postingan</a>
    
    <!-- DataTales Example -->
      <div class="card shadow mb-4 mt-3">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data <?= $title; ?></h6>
          </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Postingan</th>
                      <th>Kategori</th>
                      <th>Created At</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no =1;
                      foreach ($postingan as $post) :
                    ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $post['nama']; ?></td>
                      <td>
                            <?php foreach ($kategori as $kt) : ?>
                                <?php if ($post['id_kategori'] == $kt['id']) : ?>
                                    <span class="badge badge-info"><?= $kt['nama_kategori']; ?></span>
                                <?php endif; ?>
                            <?php endforeach; ?>
                      </td>
                      <td><?= date('D, d-M-Y', $post['created_at']); ?></td>
                      <td>
                            <a href="<?= base_url('postingan/detail/' . $post['id']); ?>" class="badge badge-info">Detail</a>
                            <a href="<?= base_url('postingan/edit/' . $post['id']); ?>" class="badge badge-warning">Edit</a>
                            <a onclick="return confirm('Hapus Data Ini ?')" href="<?= base_url('postingan/hapus/' .$post['id']); ?>" class="badge badge-danger">Hapus</a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
            </div>
        </div>
      </div>
    <!-- End Datatables -->
</div>
 <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
    
<!-- Footer -->
<?php $this->view('templates/footer') ?>