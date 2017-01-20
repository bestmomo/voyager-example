<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'author_id' => 1,
                'category_id' => 4,
                'title' => 'Morocco',
                'seo_title' => '',
                'excerpt' => '                              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.                                                                                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.                                                                                                                                                                                          ',
                'body' => '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
<p>&nbsp;</p>
<p style="text-align: center;"><img src="/storage/posts/January2017/lXiDTknZd2ZS0zosDZCY.jpg" alt="" width="416" height="256" /></p>',
                'image' => 'posts/January2017/W7csLN8BYMYbX6aIuAtH.jpg',
                'slug' => 'morocco',
                'meta_description' => '                                                                                                                                                                                                                                                                                                                                                                                                                        ',
                'meta_keywords' => '                                                                                                                                                                                                                                                                                                                                                                                                                        ',
                'status' => 'PUBLISHED',
                'featured' => 0,
                'created_at' => '2017-01-19 12:10:09',
                'updated_at' => '2017-01-19 15:57:35',
            ),
            1 => 
            array (
                'id' => 2,
                'author_id' => 1,
                'category_id' => 4,
                'title' => 'Tunisia',
                'seo_title' => '',
                'excerpt' => '                              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.                                                                                                            ',
                'body' => '<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
<p style="text-align: center;"><img src="/storage/posts/January2017/LULS16Ib8RJdJbPA1XKh.jpg" alt="" width="640" height="428" /></p>',
                'image' => 'posts/January2017/gGOGni7Ixz6wcwqUfrDe.jpg',
                'slug' => 'tunisia',
                'meta_description' => '                                                                                                                                                                                                            ',
                'meta_keywords' => '                                                                                                                                                                                                            ',
                'status' => 'PUBLISHED',
                'featured' => 0,
                'created_at' => '2017-01-19 12:26:33',
                'updated_at' => '2017-01-19 15:57:13',
            ),
            2 => 
            array (
                'id' => 3,
                'author_id' => 1,
                'category_id' => 4,
                'title' => 'Algeria',
                'seo_title' => '',
                'excerpt' => '                                                                                                                          At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.                                                                                                                                                              ',
                'body' => '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
<p>&nbsp;</p>
<p style="text-align: center;"><img src="/storage/posts/January2017/g52vVhey0UMOFq0ZoqTx.jpg" alt="" width="640" height="409" /></p>',
                'image' => 'posts/January2017/dDn2iPrc1JuqvBYWZEJq.jpg',
                'slug' => 'algeria',
                'meta_description' => '                                                                                                                                                                                                                                                                                                                                                    ',
                'meta_keywords' => '                                                                                                                                                                                                                                                                                                                                                    ',
                'status' => 'PUBLISHED',
                'featured' => 0,
                'created_at' => '2017-01-19 12:28:13',
                'updated_at' => '2017-01-20 21:22:12',
            ),
            3 => 
            array (
                'id' => 4,
                'author_id' => 1,
                'category_id' => 3,
                'title' => 'Italia',
                'seo_title' => '',
                'excerpt' => '                                                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.                                                                                                            ',
                'body' => '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
<p>&nbsp;</p>
<p style="text-align: center;"><img src="/storage/posts/January2017/2w9PlCHL1Gl0jfFAfA6L.jpg" alt="" width="640" height="434" /></p>',
                'image' => 'posts/January2017/WCyRfE9217ll2ukUwRRL.jpg',
                'slug' => 'italia',
                'meta_description' => '                                                                                                                                                                                                            ',
                'meta_keywords' => '                                                                                                                                                                                                            ',
                'status' => 'PUBLISHED',
                'featured' => 0,
                'created_at' => '2017-01-19 12:30:26',
                'updated_at' => '2017-01-19 15:56:40',
            ),
            4 => 
            array (
                'id' => 5,
                'author_id' => 1,
                'category_id' => 3,
                'title' => 'Spain',
                'seo_title' => '',
                'excerpt' => '                              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.                                                                                  ',
                'body' => '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
<p style="text-align: center;"><img src="/storage/posts/January2017/936p6fz5sm6q76X5jFyX.jpg" alt="" width="640" height="442" /></p>',
                'image' => 'posts/January2017/1Px14zspR4yl5HtwAibe.jpg',
                'slug' => 'spain',
                'meta_description' => '                                                                                                                                        ',
                'meta_keywords' => '                                                                                                                                        ',
                'status' => 'PUBLISHED',
                'featured' => 0,
                'created_at' => '2017-01-19 12:35:11',
                'updated_at' => '2017-01-19 15:56:23',
            ),
            5 => 
            array (
                'id' => 6,
                'author_id' => 1,
                'category_id' => 3,
                'title' => 'Poland',
                'seo_title' => '',
                'excerpt' => '                                                            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.                                                    ',
                'body' => '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
<p style="text-align: center;"><img src="/storage/posts/January2017/DIC9dtiucGgNneVmvjQx.jpg" alt="" width="640" height="375" /></p>',
                'image' => 'posts/January2017/EpA2XNAjcyPT3K9y7Cxa.jpg',
                'slug' => 'poland',
                'meta_description' => '                                                                                                                                                                                                            ',
                'meta_keywords' => '                                                                                                                                                                                                            ',
                'status' => 'PUBLISHED',
                'featured' => 0,
                'created_at' => '2017-01-19 12:37:38',
                'updated_at' => '2017-01-19 15:56:08',
            ),
            6 => 
            array (
                'id' => 7,
                'author_id' => 1,
                'category_id' => 3,
                'title' => 'Bulgaria',
                'seo_title' => '',
                'excerpt' => '                                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.                                                                                                            ',
                'body' => '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
<p style="text-align: center;"><img src="/storage/posts/January2017/f1C6hpVNeEl7q4FyDE6U.jpg" alt="" width="640" height="480" /></p>',
                'image' => 'posts/January2017/B6ZbHvXF6pz73Ym1vtDc.jpg',
                'slug' => 'bulgaria',
                'meta_description' => '                                                                                                                                                                                                            ',
                'meta_keywords' => '                                                                                                                                                                                                            ',
                'status' => 'PUBLISHED',
                'featured' => 0,
                'created_at' => '2017-01-19 12:39:03',
                'updated_at' => '2017-01-19 15:55:53',
            ),
            7 => 
            array (
                'id' => 8,
                'author_id' => 1,
                'category_id' => 3,
                'title' => 'Romania',
                'seo_title' => '',
                'excerpt' => '                              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.                                                                                  ',
                'body' => '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="/storage/posts/January2017/APOfsk0yUoPlEs1W1Qip.jpg" alt="" width="640" height="426" /></p>',
                'image' => 'posts/January2017/sm5Y2BCdjYI6ZGhAxzhH.jpg',
                'slug' => 'romania',
                'meta_description' => '                                                                                                                                        ',
                'meta_keywords' => '                                                                                                                                        ',
                'status' => 'PUBLISHED',
                'featured' => 0,
                'created_at' => '2017-01-19 12:40:17',
                'updated_at' => '2017-01-19 15:55:34',
            ),
            8 => 
            array (
                'id' => 9,
                'author_id' => 1,
                'category_id' => 3,
                'title' => 'Germania',
                'seo_title' => '',
                'excerpt' => '                                                                                                                                                                                                                                                                               Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.                                                                                                                                                                                                                                                                                                 ',
                'body' => '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="/storage/posts/January2017/YE71Y34ojchxN3gbj01I.jpg" alt="" width="640" height="426" /></p>',
                'image' => 'posts/January2017/BrUCq1ekaTSyETCFFkFD.jpg',
                'slug' => 'germania',
                'meta_description' => '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ',
                'meta_keywords' => '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ',
                'status' => 'PUBLISHED',
                'featured' => 0,
                'created_at' => '2017-01-19 12:41:57',
                'updated_at' => '2017-01-20 09:34:02',
            ),
        ));
        
        
    }
}