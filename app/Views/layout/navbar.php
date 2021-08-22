<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm p-3 mb-5 bg-white rounded">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('/'); ?>">Welcome</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <?php if( !logged_in() ): ?>
                <li class='pr-2'>
                    <a class="btn btn-outline-secondary text-uppercase" href="<?= base_url('login'); ?>">Login</a>
                </li>
                <li class="pr-2">
                    <a class="btn btn-primary text-uppercase" href="<?= base_url('register'); ?>">Register</a>
                </li>
                <?php endif; ?>
                <?php if( in_groups('admin') || in_groups('user') ): ?>
                <li class="pr-2">
                    <a class="btn btn-outline-secondary text-uppercase"
                        href="<?= (in_groups('admin') == null) ? base_url('user') : base_url('admin'); ?>">Dashboard</a>
                </li>
                <?php endif; ?>
                <?php if( logged_in() ): ?>
                <li class="">
                    <a class="btn btn-primary text-uppercase" href="<?= base_url('logout'); ?>">Logout</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>