<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('no_pendaftaran',30)->nullable();
            $table->string('nama_depan',50)->nullable();
            $table->string('nama_belakang',50)->nullable();
            $table->string('nohp',20)->nullable();
            $table->string('nisn',20)->nullable()->unique();
            $table->string('noseri_ijazah',50)->nullable();
            $table->string('nik',50)->nullable();
            $table->string('tempat_lahir',100)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('nikah',20)->nullable();
            $table->string('npsn_asal',20)->nullable();
            $table->string('agama',50)->nullable();
            $table->string('warga_negara',50)->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('hobi')->nullable();
            $table->string('cita_cita')->nullable();
            $table->string('anak_ke',2)->nullable();
            $table->string('jml_saudara',2)->nullable();
            $table->string('paud',50)->nullable();
            $table->string('tk',50)->nullable();
            $table->integer('jml_nilai_raport')->nullable();
            $table->integer('sem_1')->nullable();
            $table->integer('sem_2')->nullable();
            $table->integer('sem_3')->nullable();
            $table->integer('sem_4')->nullable();
            $table->integer('sem_5')->nullable();
            $table->integer('sem_6')->nullable();
            $table->string('no_skl',50)->nullable();
            $table->string('photo',100)->nullable();
            $table->text('alamat')->nullable();
            $table->string('status',20)->nullable();
            $table->string('alasan')->nullable();
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
        Schema::dropIfExists('students');
    }
}
