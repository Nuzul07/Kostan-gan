<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePenginaps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penginaps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('umur');
            $table->string('jeniskelamin');
            $table->integer('nomortelepon');
            $table->unsignedinteger('kamars_id');
<<<<<<< HEAD
            $table->string('gambar');
=======
>>>>>>> d95ca556616939069706c50c9b61eb9f2dba09c5
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
        Schema::dropIfExists('penginaps');
    }
}
