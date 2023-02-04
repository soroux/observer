<?php

namespace App\Observers;

use App\Models\Post;

class PostObserver
{
    /**
     * Handle the Post "saving" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function saving(Post $post)
    {
        //
        dump( "post saving".PHP_EOL,$post);
    }
    /**
     * Handle the Post "saved" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function saved(Post $post)
    {
        //
        dump( "post saved".PHP_EOL,$post);
    }
    /**
     * Handle the Post "creating" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function creating(Post $post)
    {
        //
        dump( "post creating".PHP_EOL,$post);
    }
    /**
     * Handle the Post "created" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function created(Post $post)
    {
        //
        dump( "post created".PHP_EOL,$post);
    }

    /**
     * Handle the Post "updated" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function updated(Post $post)
    {
        //
        dump( "post updated".PHP_EOL,$post);

    }
    /**
     * Handle the Post "updating" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function updating(Post $post)
    {
        //
        dump( "post updating".PHP_EOL,$post);

    }

    /**
     * Handle the Post "deleted" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function deleted(Post $post)
    {
        //
        dump( "post deleted".PHP_EOL,$post);

    }

    /**
     * Handle the Post "restored" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function restored(Post $post)
    {
        //
        echo "post restored".PHP_EOL;

    }

    /**
     * Handle the Post "force deleted" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function forceDeleted(Post $post)
    {
        //
        echo "post forceDeleted".PHP_EOL;

    }
}
