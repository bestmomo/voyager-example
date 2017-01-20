<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => 'admin',
                'created_at' => '2017-01-19 11:53:29',
                'updated_at' => '2017-01-19 11:53:29',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_database',
                'table_name' => 'admin',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_media',
                'table_name' => 'admin',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_settings',
                'table_name' => 'admin',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2017-01-19 11:53:30',
                'updated_at' => '2017-01-19 11:53:30',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2017-01-19 11:53:31',
                'updated_at' => '2017-01-19 11:53:31',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2017-01-19 11:53:31',
                'updated_at' => '2017-01-19 11:53:31',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'browse_products',
                'table_name' => 'products',
                'created_at' => '2017-01-20 12:15:09',
                'updated_at' => '2017-01-20 12:15:09',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'read_products',
                'table_name' => 'products',
                'created_at' => '2017-01-20 12:15:09',
                'updated_at' => '2017-01-20 12:15:09',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'edit_products',
                'table_name' => 'products',
                'created_at' => '2017-01-20 12:15:09',
                'updated_at' => '2017-01-20 12:15:09',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'add_products',
                'table_name' => 'products',
                'created_at' => '2017-01-20 12:15:09',
                'updated_at' => '2017-01-20 12:15:09',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'delete_products',
                'table_name' => 'products',
                'created_at' => '2017-01-20 12:15:09',
                'updated_at' => '2017-01-20 12:15:09',
            ),
        ));
        
        
    }
}