<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('artist_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('song_id')->constrained();
            $table->string('body', 200);
            $table->timestamps();
            $table->softDeletes();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
