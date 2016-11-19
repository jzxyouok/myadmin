<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date_time = date("Y-m-d H:i:s");
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@myadmin.com',
            'password' => bcrypt('123456'),
            'created_at' => $date_time,
            'updated_at' => $date_time,
        ]);
    }
}
