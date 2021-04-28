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
        <h1 class="h3 mb-0 text-gray-800">Edit Postingan</h1>
    </div>

    <div class="card shadow mb-4 mt-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('postingan/update') ?>">
                <div class="form-group">
                    <label for="nama">Nama Postingan</label>
                    <input type="hidden" name="id" value="<?= $postingan['id']; ?>">
                    <input id="nama" class="form-control" type="text" name="nama" value="<?= $postingan['nama']; ?>">
                </div>
                <div class="form-group">
                    <label for="id_kategori">Kategori</label>
                    <select id="id_kategori" class="form-control" name="id_kategori">
                        <?php foreach ($kategori as $data) : ?>
                        <option value="<?= $data['id']; ?>" <?= ($data['id'] == $postingan['id_kategori']) ? 'selected' : '' ?>>
                            <?= $data['nama_kategori']; ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="isi_postingan">Isi Postingan</label>
                    <textarea id="isi_postingan" class="form-control" name="isi_postingan" rows="3"><?= $postingan['isi_postingan']; ?></textarea>
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