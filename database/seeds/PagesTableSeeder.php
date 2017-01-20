<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'author_id' => 1,
                'title' => 'Homepage',
                'excerpt' => '',
                'body' => '<section id="banner">
<div class="content"><header>
<h1>Hi, I&rsquo;m Voyager</h1>
<p>Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.</p>
</header></div>
<span class="image object"> <img src="/storage/pages/January2017/zd65nD7qwbaYWGi2aCjl.jpg" alt="" width="640" height="426" /> </span></section>',
                'image' => NULL,
                'slug' => 'homepage',
                'meta_description' => '',
                'meta_keywords' => '',
                'status' => 'ACTIVE',
                'created_at' => '2017-01-20 00:08:49',
                'updated_at' => '2017-01-20 14:20:12',
            ),
        ));
        
        
    }
}