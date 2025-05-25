<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('excerpt')->nullable(); // ringkasan artikel
            $table->text('body')->nullable(); // isi artikel
            $table->string('thumbnail')->nullable(); // gambar thumbnail
            $table->date('published_at')->nullable(); // tanggal publikasi
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('articles');
    }
}

