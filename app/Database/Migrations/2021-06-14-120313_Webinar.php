<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Webinar extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'webinar_id' => [
					'type'           => 'INT',
					'constraint'     => 11,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'webinar_nama' => [
					'type'       => 'VARCHAR',
					'constraint' => '255',
			],
			'slug' => [
					'type'       => 'VARCHAR',
					'constraint' => '250',
			],
			'deskripsi' => [
					'type'       => 'TEXT',
					'constraint' => '2000',
			],
			'narasumber' => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
			],
			'tanggal' => [
					'type'       => 'VARCHAR',
					'constraint' => '30',
			],
			'jam' => [
					'type'       => 'VARCHAR',
					'constraint' => '20',
			],
			'biaya' => [
					'type' => 'VARCHAR',
					'constraint' => '40',
			],
			'webinar_media' => [
					'type' => 'VARCHAR',
					'constraint' => '50',
			],
			'poster' => [
					'type' => 'VARCHAR',
					'constraint' => '155',
			],
			'created_at' => [
					'type' => 'DATETIME',
					'null' => true,
			],
			'updated_at' => [
					'type' => 'DATETIME',
					'null' => true,
			],
		]);

		$this->forge->addKey('webinar_id', true);
		$this->forge->createTable('webinar');
	}

	public function down()
	{
		$this->forge->dropTable('webinar');
	}
}