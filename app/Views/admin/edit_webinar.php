<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Webinar</h1>

    <div class="row">
        <div class="col-lg-12">
            <div class="swal-edit_webinar" data-swal="<?= session()->getFlashdata('message'); ?>"></div>
            <form action="<?= base_url('admin/edit-webinar/' . $webinar['slug']); ?>" method="post"
                enctype="multipart/form-data" autocomplete="off">
                <?= csrf_field(); ?>

                <div class="form-group row">
                    <label for="webinarName" class="col-sm-12 col-md-2 col-form-label">Name</label>
                    <div class="col-sm-12 col-md-8">
                        <input type="text"
                            class="form-control <?= ($validation->hasError('webinarName')) ? 'is-invalid' : ''; ?>"
                            id="webinarName" name="webinarName" autofocus required maxlength="60"
                            value="<?= (old('webinarName')) ? old('webinarName') : $webinar['webinar_nama']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('webinarName'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-12 col-md-2 col-form-label">Description</label>
                    <div class="col-sm-12 col-md-8">
                        <textarea
                            class="form-control <?= ($validation->hasError('description')) ? 'is-invalid' : ''; ?>"
                            name="description" id="description" cols="70" rows="5" dir="auto" maxlength="125"
                            minlength="90" required
                            value=""><?= (old('description')) ? old('description') : $webinar['deskripsi']; ?></textarea>
                        <div class="invalid-feedback">
                            <?= $validation->getError('description'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="speaker" class="col-sm-12 col-md-2 col-form-label">Speaker</label>
                    <div class="col-sm-12 col-md-8">
                        <input type="text"
                            class="form-control <?= ($validation->hasError('speaker')) ? 'is-invalid' : ''; ?>"
                            id="speaker" name="speaker" minlength="2" maxlength="70"
                            value="<?= (old('speaker')) ? old('speaker') : $webinar['narasumber']; ?>" required>
                        <div class="invalid-feedback">
                            <?= $validation->getError('speaker'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="date" class="col-sm-12 col-md-2 col-form-label">Date</label>
                    <div class="col-sm-12 col-md-8">
                        <input type="date"
                            class="form-control <?= ($validation->hasError('date')) ? 'is-invalid' : ''; ?>" id="date"
                            name="date" value="<?= (old('date')) ? old('date') : $webinar['tanggal']; ?>" required>
                        <div class="invalid-feedback">
                            <?= $validation->getError('date'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="time" class="col-sm-12 col-md-2 col-form-label">Time</label>
                    <div class="col-sm-12 col-md-8">
                        <input type="time"
                            class="form-control <?= ($validation->hasError('time') || session()->getFlashdata('timeMessage')) ? 'is-invalid' : ''; ?>"
                            id="time" name="time" value="<?= (old('time')) ? old('time') : $webinar['jam']; ?>"
                            required>
                        <div class="invalid-feedback">
                            <?= $validation->getError('time'); ?>
                            <?= session()->getFlashdata('timeMessage') ?? '' ; ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fee" class="col-sm-12 col-md-2 col-form-label">Fee</label>
                    <div class="col-sm-12 col-md-8">
                        <select
                            class="form-control <?= ($validation->hasError('fee') || session()->getFlashdata('feeMessage')) ? 'is-invalid' : ''; ?>"
                            id="fee" name="fee" required>
                            <?php 
                            if($webinar['biaya'] === 'Gratis'){
                                echo '<option selected value='.$webinar['biaya'].'>'.$webinar['biaya'].'</option>';
                                for($i = 5; $i <= 50; $i++ ){
                                    if($i % 5 === 0){
                                    ?>
                            <option value="<?= $i; ?>"><?= $i; ?>K</option>
                            <?php 
                                    }
                                }
                            }elseif($webinar['biaya'] !== 'Gratis'){
                                echo '<option value="Gratis">Gratis</option>';
                                for($i = 5; $i <= 50; $i++ ){
                                    if($i % 5 === 0){
                                        if($webinar['biaya'] == $i){
                            ?>
                            <option value="<?= $i; ?>" selected><?= $i; ?>K</option>
                            <?php 
                                        }elseif($webinar['biaya'] != $i){
                            ?>
                            <option value="<?= $i; ?>"><?= $i; ?>K</option>
                            <?php 
                                        }
                                    }
                                }
                            }
                            ?>
                        </select>
                        <div class="invalid-feedback">
                            <?= $validation->getError('fee'); ?>
                            <?= session()->getFlashdata('feeMessage') ?? '' ; ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="media" class="col-sm-12 col-md-2 col-form-label">Media</label>
                    <div class="col-sm-12 col-md-8">
                        <select
                            class="form-control <?= ($validation->hasError('media') || session()->getFlashdata('mediaMessage')) ? 'is-invalid' : ''; ?>"
                            id="media" name="media" required>
                            <?php 
                            if($webinar['webinar_media'] === 'Zoom'){
                                echo '<option value="Google Meet">Google Meet</option>';
                                echo '<option value="Zoom" selected>'.$webinar['webinar_media'].'</option>';
                            }elseif($webinar['webinar_media'] === 'Google Meet'){
                                echo '<option value="Google Meet" selected>'.$webinar['webinar_media'].'</option>';
                                echo '<option value="Zoom">Zoom</option>';
                            }
                            ?>
                        </select>
                        <div class="invalid-feedback">
                            <?= $validation->getError('media'); ?>
                            <?= session()->getFlashdata('mediaMessage') ?? '' ; ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cover" class="col-sm-2 col-form-label">Cover</label>
                    <div class="col-sm-4">
                        <img src="<?= base_url('img/' . $webinar['poster']); ?>" alt="webinar cover"
                            class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-6">
                        <div class="custom-file">
                            <label class="btn btn-secondary px-3">
                                Pilih Foto
                                <input type="file"
                                    class="custom-file-input d-none <?= ($validation->hasError('cover')) ? 'is-invalid' : ''; ?>"
                                    id="sampul" name="cover" onchange="previewImg()" accept="image/*">
                            </label>
                            <?php if($validation->getError('cover')){ ?>
                            <div class="small" style="color:#ee4542;font:arial">
                                <i class="fas fa-exclamation-circle"></i>
                                <?= $validation->getError('cover'); ?>
                            </div>
                            <?php } ?>
                            <div class="small col-md-8 col-sm-6 pl-0">Poster Webinar Anda sebaiknya memiliki rasio
                                1:1<br>
                                dan berukuran tidak lebih dari 1MB.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-4" style="height:150px">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>