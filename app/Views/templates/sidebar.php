<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <?php $uri = service('uri'); ?>
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Webinar</div>
    </a>

    <?php if( in_groups('admin') ): ?>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Admin
    </div>

    <!-- Nav Item - User List -->
    <li class="nav-item 
        <?php if( url_is('admin/index') || url_is('admin') ){ echo'active'; } ?>">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
            <i class="fas fa-users"></i>
            <span>User List</span></a>
    </li>

    <!-- Nav Item - Manage Webinars -->
    <li class="nav-item 
        <?php if( url_is('admin/manageWebinars') || url_is('admin/manage-webinars') ){ echo'active'; } ?>">
        <a class="nav-link" href="<?= base_url('admin/manage-webinars'); ?>">
            <i class="far fa-calendar-alt"></i>
            <span>Manage Webinars</span></a>
    </li>
    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        User
    </div>

    <!-- Nav Item - My Profile -->
    <li class="nav-item 
        <?php if( url_is('user/index') || url_is('user') ){ echo'active'; } ?>">
        <a class="nav-link" href="<?= base_url('user'); ?>">
            <i class="fas fa-user"></i>
            <span>Profile</span></a>
    </li>

    <!-- Nav Item - Change Password -->
    <li class="nav-item 
        <?= ((url_is('user/changePassword') || url_is('user/change-password')) ? 'active' : null) ?>">
        <a class="nav-link" href="<?= base_url('user/change-password'); ?>">
            <i class="fas fa-fw fa-key"></i>
            <span>Change Password</span></a>
    </li>

    <!-- Nav Item - Edit Profile -->
    <li class="nav-item
        <?= ((url_is('user/editProfile') || url_is('user/edit-profile')) ? 'active' : null) ?>">
        <a class="nav-link" href="<?= base_url('user/edit-profile'); ?>">
            <i class="fas fa-user-edit"></i>
            <span>Edit Profile</span></a>
    </li>

    <!-- Nav Item - My Webinars -->
    <li class="nav-item 
        <?php if( url_is('user/myWebinars') || url_is('user/my-webinars') ){ echo'active'; } ?>">
        <a class="nav-link" href="<?= base_url('user/my-webinars'); ?>">
            <i class="fas fa-list"></i>
            <span>Webinars</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('logout'); ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>