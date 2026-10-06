<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('scam_reports', function (Blueprint $table) {
            $table->id();
            $table->string('input_type');
            $table->text('input_value');
            $table->string('risk_level');
            $table->unsignedInteger('score')->default(0);
            $table->json('reasons')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void { Schema::dropIfExists('scam_reports'); }
};
