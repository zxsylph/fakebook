<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'ownerID'=>1,
            'postID'=>1,
            'body'=>'Test Comment'
        ]);
    }
}
