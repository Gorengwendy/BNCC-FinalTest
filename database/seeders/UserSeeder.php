<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>"Admin",
            'email'=>"TokoMentol12@testasik.com",
            'password'=>Hash::make("TokoMentol12"),
            'phone'=>"081111222333",
            'is_admin'=>1,
        ]);
    }
}
