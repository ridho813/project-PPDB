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
<<<<<<< HEAD
            $table->unsignedInteger('nisn')->index();
            $table->string('nama_lengkap');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('umur');
=======
            $table->string('name');
>>>>>>> 183c47f666b51293894052217df658cd339eefac
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
<<<<<<< HEAD
            $table->tinyInteger('role_as')->nullable();
=======
>>>>>>> 183c47f666b51293894052217df658cd339eefac
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
