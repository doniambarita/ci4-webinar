<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Change Password</h1>

    <div class="row">
        <div class="col-lg-12">
            <?php if(session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success col-md-6" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
            <?php endif; ?>
            <form method="POST" action="<?= base_url('user/change-password'); ?>" accept-charset="UTF-8" role="form"
                autocomplete="off" id="">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label class="control-label font-weight-bold" for="old-password">Password Lama<span
                            class="text-danger">
                            *</span></label>
                    <div class="input-group" id="show_hide_old_password">
                        <input id="old-password"
                            class="col-md-6 form-control font-weight-medium 
                            <?= ($validation->hasError('oldPassword') || session()->getFlashdata('InvalidPassword')) ? 'is-invalid' : ''; ?>"
                            placeholder="Password lama ..." autocomplete="off" required="" minlength="8"
                            name="oldPassword" type="password">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button"
                                style="border-left: none; border-top-right-radius: 0.25rem; border-bottom-right-radius: 0.25rem;">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="invalid-feedback">
                            <?php 
                                if($validation->hasError('oldPassword')){
                                    echo $validation->getError('oldPassword');
                                }elseif(session()->getFlashdata('InvalidPassword')){
                                    echo session()->getFlashdata('InvalidPassword');
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label font-weight-bold" for="new-password">Password Baru<span
                            class="text-danger">
                            *</span></label>
                    <div class="input-group" id="show_hide_new_password">
                        <input id="new-password"
                            class="col-md-6 form-control font-weight-medium <?= ($validation->hasError('newPassword')) ? 'is-invalid' : ''; ?>"
                            placeholder="Password baru ..." autocomplete="off" required="" minlength="8"
                            name="newPassword" type="password">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button"
                                style="border-left: none; border-top-right-radius: 0.25rem; border-bottom-right-radius: 0.25rem;">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="invalid-feedback">
                            <?= $validation->getError('newPassword'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label font-weight-bold" for="password-confirm">Konfirmasi Password
                        Baru<span class="text-danger">
                            *</span></label>
                    <div class="input-group" id="show_hide_password_confirm">
                        <input id="password-confirm"
                            class="col-md-6 form-control font-weight-medium <?= ($validation->hasError('passwordConfirm')) ? 'is-invalid' : ''; ?>"
                            placeholder="Konfirmasi password baru ..." autocomplete="off" required="" minlength="8"
                            name="passwordConfirm" type="password">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button"
                                style="border-left: none; border-top-right-radius: 0.25rem; border-bottom-right-radius: 0.25rem;">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="invalid-feedback">
                            <?= $validation->getError('passwordConfirm'); ?>
                        </div>
                    </div>
                </div>


                <div class="mt-4">
                    <button type="submit" class="btn btn-primary px-3 font-weight-bold">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>