<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTimestampsToArticleTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('article',[
            'created_at'=>[
                "type"=>"DATETIME",
            ],
            "updated_at"=>[
                "type"=>"DATETIME",
            ]
        ]);

        $this->forge->addKey('created_at');
        $this->forge->processIndexes('article');
    }

    public function down()
    {
        $this->forge->dropColumn('article','created_at');
        $this->forge->dropColumn('article','updated_at');
    }
}
