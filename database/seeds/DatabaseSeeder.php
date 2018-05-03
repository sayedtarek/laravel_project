<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'seq_q'=>'1',
            'seq_a'=>'admin'
        ]);

        // DB::table('bloods')->insert([
        //     ['name' => 'A+'],
        //     ['name' => 'A-'],
        //     ['name' => 'B+'],
        //     ['name' => 'B-'],
        //     ['name' => 'AB+'],
        //     ['name' => 'AB-'],
        //     ['name' => 'O+'],
        //     ['name' => 'O-'],
        // ]);

        
    }
}
