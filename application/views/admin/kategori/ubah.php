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
        <h1 class="h3 mb-0 text-gray-800">Ubah Kategori</h1>
    </div>

    <!-- content update artikel-->
    <div class="card shadow mb-4">
        <div class="card-body">   
            <form action="<?= base_url('kategori/simpan_ubah') ?>" method="post">
                <div class="form-group">
                    <label for="nama">Nama Kategori :</label>
                    <input type="hidden" name="id" value="<?= $kategori['id']; ?>">
                    <input type="text" id="nama" class="form-control" name="nama_kategori" value="<?= $kategori['nama_kategori']; ?>">
                </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="<?= base_url('kategori') ?>" class="btn btn-outline-danger">Cancel</a>
            </form>
        </div>
    </div>
    <!-- end of content tambah artikel -->

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- Footer -->
<?php $this->view('templates/footer') ?>