<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $posts = factory(Post::class, 10)->create();

        $posts->each(function ($post) {
            factory(Comment::class, 2)->create([
                'post_id' => $post->id,
            ]);
        });
    }
}
