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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username', 50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('level', 5);
            $table->string("no_telp", 30)->nullable();
            $table->date("tgl_lahir")->nullable();
            $table->string("photo")->nullable();
            $table->string("tmpt_lahir")->nullable();
            $table->string('provinsi', 50)->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kota_kab')->nullable();
            $table->text('alamat')->nullable();
            $table->string('kelurahan')->nullable();
		    $table->integer('id_kodepos')->nullable();
            $table->enum('keterangan', ["tu", "siswa"])->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
