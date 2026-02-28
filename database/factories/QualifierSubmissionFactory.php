<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QualifierSubmission>
 */
class QualifierSubmissionFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'role' => fake()->randomElement(['Founder/CEO', 'CTO / Technical Co-founder', 'Head of Product', 'Other']),
            'engagement_type' => fake()->randomElement(['Co-founder who builds', 'Senior advisor', 'Vendor to build for us', 'Not sure yet']),
            'stage' => fake()->randomElement(['Pre-revenue', '$1-5M ARR', '$5M+ ARR']),
            'buying_history' => fake()->randomElement(['Yes, currently', 'Yes, in the past', 'No, first time']),
            'bottleneck' => fake()->optional()->sentence(),
            'timing_driver' => fake()->randomElement(['Hard deadline', 'Been thinking, ready now', 'Key person left', 'Exploring for the future']),
            'email' => fake()->optional()->safeEmail(),
        ];
    }
}
