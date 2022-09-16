<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roles;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::insert([
                        [
                            'uuid' => getNewUUID(),
                            'name' => "Admin",
                            'description' => "This is admin role"
                        ],
                        [
                            'uuid' => getNewUUID(),
                            'name' => "Individual",
                            'description' => "This is admin role"
                        ],
                        [
                            'uuid' => getNewUUID(),
                            'name' => "Organization",
                            'description' => "This is admin role"
                        ]
                    ]);
    }
}
