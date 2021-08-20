<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class WebinarSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'webinar_nama'  => '5 Library Android yang Patut Kamu Coba di 2021',
				'slug'    		=> '5-library-android-yang-patut-kamu-coba-di-2021',
				'deskripsi'    	=> 'Pembahasan tentang library yang dapat membantu dalam mengembangkan aplikasi. Penasaran library 
									apa sajakah itu? Yuk segera daftar dan ikuti webinar ini',
				'narasumber'    => 'Wiwit Lesmana',
				'tanggal'    	=> '2021-06-27',
				'jam'    		=> '19:00',
				'biaya'    		=> 'Gratis',
				'webinar_media' => 'Google Meet',
				'poster'    	=> 'webinar_poster1.png',
				'created_at'  	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'webinar_nama'  => 'Computational',
				'slug'    		=> 'computational',
				'deskripsi'    	=> 'Pembahasan tentang penggunaan algoritma dalam menyelesaikan 
									masalah',
				'narasumber'    => 'James',
				'tanggal'    	=> '2021-06-22',
				'jam'    		=> '10:00',
				'biaya'    		=> 'HTM : 10K',
				'webinar_media' => 'Zoom',
				'poster'    	=> 'webinar_poster2.jpg',
				'created_at'  	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
					'webinar_nama'  => 'Menjadi Android Developer Yang Handal',
					'slug'    		=> 'menjadi-android-developer-yang-handal',
					'deskripsi'    	=> 'Peserta akan di berikan tips dan langkah-langkah untuk menjadi
										android developer yang handal secara detail serta terstruktur',
					'narasumber'    => 'Nur Panto',
					'tanggal'    	=> '2021-07-18',
					'jam'    		=> '14:30',
					'biaya'    		=> 'Gratis',
					'webinar_media' => 'Google Meet',
					'poster'    	=> 'webinar_poster3.jpg',
					'created_at'  	=> Time::now(),
		 		'updated_at'	=> Time::now()
		 	],
		 	[
		 		'webinar_nama'  => 'Scaling Tokopedia : Past, Present, Future',
		 		'slug'    		=> 'scaling-tokopedia-past-present-future',
		 		'deskripsi'    	=> 'Di webinar ini akan membahas bagaiamana menangani permintaan yang berubah dengan menambahkan 
		 							atau menghapus sumber daya serta scaling yang diterapkan oleh tokopedia',
		 		'narasumber'    => 'Leontinus Alpha Edison',
		 		'tanggal'    	=> '2021-08-01',
		 		'jam'    		=> '13:00',
		 		'biaya'    		=> 'Gratis',
		 		'webinar_media' => 'Zoom',
		 		'poster'    	=> 'webinar_poster4.jpg',
		 		'created_at'  	=> Time::now(),
		 		'updated_at'	=> Time::now()
		 	],
		 	[
		 		'webinar_nama'  => 'Performance Website',
		 		'slug'    		=> 'performance-website',
		 		'deskripsi'    	=> 'Webinar kali ini akan membahas dan berbagi tips-tips bagaimana cara memaksimalkan performance website dengan cara yang sesat',
		 		'narasumber'    => 'Irfan Jauhari',
		 		'tanggal'    	=> '2021-12-18',
		 		'jam'    		=> '09:00',
		 		'biaya'    		=> 'Gratis',
		 		'webinar_media' => 'Zoom',
		 		'poster'    	=> 'webinar_poster5.jpg',
		 		'created_at'  	=> Time::now(),
		 		'updated_at'	=> Time::now()
		 	],
		 	[
		 		'webinar_nama'  => 'Menjadi Web Developer PHP',
		 		'slug'    		=> 'menjadi-web-developer-php',
		 		'deskripsi'    	=> 'Di webinar ini akan belajar dan memahami fundamental menjadi seorang developer PHP dengan langkah-langkah yang baik',
		 		'narasumber'    => 'Farid Wibowo',
		 		'tanggal'    	=> '2021-11-11',
		 		'jam'    		=> '19:30',
		 		'biaya'    		=> 'Gratis',
		 		'webinar_media' => 'Google Meet',
		 		'poster'    	=> 'webinar_poster6.jpg',
		 		'created_at'  	=> Time::now(),
		 		'updated_at'	=> Time::now()
		 	]
		];

		// $data = [
		// 		'webinar_nama'  => 'Menjadi Web Developer PHP',
		// 		'slug'    		=> 'menjadi-web-developer-php',
		// 		'deskripsi'    	=> 'Di webinar ini akan belajar dan memahami fundamental menjadi seorang developer PHP dengan langkah-langkah yang baik',
		// 		'narasumber'    => 'Farid Wibowo',
		// 		'tanggal'    	=> '2021-11-11',
		// 		'jam'    		=> '19:30',
		// 		'biaya'    		=> 'Gratis',
		// 		'webinar_media' => 'Google Meet',
		// 		'poster'    	=> 'webinar_poster6.jpg',
		// 		'created_at'  	=> Time::now(),
		// 		'updated_at'	=> Time::now()
		// ];

		// Simple Queries / untuk 1 baris data
		// $this->db->query("INSERT INTO webinar (webinar_nama, slug, deskripsi, narasumber, tanggal, jam, biaya, webinar_media,
		// poster, created_at, updated_at
		// ) VALUES(:webinar_nama:, :slug:, :deskripsi:, :narasumber:, :tanggal:, :jam:, :biaya:, :webinar_media:, :poster:, :created_at:, :updated_at:)", $data);

		// Using Query Builder
		// $this->db->table('orang')->insert($data); // opsi gampang nya hanya untuk 1 baris data saja
		// $this->db->table('webinar')->insertBatch($data);
		
	}
}