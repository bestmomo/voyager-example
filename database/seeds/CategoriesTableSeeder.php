<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 2,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Travels',
                'slug' => 'travels',
                'created_at' => '2017-01-19 12:01:19',
                'updated_at' => '2017-01-19 12:02:51',
            ),
            1 => 
            array (
                'id' => 3,
                'parent_id' => 2,
                'order' => 1,
                'name' => 'Europa',
                'slug' => 'europa',
                'created_at' => '2017-01-19 12:01:32',
                'updated_at' => '2017-01-19 12:28:50',
            ),
            2 => 
            array (
                'id' => 4,
                'parent_id' => 2,
                'order' => 1,
                'name' => 'Africa',
                'slug' => 'africa',
                'created_at' => '2017-01-19 12:02:39',
                'updated_at' => '2017-01-19 12:02:39',
            ),
        ));
        
        
    }
}