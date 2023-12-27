<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'Home-Manager',
            'About-us-Manager',
            'Services-Manager',
            'Careers-Manager',
            'Blog-Manager',
            'Contact-us-Manager',
            'Meta-Tags-Manager',
            'Offer-Tabs-Manager',
            'Roles-Managers'
         ];
      
         foreach ($permissions as $permission) {
            Role::create(['name' => $permission]);
         }
    }
}
