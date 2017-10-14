<?php
namespace App\Observers;

use App\Post;

class PostObserver
{
    
    /**
     * Listen to the Post creating event.
     *
     * @param  Post  $Post
     * @return void
     */
    public function creating(Post $Post)
    {
        //code...
    }

     /**
     * Listen to the Post created event.
     *
     * @param  Post  $Post
     * @return void
     */
    public function created(Post $Post)
    {
        //code...
    }

    /**
     * Listen to the Post updating event.
     *
     * @param  Post  $Post
     * @return void
     */
    public function updating(Post $Post)
    {
        //code...
    }

    /**
     * Listen to the Post updated event.
     *
     * @param  Post  $Post
     * @return void
     */
    public function updated(Post $Post)
    {
        //code...
    }

    /**
     * Listen to the Post saving event.
     *
     * @param  Post  $Post
     * @return void
     */
    public function saving(Post $Post)
    {
        //code...
    }

    /**
     * Listen to the Post saved event.
     *
     * @param  Post  $Post
     * @return void
     */
    public function saved(Post $Post)
    {
        //code...
    }

    /**
     * Listen to the Post deleting event.
     *
     * @param  Post  $Post
     * @return void
     */
    public function deleting(Post $Post)
    {
        //code...
    }

    /**
     * Listen to the Post deleted event.
     *
     * @param  Post  $Post
     * @return void
     */
    public function deleted(Post $Post)
    {
        //code...
    }

    /**
     * Listen to the Post restoring event.
     *
     * @param  Post  $Post
     * @return void
     */
    public function restoring(Post $Post)
    {
        //code...
    }

    /**
     * Listen to the Post restored event.
     *
     * @param  Post  $Post
     * @return void
     */
    public function restored(Post $Post)
    {
        //code...
    }
}