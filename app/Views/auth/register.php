<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><?=lang('Auth.register')?></h1>
                                </div>

                                <?php if(session()->getFlashdata('pesan')) : ?>
                                <ul class="alert alert-danger">
                                    <li><?= session()->getFlashdata('pesan'); ?></li>
                                </ul>
                                <?php else: ?>
                                <?= view('Myth\Auth\Views\_message_block') ?>
                                <?php endif; ?>
                                <form action="<?= route_to('register') ?>" method="post" class="user">
                                    <?= csrf_field() ?>

                                    <div class=" form-group">
                                        <input type="text"
                                            class="form-control form-control-user <?php if(session('errors.fullname')) : ?>is-invalid<?php endif ?>"
                                            name="fullname" placeholder="Nama Lengkap" value="<?= old('fullname') ?>">
                                        <small id="fullnameHelp" class="form-text text-muted">Masukkan nama asli Anda,
                                            nama akan digunakan pada profile, data sertifikat, dll</small>
                                    </div>

                                    <div class=" form-group">
                                        <input type="text"
                                            class="form-control form-control-user <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>"
                                            name="username" placeholder="Username" value="<?= old('username') ?>">
                                        <small id="usernameHelp" class="form-text text-muted">Username akan digunakan
                                            sebagai identitas profile Anda</small>
                                    </div>

                                    <div class="form-group">
                                        <input type="email"
                                            class="form-control form-control-user <?php if(session('errors.email') || session()->getFlashdata('pesan')) : ?>is-invalid<?php endif ?>"
                                            name="email" placeholder="<?=lang('Auth.email')?>"
                                            value="<?= old('email') ?>">
                                        <small id="emailHelp" class="form-text text-muted">Kami tidak akan pernah
                                            membagi email Anda dengan orang lain.</small>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password"
                                                class="form-control form-control-user <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>"
                                                name="password" placeholder="<?=lang('Auth.password')?>"
                                                autocomplete="off">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password"
                                                class="form-control form-control-user <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                                                name="pass_confirm" placeholder="<?=lang('Auth.repeatPassword')?>"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        <?=lang('Auth.register')?>
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <p><a href="<?= route_to('login') ?>"><?=lang('Auth.alreadyRegistered')?>
                                            <?=lang('Auth.signIn')?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>