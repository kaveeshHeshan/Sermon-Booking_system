<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Unknown Admin',
            'email' => 'unknownadmin@abc.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        UserProfile::create([
            'user_id' => $admin->id,
            'first_name' => 'Unknown',
            'last_name' => 'Admin',
            'email' => $admin->email,
            'mobile_number' => '0123456789',
            'address' => 'Colombo',
        ]);

        $admin->assignRole('admin');
    }
}
