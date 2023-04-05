<?php

namespace Database\Factories;
use App\Models\Ville;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiant>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=> fake()->unique()->numberBetween($min = 1, $max = 100),
            'nom'=> fake()->lastName(),
            'prenom'=> fake()->firstName(),
            'adresse'=> fake()->streetAddress(),
            'telephone'=> fake()->phoneNumber(),
            //'email'=> fake()->safeEmail(),
            'dateNaissance'=> fake()->date($format = 'Y-m-d', $max = '-20 years'),
            'ville_id'=> fake()->numberBetween($min = 1, $max = 15),
        ];
    }
}
