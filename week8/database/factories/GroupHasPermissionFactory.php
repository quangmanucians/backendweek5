<?php

namespace Database\Factories;

use App\Models\GroupHasPermission;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupHasPermissionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GroupHasPermission::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'group_id' => random_int(1,10),
            'permission_id' => random_int(1,10),
        ];
    }
}
