<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class WebinarPesertaModel extends Model
{
    protected $table = 'webinar_peserta';
    protected $useTimestamps = true;
    protected $allowedFields = ['webinar_id', 'user_id', 'is_register', 'created_at', 'updated_at'];

    

    protected $builder;
    public function __construct()
    {
        $db = \Config\Database::connect();
        $this->builder = $db->table('webinar_peserta');
    }

    public function getWebinarPeserta($webinarId = false, $userId = false)
    {
        $this->builder->select('is_register');
        $this->builder->where('webinar_id', $webinarId);
        $this->builder->where('user_id', $userId);
        $query = $this->builder->get();

        return $query->getRow();
    }
    
    public function registrasiWebinar($webinarId, $userId)
    {
        $data = [
            'webinar_id' => $webinarId,
            'user_id'    => $userId,
            'is_register'=> 1,
            'created_at' => Time::now(),
            'updated_at' => Time::now(),
        ];
        $this->builder->insert($data);

    }

    public function cancelWebinar($webinarId, $userId)
    {
        $this->builder->delete(['webinar_id' => $webinarId, 'user_id' => $userId]);
    }
    
}



?>