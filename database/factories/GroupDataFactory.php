<?php

namespace Database\Factories;

use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GroupData>
 */
class GroupDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'group_id' => $this->faker->unique()->numberBetween(1, Group::count()),
            'team_name' => $this->faker->streetName(),
            'fullname' => $this->faker->name(),
            'birth' => $this->faker->date(),
            'line_id' => $this->faker->userName(),
            'phone_no' => $this->faker->phoneNumber(),
            'competition_type' => 'UI/UX',
            'cv_file' => '',
            'payment_file' => '',
            'regist_date' => date("Y-m-d",time())
        ];
    }
}
