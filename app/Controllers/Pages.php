<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{   
        $data = [
            'title' => 'Seputar Webinar',
            'slug' => '5-library-android-yang-patut-kamu-coba-di-2021'
        ];	
		return view('pages/landingpage', $data);
	}

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Webinar',
            'judul' => '5 Library Android yang Patut Kamu Coba di 2021',
            'slug' => $slug
        ];
        return view('pages/detail_webinar', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Pulo Jahe  No. 22',
                    'kota' => 'Jakarta'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Pondok Kelapa No. 193',
                    'kota' => 'Jakarta'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }

}