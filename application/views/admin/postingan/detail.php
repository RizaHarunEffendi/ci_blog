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
        <h1 class="h3 mb-0 text-gray-800">Detail Postingan</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
        </div>
        <div class="card-body">
            <h3><?= $postingan['nama']; ?></h3>
            <span class="badge badge-info"><?= date('D, d-M-Y', $postingan['created_at']); ?></span>
            <span class="badge badge-success"><?= $kategori['nama_kategori']; ?></span>
            <p>
                <?= $postingan['isi_postingan']; ?>
            </p>
        </div>
    </div>
    <!-- End Datatables -->
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- Footer -->
<?php $this->view('templates/footer') ?>