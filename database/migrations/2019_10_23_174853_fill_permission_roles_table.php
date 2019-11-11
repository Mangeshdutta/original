<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class FillPermissionRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('permission_roles')->insert([
            [
                'role_id' => 1,
                'permission_id' => 1,
                'created_at' => now()
            ],
            [
                'role_id' => 1,
                'permission_id' => 2,
                'created_at' => now()
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('permission_roles')->truncate();
    }
}
