<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('user/changepassword'); ?>" method="POST">
                <div class="form-group <?= form_error('current_password') ? 'text-danger' : null ?>">
                    <label for="current_password">Kata Sandi saat ini</label>
                    <input type="password" class="form-control <?= form_error('current_password') ? 'is-invalid' : null ?>" id="current_password" name="current_password">
                    <?= form_error('current_password', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group <?= form_error('new_password1') ? 'text-danger' : null ?>">
                    <label for="new_password1">Kata Sandi Baru</label>
                    <input type="password" class="form-control <?= form_error('new_password1') ? 'is-invalid' : null ?>" id="new_password1" name="new_password1">
                    <?= form_error('new_password1', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group <?= form_error('new_password1') ? 'text-danger' : null ?>">
                    <label for="new_password2">Ulangi Kata Sandi</label>
                    <input type="password" class="form-control <?= form_error('new_password2') ? 'is-invalid' : null ?>" id="new_password2" name="new_password2">
                    <?= form_error('new_password2', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Ubah Kata Sandi</button>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->