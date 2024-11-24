<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::get()->pluck('id');
        $users = User::get()->pluck('id');
        
        for($i = 0; $i < 150; $i++) {
            Comment::factory()->create([
                'user_id' => $users->random(),
                'post_id' => $posts->random()
            ]);
        }
    }
}
