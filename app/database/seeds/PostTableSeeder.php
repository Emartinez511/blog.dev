<?php

class PostTableSeeder extends Seeder
{

    function run()
    {

        $post = new Post();
        $post->title = 'This Weekend';
        $post->description = "This weekend I was able to catch up on a lot of Youtube videos on
            Web Developement and Laravel.";
        $post->user_id = User::first()->id;
        $post->save();

        $post = new Post();
        $post->title = 'Laracast';
        $post->description = "I recently subscribed to Laracast and found it very
            interesting. I finished the Object Oriented Bootcamp videos and now have moved
            on to PHP 7 lessons. They are very helpful and easy to follow.";
        $post->user_id = User::first()->id;
        $post->save();
    }
}
