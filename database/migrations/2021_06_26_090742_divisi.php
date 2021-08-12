<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Divisi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divisi', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_divisi');
        });

        DB::table('divisi')->insert([
            ['id' => '1', 'nama_divisi' => 'Divisi 1'],
            ['id' => '2', 'nama_divisi' => 'Divisi 2'],
            ['id' => '3', 'nama_divisi' => 'Divisi 3']
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
