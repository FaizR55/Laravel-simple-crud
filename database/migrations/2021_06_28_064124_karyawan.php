<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Karyawan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id('id')->unique();
            $table->string('name');
            $table->string('jk');
            $table->string('division_id');
            $table->string('perusahaan_id');
        });

        DB::table('karyawan')->insert([
            ['name' => 'Karyawan 1', 'jk' => 'l', 'division_id' => 1, 'perusahaan_id' => 3],
            ['name' => 'Karyawan 2', 'jk' => 'l', 'division_id' => 1, 'perusahaan_id' => 3],
            ['name' => 'Karyawan 3', 'jk' => 'l', 'division_id' => 1, 'perusahaan_id' => 3],
            ['name' => 'Karyawan 4', 'jk' => 'l', 'division_id' => 2, 'perusahaan_id' => 1],
            ['name' => 'Karyawan 5', 'jk' => 'p', 'division_id' => 2, 'perusahaan_id' => 1],
            ['name' => 'Karyawan 6', 'jk' => 'p', 'division_id' => 2, 'perusahaan_id' => 1],
            ['name' => 'Karyawan 7', 'jk' => 'p', 'division_id' => 3, 'perusahaan_id' => 2],
            ['name' => 'Karyawan 8', 'jk' => 'p', 'division_id' => 3, 'perusahaan_id' => 2]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
