<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use App\Models\Article;

return new class extends Migration
{
    public function up(): void
    {
        // Tambah kolom slug terlebih dahulu
        Schema::table('articles', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('title');
        });

        // Baru isi kolom slug
        Article::whereNull('slug')->get()->each(function ($article) {
            $article->slug = Str::slug($article->title);
            $article->save();
        });
    }

    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};

