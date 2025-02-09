<?php

use App\Models\Category;
use App\Models\User;
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
        Schema::create('article_listings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('genre');
            $table->string('title');
            $table->tinyText('vlog_overview');
            $table->longText('description');
            $table->string('author');
            $table->date('published');
            $table->string('profile_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_listings');
    }
};
