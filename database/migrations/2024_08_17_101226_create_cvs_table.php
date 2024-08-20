<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->integer('age');
            $table->string('phone');
            $table->string('email');
            $table->text('education');
            $table->text('experience');
            $table->text('skills');
            $table->string('language1');
            $table->string('language2');
            $table->string('language3');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('cvs');
    }
};
