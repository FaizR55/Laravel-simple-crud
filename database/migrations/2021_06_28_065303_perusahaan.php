<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Perusahaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_perusahaan');
        });

        DB::table('perusahaan')->insert([
            ['id' => '1', 'nama_perusahaan' => 'Perusahaan 1'],
            ['id' => '2', 'nama_perusahaan' => 'Perusahaan 2'],
            ['id' => '3', 'nama_perusahaan' => 'Perusahaan 3']
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
