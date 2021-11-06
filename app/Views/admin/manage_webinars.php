<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<style>
.table>tbody>tr>* {
    vertical-align: middle;
}
</style>
<div class="container-fluid">

    <!-- Page Heading -->
    <a href="<?= base_url('admin/new-webinar'); ?>" class="btn btn-primary mb-4 mt-1">
        <i class="fas fa-plus-square"></i>
        New Webinar
    </a>

    <div class="row">
        <div class="col-lg-8">
            <h3 class="text-gray-800">Webinars List</h3>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Cover</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach( $webinars as $ws ): ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="<?= base_url('img/' . $ws['poster']); ?>" alt="" class="cover"></td>
                            <td><?= $ws['webinar_nama']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/manage-webinars/' . $ws['slug']); ?>"
                                    class="btn btn-info">detail</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row" style="height:100px"></div>

</div>
<?= $this->endSection(); ?>