<?php

namespace Admin\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddIndexToUsersCreatedAt extends Migration
{
    public function up()
    {
        $this->forge->addKey("created_at");
        $this->forge->processIndexes("users");
    }

    public function down()
    {
        $this->forge->dropKey("created_at","users");
    }
}
