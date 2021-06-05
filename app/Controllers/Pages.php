<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{   
        $data = [
            'title' => 'Seputar Webinar',
        ];	
		return view('pages/home', $data);
	}

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
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
