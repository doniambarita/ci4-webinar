<?php namespace App\Models;

use Myth\Auth\Models\UserModel as MythUserModel;
use Myth\Auth\Authorization\GroupModel;
use Myth\Auth\Entities\User;

class UserModel extends MythUserModel
{
    protected $allowedFields = [
        'email', 'username', 'fullname', 'user_image', 'password_hash', 'reset_hash', 'reset_at', 'reset_expires', 'activate_hash',
        'status', 'status_message', 'active', 'force_pass_reset', 'permissions', 'deleted_at',
    ];

    protected $validationRules = [
        'email'         => 'required|valid_email|is_unique[users.email,id,{id}]',
        'username'      => 'required|alpha_numeric_punct|min_length[3]|max_length[30]|is_unique[users.username,id,{id}]',
        'fullname'         => 'required|alpha_numeric_space',
        'password_hash' => 'required',
    ];


    public function getUser($id)
    {
        return $this->where(['id' => $id])->first();
    }
    
}