<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });
        
        DB::table('permissions')->insert(
                ['name' => 'update permission','slug' => 'permission.update']);
        DB::table('permissions')->insert(
                ['name' => 'show permission','slug' => 'permission.show']);
        DB::table('permissions')->insert(
                ['name' => 'update branch','slug' => 'branch.update']);
        DB::table('permissions')->insert(
                ['name' => 'show branch','slug' => 'branch.show']);
        DB::table('permissions')->insert(
                ['name' => 'update file','slug' => 'file.update']);
        DB::table('permissions')->insert(
                ['name' => 'show file','slug' => 'file.show']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
    }
}
