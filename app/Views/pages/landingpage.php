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
                    <h4 class="mb-3">Daftar Webinar</h4>
                    <p>Ayo segera daftar di webinar SMKN 69 dan perdalam wawasan menarik!
                    </p>
                </div>
            </div>

            <div class="col-lg-9 pl-lg-5">
                <div class="d-flex justify-content-end align-items-center form-group form-inline">
                    <small class="mr-2 text-muted">Urut berdasarkan: </small>
                    <select class="form-control" style="width:fit-content;" name="order_by" id="order_by">
                        <option value="Update Terbaru">Update Terbaru</option>
                        <option value="Webinar Tersedia">Webinar Tersedia</option>
                    </select>
                </div>

                <!-- DAFTAR WEBINAR -->
                <div class="row row-cols-1 row-cols-md-2 mt-4" id="data"></div>
            </div>
        </div>
    </div>
</section>
<?= $this->endsection(); ?>