<?php

namespace Database\Factories;

use App\Enums\PaymentMethodEnum;
use App\Enums\ProjectPaymentStatusEnum;
use App\Models\ProjectContribution;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProjectPayment>
 */
class ProjectPaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'project_contribution_id' => 0, // will raise an error if not set properly in seeder
            'method' => PaymentMethodEnum::KKIAPAY,
            'external_id' => $this->faker->uuid(),
            'external_status' => $this->faker->word(),
            'status' => $this->faker->randomElement(ProjectPaymentStatusEnum::values()),
        ];
    }
}
