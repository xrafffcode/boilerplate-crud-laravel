<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $appname = config('app.name');

        User::create([
            'email' => 'admin@' . str_replace(' ', '', strtolower($appname)) . '.com',
            'password' => bcrypt('password'),
        ])->assignRole('admin');
    }
}
