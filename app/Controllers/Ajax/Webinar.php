<?php

namespace App\Controllers\Ajax;
use \App\Controllers\BaseController;
use \App\Models\WebinarModel;

class Webinar extends BaseController
{

    protected $webinarModel;

    public function __construct()
    {
        $this->webinarModel = new WebinarModel();
    }

	public function filter()
    {
        if ($this->request->getMethod() == 'post') {

        if($this->request->getVar('order_by') === 'Update Terbaru'){
            $keyword = null;
            $data = $this->webinarModel->getWebinar($keyword);
?>

<?php foreach($data as $dt): ?>
<div class="col mb-4">
    <div class="card">
        <img src="<?= base_url('img/' . $dt['poster']); ?>" class="card-img-top" alt="..." height="370px">
        <div class="card-body">
            <h5 class="card-title"><?= $dt['webinar_nama']; ?></h5>
            <p class="card-text"><?= $dt['deskripsi']; ?></p>
            <p class="card-text"><small
                    class="text-muted"><?= $dt['biaya'] == 'Gratis' ? $dt['biaya'] : 'HTM : '.$dt['biaya'].'K'; ?></small>
            </p>
            <a href="<?= base_url('pages/' . $dt['slug']); ?>" class="btn btn-primary w-100">Detail</a>
        </div>
    </div>
</div>
<?php endforeach; ?>

<?php
        }elseif($this->request->getVar('order_by') === 'Webinar Tersedia'){
            $data = $this->webinarModel->getWebinar();
            foreach( $data as $dt ){
                $tanggal = strtotime($dt['tanggal']);
                if( strtotime("now") < $tanggal == true ){
                   $keyword = date('Y-m-d', $tanggal);
                   $data = $this->webinarModel->getWebinar($keyword);
?>

<div class="col mb-4">
    <div class="card">
        <img src="<?= base_url('img/' . $data['poster']); ?>" class="card-img-top" alt="..." height="370px">
        <div class="card-body">
            <h5 class="card-title"><?= $data['webinar_nama']; ?></h5>
            <p class="card-text"><?= $data['deskripsi']; ?></p>
            <p class="card-text"><small
                    class="text-muted"><?= $data['biaya'] == 'Gratis' ? $data['biaya'] : 'HTM : '.$data['biaya'].'K'; ?></small>
            </p>
            <a href="<?= base_url('pages/' . $data['slug']); ?>" class="btn btn-primary w-100">Detail</a>
        </div>
    </div>
</div>

<?php 
                    }
                }
            }
        }else{
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }
    }
}



?>