<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('host_earnings_text')->nullable()->after('agent_cta_link');
            $table->string('agent_commission_text')->nullable()->after('host_earnings_text');
        });
    }

    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(['host_earnings_text', 'agent_commission_text']);
        });
    }
};
