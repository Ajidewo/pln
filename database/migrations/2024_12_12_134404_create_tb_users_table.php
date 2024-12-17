<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tb_users', function (Blueprint $table) {
            $table->id('user_id'); // Primary key
            $table->string('user_email', 50)->unique(); // Email pengguna
            $table->string('user_password', 100); // Password pengguna
            $table->string('user_nama', 100); // Nama pengguna
            $table->text('user_alamat')->nullable(); // Alamat pengguna
            $table->string('user_hp', 25)->nullable(); // Nomor HP
            $table->tinyInteger('user_role'); // Role pengguna (contoh: 1=admin, 2=user biasa)
            $table->enum('user_aktif', ['Y', 'N'])->default('Y'); // Status aktif pengguna
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('tb_users'); // Menghapus tabel saat rollback
    }
};