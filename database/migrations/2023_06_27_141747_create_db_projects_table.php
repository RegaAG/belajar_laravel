<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id');
            $table->foreignId('user_id');
            $table->string('nama_project');
            $table->string('teknologi_yang_dipakai');
            $table->text('keterangan');
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('db_projects');
    }
};
