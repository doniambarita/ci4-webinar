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
                                <button onclick="myFunction()" href="<?= base_url('/') ?>"
                                    class="mb-3 btn btn-dark btn-block">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-clone"></i>
                                    </span>
                                    <span class="text">Salin Link</span>
                                </button>
                                <div class="row mb-2 justify-content-center">
                                    <div class="col-lg font-weight-bold text-dark">
                                        <h3 class="h5 g-color-gray-dark-v1 g-mb-10">Share With Friends</h3>
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
                                <a href="" class="my-3 btn btn-info btn-block">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-pen"></i>
                                    </span>
                                    <span class="text">Ikuti Webinar</span>
                                </a>
                                <a href="<?= base_url('/') ?>" class="mb-3 btn btn-secondary btn-block">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-reply"></i>
                                    </span>
                                    <span class="text">Kembali</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endsection(); ?>