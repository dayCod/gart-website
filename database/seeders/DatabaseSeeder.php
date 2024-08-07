<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user = User::where('email', 'admin@gart.com')->first();

        if (empty($user)) {
            User::factory()->create([
                'name' => 'Super Admin',
                'email' => 'admin@gart.com',
            ]);
        }

        $this->call(VisitorSeeder::class);
        $this->call(CustomerMessageSeeder::class);
        $this->call(WhatsappClickSeeder::class);
    }
}
