<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="jumbotron text-center">
    <h1 class="display-4">Webinar SMKN 69 Jakarta</h1>
    <p class="lead">Dapatkan wawasan serta pengetahuan dari pembicara terbaik melalui webinar dan dapatkan sertifikat.
    </p>
</section>

<section id="acara" class="pt-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-3 pb-5">
                <div class="pt-lg-3">
                    <h4 class="mb-4">Daftar Webinar</h4>
                    <p>Ayo segera daftar di webinar SMKN 69 dan perdalam wawasan menarik!
                    </p>
                </div>
            </div>

            <div class="col-lg-9 pl-lg-5">
                <form method="GET" action="" accept-charset="UTF-8">
                    <div class="input-group mb-3">
                        <!-- <input name="criteria" type="hidden" value="name"> -->
                        <input type="text" class="form-control" name="q" value="" placeholder="Cari Webinar..">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Cari</button>
                        </div>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-end align-items-center">
                        <small class="mr-2 text-muted">Urut berdasarkan: </small>
                        <select class="js-order-by form-control" style="width:fit-content;" name="order_by">
                            <option value="newest" selected="selected">Update Terbaru</option>
                            <option value="updated">Webinar Tersedia</option>
                        </select>
                    </div>
                </form>

                <!-- DAFTAR WEBINAR -->
                <div class="row row-cols-1 row-cols-md-2 mt-5">
                    <div class="col mb-4">
                        <div class="card">
                            <img src="https://d17ivq9b7rppb3.cloudfront.net/original/event/dicoding_developer_coaching_38_android_5_library_android_yang_patut_kamu_coba_di_2021_logo_040621084722.png"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">1 hari lagi</small></p>
                                <a href="/pages/<?= $slug; ?>" class="btn btn-primary w-100">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card">
                            <img src="https://d17ivq9b7rppb3.cloudfront.net/original/event/dicoding_developer_coaching_37_android_kesalahan_yang_sering_terjadi_pada_keamanan_aplikasi_logo_310521095129.png"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">2 hari lagi</small></p>
                                <a href="" class="btn btn-primary w-100">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card">
                            <img src="https://d17ivq9b7rppb3.cloudfront.net/original/event/why_migrate_your_company_to_the_public_cloud_with_google_logo_180521113143.png"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content.</p>
                                <p class="card-text"><small class="text-muted">3 hari lagi</small></p>
                                <a href="" class="btn btn-primary w-100">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card">
                            <img src="https://d17ivq9b7rppb3.cloudfront.net/original/event/pengantar_cloud_computing_dengan_aws_logo_240521103328.png"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional.</p>
                                <p class="card-text"><small class="text-muted">Selesai</small></p>
                                <a href="" class="btn btn-primary w-100">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card">
                            <img src="https://d17ivq9b7rppb3.cloudfront.net/original/event/dicoding_developer_coaching_34_android_modular_android_app_dengan_dynamic_feature_logo_270421110601.png"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional.</p>
                                <p class="card-text"><small class="text-muted">Selesai</small></p>
                                <a href="" class="btn btn-primary w-100">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card">
                            <img src="https://d17ivq9b7rppb3.cloudfront.net/original/event/dicoding_developer_coaching_36_android_pentingnya_performa_pada_aplikasi_android_logo_200521095002.png"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional.</p>
                                <p class="card-text"><small class="text-muted">Selesai</small></p>
                                <a href="" class="btn btn-primary w-100">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination -->
                <div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a class="page-link" href="">«</a></li>
                        <li class="page-item active"><a class="page-link" href="">1</a></li>
                        <li class="page-item"><a class="page-link"
                                href="http://www.dicoding.com/events/list?q=&amp;criteria=name&amp;order_by=newest&amp;active=-1&amp;page=8">8</a>
                        </li>
                        <li class="page-item disabled"><a class="page-link" href="">...</a></li>
                        <li class="page-item"><a class="page-link"
                                href="http://www.dicoding.com/events/list?q=&amp;criteria=name&amp;order_by=newest&amp;active=-1&amp;page=105">105</a>
                        </li>
                        <li class="page-item"><a class="page-link"
                                href="http://www.dicoding.com/events/list?q=&amp;criteria=name&amp;order_by=newest&amp;active=-1&amp;page=106">106</a>
                        </li>
                        <li class="page-item"><a class="page-link"
                                href="http://www.dicoding.com/events/list?q=&amp;criteria=name&amp;order_by=newest&amp;active=-1&amp;page=2">»</a>
                        </li>
                    </ul>
                </div>
                <!-- akhir pagination -->

            </div>
        </div>
    </div>
    </div>
</section>
<?= $this->endsection(); ?>