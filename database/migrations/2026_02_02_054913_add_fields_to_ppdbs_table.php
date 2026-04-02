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
         Schema::table('ppdbs', function (Blueprint $table) {
        $table->enum('jenis_kelamin', ['L', 'P'])->nullable();
        $table->date('tanggal_lahir')->nullable();
        $table->string('kelas')->nullable();
        $table->text('alamat')->nullable();
    });

        Schema::table('ppdbs', function (Blueprint $table) {
             $table->dropColumn([
            'jenis_kelamin',
            'tanggal_lahir',
            'kelas',
            'alamat',
        ]);
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ppdbs', function (Blueprint $table) {
            //
        });
    }
};
