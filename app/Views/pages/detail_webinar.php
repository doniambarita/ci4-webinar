<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?php 
$webinarSchedule = strtotime($webinar['tanggal'].' '.$webinar['jam']);
$now = strtotime("now");
?>
<section id="detail">
    <div class="container">
        <div class="shadow-lg p-3 mb-5 bg-white rounded">
            <div class="p-4 mb-3 card-body">
                <center>
                    <h3 class="mb-4 font-weight-bold text-dark"><?= $webinar['webinar_nama']; ?></h3>
                </center>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8">
                        <div class="mb-4">
                            <img class="img-fluid shadow-lg mx-auto mb-4" width="430px"
                                src="<?= base_url('img/' . $webinar['poster']); ?>">
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <h6 class="m-0 font-weight-bold text-primary">Deskripsi Webinar</h6>
                            </div>
                            <div class="card-body">
                                <p class="text-dark text-justify">
                                    <?= $webinar['deskripsi']; ?>
                                </p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <h6 class="m-0 font-weight-bold text-primary">Narasumber</h6>
                            </div>
                            <div class="card-body">
                                <p class="text-dark text-justify"><?= $webinar['narasumber']; ?></p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <h6 class="m-0 font-weight-bold text-primary">Jadwal Pelaksanaan</h6>
                            </div>
                            <div class="card-body">
                                <p class="text-dark text-justify"><?= $webinar['tanggal']; ?> | <?= $webinar['jam']; ?>
                                    WIB
                                </p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <h6 class="m-0 font-weight-bold text-primary">Media</h6>
                            </div>
                            <div class="card-body">
                                <p class="text-dark text-justify"><?= $webinar['webinar_media']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h6 class="m-0 font-weight-bold text-primary">Keikutsertaan</h6>
                            </div>
                            <div class="card-body text-justify">
                                <div class="swal-detail_webinar" data-swal="<?= session()->getFlashdata('message'); ?>">
                                </div>
                                <?php if(!logged_in()){ ?>
                                <?php if($now > $webinarSchedule): ?>
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                        <p>Pendaftaran tutup. Webinar telah selesai.</p>
                                    </div>
                                </div>
                                <?php else: ?>
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                        <p>Silakan login dahulu untuk dapat mendaftar
                                            ke webinar ini.</p>
                                    </div>
                                </div>
                                <div class="font-weight-bold text-dark">
                                    <a href="<?= base_url('login') ?>"
                                        class="btn btn-info btn-block shadow btn--full-width d-unauthenticated-registration-link">Login</a>
                                </div>
                                <?php endif; ?>
                                <?php }elseif(logged_in()){ ?>
                                <?php if($is_register == 1 && $now < $webinarSchedule): ?>
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                        <p>Anda telah terdaftar pada webinar ini.</p>
                                    </div>
                                </div>
                                <form action="<?= base_url('cancelWebinar') ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="webinar_id" value="<?= $webinar['webinar_id']; ?>">

                                    <button class="btn btn-danger btn-block shadow">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-pen"></i>
                                        </span>
                                        <span class="text">Batal</span>
                                    </button>
                                </form>
                                <?php elseif($is_register == null && $now < $webinarSchedule):  ?>
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                        <p>Anda belum terdaftar pada webinar ini.</p>
                                    </div>
                                </div>
                                <form action="<?= base_url('registrasiWebinar') ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="webinar_id" id="webinar_id"
                                        value="<?= $webinar['webinar_id']; ?>">

                                    <button class="btn btn-primary btn-block shadow">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-pen"></i>
                                        </span>
                                        <span class="text">Daftar</span>
                                    </button>
                                </form>
                                <?php 
                                /*
                                Jadi kondisi else di bawah ini jika user sudah login , nah itu yg utama dulu user harus sudah login
                                jadi jika webinar nya udh lewat/selesai dan user udh pernah daftar webinar maka else di bawah ini di jalankan
                                jadi jika webinar nya udh lewat/selesai dan user belum pernah daftar sama sekali maka else di bawah ini di jalankan
                                */
                                else: 
                                ?>
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                        <p>Pendaftaran tutup. Webinar telah selesai.</p>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <h6 class="m-0 font-weight-bold text-primary">Aksi</h6>
                            </div>
                            <div class="card-body text-justify">
                                <?php $urlEncode = base_url('pages/' . $webinar['slug']) ?>
                                <input type="text" class="form-control mb-2" value="<?= $urlEncode ?>" id="myInput"
                                    readonly>
                                <button onclick="myFunction()" class=" mb-3 btn btn-dark btn-block">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-clone"></i>
                                    </span>
                                    <span>Salin Link</span>
                                </button>
                                <div class="row mb-2 justify-content-center">
                                    <div class="col-lg font-weight-bold text-dark">
                                        <h5>Share With Friends</h5>
                                        <div class="d-flex justify-content-center">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item ">
                                                    <a style="color:#2a1aaf;"
                                                        href="https://www.facebook.com/sharer/sharer.php?u=<?= $urlEncode ?>"
                                                        target="_blank">
                                                        <i class="fab fa-facebook fa-2x"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item ">
                                                    <a target="_blank"
                                                        href="https://twitter.com/share?url=<?= $urlEncode ?>">
                                                        <i class="fab fa-twitter fa-2x"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item ">
                                                    <a target="_blank"
                                                        href="https://api.whatsapp.com/send?text=<?= $urlEncode ?>">
                                                        <i class="fab fa-whatsapp fa-2x text-success"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endsection(); ?>