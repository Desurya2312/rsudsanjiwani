<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('JenisK');
            $table->string('NoRM');
            $table->string('JenisR');
            $table->date('Tlahir');
            $table->string('Agama');
            $table->string('Kawin');
            $table->string('Pendidikan');
            $table->string('Pekerjaan');
            $table->string('Kewarganegaraan');
            $table->string('Alamat');
            $table->string('NoTelp');
            $table->string('Penjamin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
