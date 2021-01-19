<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Registrasi Akun!</h1>
                        </div>
                        <form class="user" method="POST" action="<?= base_url('auth/registration'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user <?= form_error('name') ? 'is-invalid' : null ?>" id="name" name="name" value="<?= set_value('name'); ?>" placeholder="Nama Lengkap" autocomplete="off">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user <?= form_error('name') ? 'is-invalid' : null ?>" id="nip" name="nip" placeholder="NIP" value="<?= set_value('nip'); ?>">
                                <?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user <?= form_error('email') ? 'is-invalid' : null ?>" id=" email" name="email" value="<?= set_value('email'); ?>" placeholder="Alamat email" autocomplete="off">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user <?= form_error('password1') ? 'is-invalid' : null ?>" id=" password1" name="password1" placeholder="Kata sandi">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user <?= form_error('password2') ? 'is-invalid' : null ?>" id="password2" name="password2" placeholder="Ulangi kata sandi">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Daftar Akun
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Tidak ingat kata sandi?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth'); ?>">Sudah memiliki akun? Kembali ke halaman masuk!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>