<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //没有弄数据工厂 直接使用是不行的
        //factory(\App\Article::class,5)->create();
        //https://github.com/fzaninotto/Faker
        $faker = Faker\Factory::create();
        DB::table('articles')->insert([
            'title' => $faker->title,   //这个title是指标签 并不是指标题
            'intro' => $faker->word,
            'content' => $faker->paragraph,
            'published_at' => \Carbon\Carbon::now()
        ]);
    }
}
