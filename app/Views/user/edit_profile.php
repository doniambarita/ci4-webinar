<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Profile</h1>

    <div class="row">
        <div class="col-lg-12">
            <div class="swal-edit_profile" data-swal="<?= session()->getFlashdata('message'); ?>"></div>
            <form method="POST" action="<?= base_url('user/edit-profile'); ?>" accept-charset="UTF-8" role="form"
                autocomplete="off" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <div class="form-group">
                    <label class="font-weight-bold">Foto Profile</label>
                    <div class="row">
                        <div class="col-md-2">
                            <img src="<?= base_url('img/' . $user->user_image); ?>" alt="<?= $user->user_image; ?>"
                                class="img-fluid img-thumbnail img-preview">
                        </div>

                        <div class="col-md-10">
                            <label class="btn btn-secondary px-3">
                                Pilih Foto
                                <input type="file"
                                    class="custom-file-input d-none <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>"
                                    id="sampul" name="sampul" onchange="previewImg()" accept="image/*">
                            </label>
                            <?php if($validation->getError('sampul')){ ?>
                            <div class="small" style="color:#ee4542;font:arial">
                                <i class="fas fa-exclamation-circle"></i>
                                <?= $validation->getError('sampul'); ?>
                            </div>
                            <?php } ?>
                            <div class="small">Gambar Profile Anda sebaiknya memiliki rasio 1:1<br>
                                dan berukuran tidak lebih dari 1MB.</div>
                        </div>
                    </div>
                </div>

                <div class="form-group form-row">
                    <div class="col-md-6">
                        <label class="font-weight-bold" for="fullname">Nama Lengkap <span
                                class="text-danger">*</span></label>
                        <input name="fullname" type="text"
                            class="form-control <?= ($validation->hasError('fullname')) ? 'is-invalid' : ''; ?>"
                            id="fullname" value="<?= (old('fullname')) ? old('fullname') : $user->fullname; ?>"
                            required="">
                        <div class="invalid-feedback">
                            <?= $validation->getError('fullname'); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group form-row">
                    <div class="col-md-6">
                        <label class="font-weight-bold" for="username">Username <span
                                class="text-danger">*</span></label>
                        <input name="username" type="text"
                            class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>"
                            id="username" value="<?= (old('username')) ? old('username') : $user->username; ?>"
                            required="" maxlength="30" minlength="3">
                        <div class="invalid-feedback">
                            <?= $validation->getError('username'); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group form-row">
                    <div class="col-md-6">
                        <label class="font-weight-bold">Email</label>
                        <input type="text" class="form-control" readonly="" value="<?= $user->email; ?>">
                    </div>
                </div>



                <div class="mt-4" style="height:150px">
                    <button type="submit" class="btn btn-primary px-3 font-weight-bold">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>