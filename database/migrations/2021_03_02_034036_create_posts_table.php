<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('niks') ;
            $table->string('nama_pasiens');
            $table->string('nama_suamis');
            $table->string('tgl_lahirs');
            $table->string('tpt_lahirs');
            $table->string('umurs');
            $table->string('alamat_povs');
            $table->string('alamat_kabs');
            $table->string('alamat_kecs');
            $table->string('desas');
            $table->string('rws');
            $table->string('rts');
            $table->string('hps');
            $table->string('image');
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
        Schema::dropIfExists('posts');
    }
}
