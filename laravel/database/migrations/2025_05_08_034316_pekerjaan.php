<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Pekerjaan;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('pekerjaan', function (Blueprint $table) {
        $table->id();
        $table->string('slug')->nullable();
        $table->string('role');
        $table->string('location')->default('Yogyakarta, Indonesia');
        $table->string('type'); // Full Time, Part Time, dll
        $table->string('category')->nullable();
        $table->string('position')->nullable();
        $table->string('salary')->nullable();
        $table->date('deadline')->nullable();
        $table->text('cover_description')->nullable(); // bagian atas
        $table->text('responsibilities')->nullable();
        $table->text('education')->nullable();
        $table->text('experience')->nullable();
        $table->text('additional')->nullable();
        $table->text('benefits')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pekerjaan');
    }
};
