<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2017-01-19 11:53:29',
                'updated_at' => '2017-01-19 11:53:29',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'main',
                'created_at' => '2017-01-19 23:28:42',
                'updated_at' => '2017-01-19 23:28:42',
            ),
        ));
        
        
    }
}