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
        <h1 class="h3 mb-0 text-gray-800">Tambah Postingan</h1>
    </div>

    <div class="card shadow mb-4 mt-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('postingan/tambah') ?>">
                <div class="form-group">
                    <label for="nama">Nama Postingan</label>
                    <input id="nama" class="form-control" type="text" name="nama">
                    <?php if(form_error('nama')): ?>
                    <span class=text-danger>Nama Postingan Tidak Boleh Kosong</span>
                    <?php endif ?>
                </div>
                <div class="form-group">
                    <label for="id_kategori">Kategori</label>
                    <select id="id_kategori" class="form-control" name="id_kategori">
                        <?php foreach ($kategori as $data) : ?>
                        <option value="<?= $data['id']; ?>"><?= $data['nama_kategori']; ?></option>
                        <?php endforeach ?>
                    </select>
                    <?php if(form_error('id_kategori')): ?>
                    <span class=text-danger>Kategori Tidak Boleh Kosong</span>
                    <?php endif ?>
                </div>
                <div class="form-group">
                    <label for="isi_postingan">Isi Postingan</label>
                    <textarea id="isi_postingan" class="form-control" name="isi_postingan" rows="3"></textarea>
                    <?php if(form_error('isi_postingan')): ?>
                    <span class=text-danger>Isi Postingan Tidak Boleh Kosong</span>
                    <?php endif ?>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- Footer -->
<?php $this->view('templates/footer') ?>