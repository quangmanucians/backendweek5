<?php

namespace Database\Factories;

use App\Models\UserHasPermission;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserHasPermissionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserHasPermission::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'user_id' => random_int(1,10),
            'permission_id' => random_int(1,10),
        ];
    }
}
