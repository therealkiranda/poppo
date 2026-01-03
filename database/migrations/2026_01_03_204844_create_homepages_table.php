<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            $table->string('hero_title')->nullable();
            $table->string('hero_subtitle')->nullable();
            $table->string('host_cta_text')->nullable();
            $table->string('host_cta_link')->nullable();
            $table->string('agent_cta_text')->nullable();
            $table->string('agent_cta_link')->nullable();
            $table->string('hero_background')->nullable(); // path to hero image
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('homepages');
    }
};
