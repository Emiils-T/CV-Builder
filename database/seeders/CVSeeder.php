<?php

namespace Database\Seeders;

use App\Models\CV;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CVSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory(1)->create();
        CV::factory(5)->make()->each(function ($cv) use ($user) {
           $cv->user_id = $user[0]->id;
           $cv->save();
        });
    }
}
