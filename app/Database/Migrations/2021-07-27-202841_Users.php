<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'email'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'alamat'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'foto'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			]

		]);
		$this->forge->addPrimaryKey('username', true);
		$this->forge->createTable('users');
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
