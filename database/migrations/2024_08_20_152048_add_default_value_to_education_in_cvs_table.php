<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('cvs', function (Blueprint $table) {
            $table->text('education')->default('Not provided')->change();
        });
    }

    public function down(): void
    {
        Schema::table('cvs', function (Blueprint $table) {
            $table->text('education')->nullable(false)->change(); // Remove default
        });
    }
};