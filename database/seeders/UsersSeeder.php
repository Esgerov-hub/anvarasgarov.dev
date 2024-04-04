<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('users')->insert([
                'name' => json_encode(['az' => 'Ənvər']),  // Convert to JSON string
                'surname' => json_encode(['az' => 'Əsgərov']),  // Convert to JSON string'phone' => '+994507027093',
                'position' => json_encode(['az' => 'Veb Developer']),  // Convert to JSON string'phone' => '+994507027093',
                'email' => 'admin@gmail.com',
                'phone' => '+994507027093',
                'password' => bcrypt('123456'),
                'status' => 1
            ]);
    }
}
