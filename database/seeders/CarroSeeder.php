<?php

namespace Database\Seeders;

use App\Models\Carro;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class CarroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Carro::factory()->state(new Sequence(
            ['brand' => 'chevrolet'],
            ['brand' => 'bmw'],
            ['brand' => 'ferrari'],
        ))->count(3)->create();
    }
}
