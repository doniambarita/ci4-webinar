<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section id="detail">
    <div class="container">
        <div class="shadow-lg p-3 mb-5 bg-white rounded">
            <div class="p-4 mb-3 card-body">
                <center>
                    <h3 class="mb-4 font-weight-bold text-dark"><?= $judul ?></h3>
                </center>
                <div class="row">
                    <div class="col-sm col-lg-8">
                        <div class="mb-4" style="width:400px;">
                            <img class="img-fluid shadow-lg mx-auto mb-4" style="max-width: 100%;"
                                src="https://d17ivq9b7rppb3.cloudfront.net/original/event/dicoding_developer_coaching_38_android_5_library_android_yang_patut_kamu_coba_di_2021_logo_040621084722.png">
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <h6 class="m-0 font-weight-bold text-primary">Deskripsi Webinar</h6>
                            </div>
                            <div class="card-body">
                                <p class="text-dark text-justify">
                                    Percobaan webinar
                                </p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <h6 class="m-0 font-weight-bold text-primary">Narasumber</h6>
                            </div>
                            <div class="card-body">
                                <p class="text-dark text-justify">Jagoan di bidangnya</p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <h6 class="m-0 font-weight-bold text-primary">Jadwal Pelaksanaan</h6>
                            </div>
                            <div class="card-body">
                                <p class="text-dark text-justify"><?= date('d F Y', strtotime("now"));  ?> | 16:00 -
                                    17:00 WIB</p>
                                <p class="text-dark text-justify">Selasa, 8 Juni 2021 | 16:00 - 17:00 WIB</p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <h6 class="m-0 font-weight-bold text-primary">Media</h6>
                            </div>
                            <div class="card-body">
                                <p class="text-dark text-justify">Google Meet</p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <h6 class="m-0 font-weight-bold text-primary">Keikutsertaan</h6>
                            </div>
                            <div class="card-body">
                                <p class="text-dark text-justify">
                                    <?php if($slug == 1){echo "Anda belum terdaftar pada Event";}else{echo "Anda telah terdaftar pada Event";} ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h6 class="m-0 font-weight-bold text-primary">Aksi</h6>
                            </div>
                            <div class="card-body text-justify">
                                <?php $urlEncode = base_url('pages/' . $slug) ?>
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
                                <?php if ($is_register == 0) { ?>
                                <form action="<?= base_url('pages/registrasi_webinar') ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <!-- <input type="hidden" name="user_id" id="user_id" value="<?= $user['id'] ?>"> -->
                                    <input type="hidden" name="webinar_id" id="webinar_id" value="<?= $value; ?>">
                                    <button class="mb-3 btn btn-info btn-block">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-pen"></i>
                                        </span>
                                        <span class="text">Ikuti Webinar</span>
                                    </button>
                                </form>
                                <?php } else { ?>

                                <h6 class="m-0 font-weight-bold text-dark mb-3"> Anda telah terdaftar </h6>
                                <a href="<?= base_url()?>" class="mb-3 btn btn-danger btn-block"
                                    onclick="return confirm('Yakin?');">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Batal</span>
                                </a>

                                <?php }; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endsection(); ?>