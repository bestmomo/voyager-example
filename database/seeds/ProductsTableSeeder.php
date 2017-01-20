<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Backpack',
                'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'image' => 'products/January2017/vrIp8lJy5xAq1StMSh63.png',
                'created_at' => '2017-01-20 12:25:03',
                'updated_at' => '2017-01-20 14:17:07',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Tent',
                'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'image' => 'products/January2017/eOGehfX1D3kH2xMGKXun.jpg',
                'created_at' => '2017-01-20 12:25:23',
                'updated_at' => '2017-01-20 14:17:00',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Binoculars',
                'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'image' => 'products/January2017/5gamyO6dOWCX4ryM1T5K.png',
                'created_at' => '2017-01-20 12:25:33',
                'updated_at' => '2017-01-20 14:16:53',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Sleeping bag',
                'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'image' => 'products/January2017/b3VmEeadKUU96KIwBcNY.jpg',
                'created_at' => '2017-01-20 12:25:50',
                'updated_at' => '2017-01-20 14:16:45',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Compass',
                'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'image' => 'products/January2017/BgEcZJTy4SnFNzEYp7oD.jpg',
                'created_at' => '2017-01-20 12:26:06',
                'updated_at' => '2017-01-20 14:16:38',
            ),
        ));
        
        
    }
}