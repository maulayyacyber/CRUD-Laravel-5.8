<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert users ke database
        DB::table('users')->insert([
            'name'         => 'Fika Ridaul Maulayya',
            'email'        => 'ridaulmaulayya@gmail.com',
            'password'     => bcrypt('12345678'),
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s'),
        ]);
    }
}
