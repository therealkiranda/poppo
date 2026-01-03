<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            if (!Schema::hasColumn('pages', 'hero_title')) {
                $table->string('hero_title')->nullable();
            }
            if (!Schema::hasColumn('pages', 'hero_subtitle')) {
                $table->text('hero_subtitle')->nullable();
            }
            if (!Schema::hasColumn('pages', 'hero_video')) {
                $table->string('hero_video')->nullable();
            }
            if (!Schema::hasColumn('pages', 'host_cta_link')) {
                $table->string('host_cta_link')->nullable();
            }
            if (!Schema::hasColumn('pages', 'agent_cta_link')) {
                $table->string('agent_cta_link')->nullable();
            }
            if (!Schema::hasColumn('pages', 'earnings_text')) {
                $table->text('earnings_text')->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'hero_title',
                'hero_subtitle',
                'hero_video',
                'host_cta_link',
                'agent_cta_link',
                'earnings_text',
            ]);
        });
    }
};