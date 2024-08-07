<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\WhatsappClick;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WhatsappClickSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i <= 50; $i++) {
            $whatsappClick = WhatsappClick::create([
                'session_id' => uniqid(),
                'ip_address' => fake()->ipv4(),
                'user_agent' => fake()->userAgent(),
                'created_at' => Carbon::now()->addDays($i),
            ]);

            $whatsappClick->location()->create($this->generateRandomLocationData(modelName: WhatsappClick::class, addDays: $i));
        }
    }

    /**
     * Generates an array of random location data for a given model.
     *
     * @param string $modelName The name of the model the location data is for.
     * @return array An array of location data, including country, region, city, latitude, longitude, and timezone.
     */
    private function generateRandomLocationData(string $modelName, int $addDays = 1): array
    {
        return [
            'model_name' => $modelName,
            'country_name' => fake()->country(),
            'region_name' => fake()->city(),
            'city_name' => fake()->city(),
            'zip_code' => null,
            'postal_code' => null,
            'latitude' => fake()->latitude(),
            'longitude' => fake()->longitude(),
            'timezone' => fake()->timezone(),
            'created_at' => Carbon::now()->addDays($addDays),
        ];
    }
}
