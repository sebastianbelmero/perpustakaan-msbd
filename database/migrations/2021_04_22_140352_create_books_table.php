<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->char('isbn', 17)->nullable();
            $table->string('judul', 100);
            $table->string('penerbit', 100);
            $table->string('pengarang', 100);
            $table->char('tahun', 4)->nullable();
            $table->date('tgl_masuk')->nullable();
            $table->string('edisi', 100)->nullable();
            $table->string('website', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->integer('jumlah')->nullable();
            $table->bigInteger('id_kategori')->nullable();
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
        Schema::dropIfExists('books');
    }
}
