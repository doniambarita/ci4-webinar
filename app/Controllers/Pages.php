<?php

namespace App\Controllers;
use \App\Models\WebinarModel;
use \App\Models\WebinarPesertaModel;


class Pages extends BaseController
{

    protected $webinarModel;
    protected $webinarPesertaModel;

    public function __construct()
    {
        $this->webinarModel = new WebinarModel();
        $this->webinarPesertaModel = new WebinarPesertaModel();
    }
    
	public function index()
	{   
        $data = [
            'title' => 'Seputar Webinar'
        ];	
        
		return view('pages/landingpage', $data);
	}

    public function detail($slug = false)
    {
        $data = [
            'title' => 'Detail Webinar',
            'webinar' => $this->webinarModel->getWebinar($slug)
        ];

        if(empty($data['webinar']) || empty($slug)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul Webinar ' . $slug . ' tidak ditemukan');
        }

        $data['is_register'] = $this->webinarPesertaModel->getWebinarPeserta($data['webinar']['webinar_id'], user_id());

        if(empty($data['is_register'])){
            $data['is_register'] = 0;
        }else{
            $data['is_register'] = 1;
        }
        return view('pages/detail_webinar', $data);
    }

    // public function contact()
    // {
    //     $data = [
    //         'title' => 'Contact Us',
    //         'alamat' => [
    //             [
    //                 'tipe' => 'Rumah',
    //                 'alamat' => 'Jl. Pulo Jahe  No. 22',
    //                 'kota' => 'Jakarta'
    //             ],
    //             [
    //                 'tipe' => 'Kantor',
    //                 'alamat' => 'Jl. Pondok Kelapa No. 193',
    //                 'kota' => 'Jakarta'
    //             ]
    //         ]
    //     ];

    //     return view('pages/contact', $data);
    // }

}