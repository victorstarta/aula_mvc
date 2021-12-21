<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('posts')->delete();

        \DB::table('posts')->insert([
        [
            'id' => 1,
            'name' => 'Especial',
            'description' => 'Ambulatorial',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ],[
            'id' => 2,
            'name' => 'Especial',
            'description' => 'Ambulatorial',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ],[
            'id' => 3,
            'name' => 'Especial',
            'description' => 'Ambulatorial',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
            ]
        ]);
    }
}
