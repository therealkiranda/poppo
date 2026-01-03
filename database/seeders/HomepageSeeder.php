<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Homepage;

class HomepageSeeder extends Seeder
{
    public function run(): void
    {
        Homepage::firstOrCreate([], [
            'hero_title' => 'Become a Star Live Host!',
            'hero_subtitle' => 'Start earning today on Poppo by streaming live.',
            'host_cta_text' => 'Be a Host',
            'host_cta_link' => '/register/host',
            'agent_cta_text' => 'Be an Agent',
            'agent_cta_link' => '/register/agent',
            'hero_background' => 'images/default-hero.jpg',
        ]);
    }
}
