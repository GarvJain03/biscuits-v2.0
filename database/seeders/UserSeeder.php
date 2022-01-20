<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'username' => 'RoboKnights',
            'first_member' => 'Biscuits Admin',
            'second_member' => 'Biscuits Admin',
            'first_member_email' => 'admin@roboknights.in',
            'second_member_email' => 'admin@roboknights.in',
            'first_member_grade' => 12,
            'second_member_grade' => 12,
            'category' => 'school',
            'is_admin' => true,
            'question_on' => 1,
            'password' => Hash::make('cool_admin_pass_no_crack'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
