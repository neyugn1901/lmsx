<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory()->count(100000)->create();

         User::factory()->create([
                'name' => 'Nam Hoàng Văn',
                'email' => 'test1@gmail.com',
                'password' => Hash::make('123123'),
                'address' => 'Sol Forest 1 Khu Đô Thị Ecopark',
                'phone' => '0987654321',
                'user_catalogue_id' => 1,
            ]);
    }
}
