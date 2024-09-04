<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->admin();
    }
    private function admin(){
        User::create([
            'name' => 'Admin',
            'slug' => Str::slug('Admin'),
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'),
        ]);
    }
}
