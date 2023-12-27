<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;


class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Super Admin', 
            'email' => 'admin@gmail.com',
            'password' => Hash::make("123123123")
        ]);
        
        $roleId = [1,2,3,4,5,6,7,8,9];
        
        $user->assignRole($roleId);
    }
}
