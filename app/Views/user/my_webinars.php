<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">My Webinars</h1>

    <div class="row">
        <div class="col-sm-12 col-md-4">
            <label class="mb-0" for="keyword">
                Search:
            </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Keyword ..." name="keyword" autocomplete="off"
                    id="keyword" autofocus>
            </div>
        </div>
    </div>
    <div class="row registeredWebinars" style="height:500px"></div>

</div>
<?= $this->endSection(); ?>