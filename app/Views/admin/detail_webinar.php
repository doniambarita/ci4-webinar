<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Webinar Detail</h1>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= base_url('img/' . $webinar['poster']); ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $webinar['webinar_nama']; ?></h5>
                            <p class="card-text"><?= $webinar['deskripsi']; ?></p>
                            <p class="card-text mb-0"><small class="text-muted"><b>Speaker : </b>
                                    <?= $webinar['narasumber']; ?></small></p>
                            <p class="card-text mb-0"><small class="text-muted"><b>Date : </b>
                                    <?= $webinar['tanggal']; ?></small></p>
                            <p class="card-text mb-0"><small class="text-muted"><b>Time : </b>
                                    <?= $webinar['jam']; ?></small></p>
                            <p class="card-text mb-0"><small class="text-muted"><b>Fee :
                                    </b><?= $webinar['biaya'] == 'Gratis' ? $webinar['biaya'] : $webinar['biaya'].'K'; ?></small>
                            </p>
                            <p class="card-text"><small class="text-muted"><b>Media : </b>
                                    <?= $webinar['webinar_media']; ?></small></p>

                            <div class="swal-disabled-button"
                                data-swal="<?= session()->getFlashdata('disabledButton'); ?>"></div>
                            <a href="<?= base_url('admin/edit-webinar/' . $webinar['slug']); ?>"
                                class="btn btn-warning">Edit</a>

                            <form action="/comics/id" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah anda yakin?');">Delete</button>
                            </form>

                            <br><br>
                            <a href="<?= base_url('admin/manage-webinars'); ?>">&laquo; Back to webinars list</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="height:100px"></div>
</div>
<?= $this->endSection(); ?>