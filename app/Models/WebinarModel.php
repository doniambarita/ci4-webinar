<?php

namespace App\Models;

use CodeIgniter\Model;

class WebinarModel extends Model
{
    protected $table = 'webinar';
    protected $useTimestamps = true;
    protected $allowedFields = ['webinar_nama', 'slug', 'deskripsi', 'narasumber', 'tanggal', 'jam', 'biaya',
    'webinar_media', 'poster'];


    public function getWebinar($slug = false)
    {
        if( $slug == false ){
            return $this->findAll();
        }elseif( strtotime("now") < strtotime($slug) != false ){
            return $this->where(['tanggal' => $slug])->first();    
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getWebinarById($webinar_id)
    {
        return $this->where(['webinar_id' => $webinar_id])->first();
    }
}