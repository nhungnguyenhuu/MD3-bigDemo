<?php

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = new Blog();
        $blog->title = 'bai 1';
        $blog->content = 'Day laf bai so 1';
        $blog->user_id = 1;
        $blog->save();

        $blog = new Blog();
        $blog->title = 'bai 2';
        $blog->content = 'Day laf bai so 2';
        $blog->user_id = 2;
        $blog->save();

        $blog = new Blog();
        $blog->title = 'bai 3';
        $blog->user_id = 2;
        $blog->content = 'Day laf bai so 3';
        $blog->save();
    }
}
