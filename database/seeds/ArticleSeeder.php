<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [];
        $articles = [ 
                      ['Cahier', 2, 5.30 , 10.60],
                      ['Crayon', 4, 1.10, 4.40],
                      ['Gomme', 1, 3.25, 3.25]
                    ];

        foreach($articles as $key => $article)
        {
            $datas[] =   [ 'nom'      => $article[0],
                           'quantite' => $article[1],
                           'prix'     => $article[2],
                           'total'    => $article[3]
                         ];

        }

        DB::table('article')->insert($datas);
    }
}
