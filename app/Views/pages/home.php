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
                    <p>Perdalam pengetahuan dan pengalaman</p>
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
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="my-5">
                    <div class="row row-eq-height mb-3">
                        <div class="col-sm-6">
                            <div class="card white-bg shadow mb-3">
                                <a href="https://www.dicoding.com/events/3975" class="position-relative">
                                    <div class="wrapper-kelas rounded-top js-balanced-height-img"
                                        style="height: 379px;">
                                        <img src="https://d17ivq9b7rppb3.cloudfront.net/original/event/dicoding_developer_coaching_38_android_5_library_android_yang_patut_kamu_coba_di_2021_logo_040621084722.png"
                                            data-original="https://d17ivq9b7rppb3.cloudfront.net/original/event/dicoding_developer_coaching_38_android_5_library_android_yang_patut_kamu_coba_di_2021_logo_040621084722.png"
                                            class="lazy img-fluid"
                                            alt="Dicoding Developer Coaching #38: Android | 5 Library Android yang Patut Kamu Coba di 2021"
                                            style="display: block;">
                                    </div>
                                </a>
                                <div class="card-body">
                                    <div data-equal-height="card" style="height: 139px;">
                                        <h5 class="mb-0">
                                            <a data-equal-height="title" href="https://www.dicoding.com/events/3975"
                                                style="height: 97px;">
                                                Dicoding Developer Coaching #38: Android | 5 Library..
                                            </a>
                                        </h5>
                                        <div class="mt-1 mb-3 text-09">
                                            <p>5 Library Android yang Patut Kamu Coba di 2021</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://www.dicoding.com/events/3975" class="remove-style-link">
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-12 col-lg text-center text-lg-right">
                                                <small>1 Hari Lagi</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card white-bg shadow mb-3 ">
                                <a href="https://www.dicoding.com/events/3974" class="position-relative">
                                    <div class="wrapper-kelas rounded-top js-balanced-height-img"
                                        style="height: 379px;">
                                        <img src="https://d17ivq9b7rppb3.cloudfront.net/original/event/dicoding_developer_coaching_37_android_kesalahan_yang_sering_terjadi_pada_keamanan_aplikasi_logo_310521095129.png"
                                            data-original="https://d17ivq9b7rppb3.cloudfront.net/original/event/dicoding_developer_coaching_37_android_kesalahan_yang_sering_terjadi_pada_keamanan_aplikasi_logo_310521095129.png"
                                            class="lazy img-fluid"
                                            alt="Dicoding Developer Coaching #37: Android | Kesalahan yang Sering Terjadi pada Keamanan Aplikasi"
                                            style="display: block;">
                                    </div>
                                </a>
                                <div class="card-body">
                                    <div data-equal-height="card" style="height: 139px;">
                                        <h5 class="mb-0">
                                            <a data-equal-height="title" href="https://www.dicoding.com/events/3974"
                                                style="height: 97px;">
                                                Dicoding Developer Coaching #37: Android | Kesalahan..
                                            </a>
                                        </h5>
                                        <div class="mt-1 mb-3 text-09">
                                            <p>Kesalahan yang Sering Terjadi pada Keamanan Aplikasi</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://www.dicoding.com/events/3974" class="remove-style-link">
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-12 text-right">
                                                <small>Selesai</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card white-bg shadow  mb-3 ">
                                <a href="https://www.dicoding.com/events/4001" class="position-relative">
                                    <div class="wrapper-kelas rounded-top js-balanced-height-img"
                                        style="height: 379px;">
                                        <img src="https://d17ivq9b7rppb3.cloudfront.net/original/event/why_migrate_your_company_to_the_public_cloud_with_google_logo_180521113143.png"
                                            data-original="https://d17ivq9b7rppb3.cloudfront.net/original/event/why_migrate_your_company_to_the_public_cloud_with_google_logo_180521113143.png"
                                            class="lazy img-fluid"
                                            alt="Why Migrate Your Company To The Public Cloud With Google"
                                            style="display: block;">
                                    </div>
                                </a>
                                <div class="card-body">
                                    <div data-equal-height="card" style="height: 139px;">
                                        <h5 class="mb-0">
                                            <a data-equal-height="title" href="https://www.dicoding.com/events/4001"
                                                style="height: 97px;">
                                                Why Migrate Your Company To The Public Cloud With Go..
                                            </a>
                                        </h5>
                                        <div class="mt-1 mb-3 text-09">
                                            <p>GITS Tech Talks about Google Cloud Platform</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://www.dicoding.com/events/4001" class="remove-style-link">
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-12 text-right">
                                                <small>Selesai</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card white-bg shadow  mb-3 ">
                                <a href="https://www.dicoding.com/events/4005" class="position-relative">
                                    <div class="wrapper-kelas rounded-top js-balanced-height-img"
                                        style="height: 379px;">
                                        <img src="https://d17ivq9b7rppb3.cloudfront.net/original/event/pengantar_cloud_computing_dengan_aws_logo_240521103328.png"
                                            data-original="https://d17ivq9b7rppb3.cloudfront.net/original/event/pengantar_cloud_computing_dengan_aws_logo_240521103328.png"
                                            class="lazy img-fluid" alt="Pengantar Cloud Computing dengan AWS"
                                            style="display: block;">
                                    </div>
                                </a>
                                <div class="card-body">
                                    <div data-equal-height="card" style="height: 139px;">
                                        <h5 class="mb-0">
                                            <a data-equal-height="title" href="https://www.dicoding.com/events/4005"
                                                style="height: 97px;">
                                                Pengantar Cloud Computing dengan AWS
                                            </a>
                                        </h5>
                                        <div class="mt-1 mb-3 text-09">
                                            <p>Pengantar Cloud Computing dengan AWS</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://www.dicoding.com/events/4005" class="remove-style-link">
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-12 text-right">
                                                <small>Selesai</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card white-bg shadow  mb-3 ">
                                <a href="https://www.dicoding.com/events/3970" class="position-relative">
                                    <div class="wrapper-kelas rounded-top js-balanced-height-img"
                                        style="height: 379px;">
                                        <img src="https://d17ivq9b7rppb3.cloudfront.net/original/event/dicoding_developer_coaching_36_android_pentingnya_performa_pada_aplikasi_android_logo_200521095002.png"
                                            data-original="https://d17ivq9b7rppb3.cloudfront.net/original/event/dicoding_developer_coaching_36_android_pentingnya_performa_pada_aplikasi_android_logo_200521095002.png"
                                            class="lazy img-fluid"
                                            alt="Dicoding Developer Coaching #36: Android | Pentingnya Performa pada Aplikasi Android"
                                            style="display: block;">
                                    </div>
                                </a>
                                <div class="card-body">
                                    <div data-equal-height="card" style="height: 139px;">
                                        <h5 class="mb-0">
                                            <a data-equal-height="title" href="https://www.dicoding.com/events/3970"
                                                style="height: 97px;">
                                                Dicoding Developer Coaching #36: Android | Pentingny..
                                            </a>
                                        </h5>
                                        <div class="mt-1 mb-3 text-09">
                                            <p>Performance Matter dalam Aplikasi Android</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://www.dicoding.com/events/3970" class="remove-style-link">
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-12 text-right">
                                                <small>Selesai</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card white-bg shadow  mb-3 ">
                                <a href="https://www.dicoding.com/events/3969" class="position-relative">
                                    <div class="wrapper-kelas rounded-top js-balanced-height-img"
                                        style="height: 379px;">
                                        <img src="https://d17ivq9b7rppb3.cloudfront.net/original/event/dicoding_developer_coaching_35_android_setup_continuous_integration_di_android_logo_110521125310.png"
                                            data-original="https://d17ivq9b7rppb3.cloudfront.net/original/event/dicoding_developer_coaching_35_android_setup_continuous_integration_di_android_logo_110521125310.png"
                                            class="lazy img-fluid"
                                            alt="Dicoding Developer Coaching #35: Android | Setup Continuous Integration di Android"
                                            style="display: block;">
                                    </div>
                                </a>
                                <div class="card-body">
                                    <div data-equal-height="card" style="height: 139px;">
                                        <h5 class="mb-0">
                                            <a data-equal-height="title" href="https://www.dicoding.com/events/3969"
                                                style="height: 97px;">
                                                Dicoding Developer Coaching #35: Android | Setup Con..
                                            </a>
                                        </h5>
                                        <div class="mt-1 mb-3 text-09">
                                            <p>Setup Continuous Integration di Android</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://www.dicoding.com/events/3969" class="remove-style-link">
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-12 text-right">
                                                <small>Selesai</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div> -->

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