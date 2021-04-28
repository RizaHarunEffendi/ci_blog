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
        <h1 class="h3 mb-0 text-gray-800">Kategori</h1>
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

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Tambah Data Kategori
    </button>

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
                      <th>Nama Kategori</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no =1;
                      foreach ($kategori as $kt) :
                    ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $kt['nama_kategori']; ?></td>
                      <td>
                        <a href="<?= base_url('kategori/ubah/' . $kt['id']); ?>" class="badge badge-warning">Edit</a>
                        <a onclick="return confirm('Hapus Data Ini ?')" href="<?= base_url('kategori/hapus/' .$kt['id']); ?>" class="badge badge-danger">Hapus</a>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('kategori/tambah'); ?>" method="post">
            <div class="form-group">
                <label for="nama">Nama Kategori</label>
                <input id="nama" class="form-control" type="text" name="nama_kategori">
                <small class="form-text text-danger"><?= form_error('nama_kategori'); ?></small>
            </div>
      </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="tambah" class="btn btn-primary">Save</button>
        </div>
        </form>
    </div>
  </div>
</div>

<!-- Footer -->
<?php $this->view('templates/footer') ?>

      

  