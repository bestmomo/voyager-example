<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$AKNGEC/YwcgeImkspxsiUer0wrs38kw3fgl15Du.oWlA7fdX96x/a',
                'remember_token' => '3TWZXkvtpGQDQQSLXaFhuXF9I54zz3wUuAeyqCf1Kcm7vkdfLIDKetBkpVGX',
                'created_at' => '2017-01-18 21:45:27',
                'updated_at' => '2017-01-20 21:33:11',
                'avatar' => 'users/default.png',
                'role_id' => 1,
            ),
        ));
        
    }
}