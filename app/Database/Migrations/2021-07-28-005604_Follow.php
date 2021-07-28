<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Follow extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'follower_id'          => [
				'type'           => 'INT',
				'constraint'     => '100',
			],
			'following_id'       => [
				'type'           => 'INT',
				'constraint'     => '100',
			],

		]);
		$this->forge->addPrimaryKey('id', true);
		$this->forge->createTable('follows');
	}

	public function down()
	{
		$this->forge->dropTable('follows');
	}
}
