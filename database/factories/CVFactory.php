<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CV>
 */
class CVFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $education = ['Highschool', 'College', 'University'];
        $skills = collect(['Confidence','Public Speaking','Analysis','Creativity']);

        return [
            'title'=>$this->faker->title(),
            'name'=>$this->faker->name,
            'surname'=>$this->faker->lastName(),
            'email'=>$this->faker->unique()->safeEmail(),
            'phone_number'=>$this->faker->phoneNumber(),
            'date_of_birth'=>$this->faker->dateTimeBetween('-30 years', '-18 years'),
            'address'=>$this->faker->address(),
            'experience'=>json_encode($this->faker->jobTitle()) ,
            'education'=>json_encode($education[array_rand($education)]),
            'languages'=>json_encode($this->faker->languageCode()),
            'skills'=>json_encode($skills->random(rand(0,4))),
        ];
    }
}
