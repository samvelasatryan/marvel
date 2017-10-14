<?php
namespace App\Observers;

use App\Artists;

class ArtistsObserver
{
    
    /**
     * Listen to the Artists creating event.
     *
     * @param  Artists  $Artists
     * @return void
     */
    public function creating(Artists $Artists)
    {
        //code...
    }

     /**
     * Listen to the Artists created event.
     *
     * @param  Artists  $Artists
     * @return void
     */
    public function created(Artists $Artists)
    {
        //code...
    }

    /**
     * Listen to the Artists updating event.
     *
     * @param  Artists  $Artists
     * @return void
     */
    public function updating(Artists $Artists)
    {
        //code...
    }

    /**
     * Listen to the Artists updated event.
     *
     * @param  Artists  $Artists
     * @return void
     */
    public function updated(Artists $Artists)
    {
        //code...
    }

    /**
     * Listen to the Artists saving event.
     *
     * @param  Artists  $Artists
     * @return void
     */
    public function saving(Artists $Artists)
    {
        //code...
    }

    /**
     * Listen to the Artists saved event.
     *
     * @param  Artists  $Artists
     * @return void
     */
    public function saved(Artists $Artists)
    {
        //code...
    }

    /**
     * Listen to the Artists deleting event.
     *
     * @param  Artists  $Artists
     * @return void
     */
    public function deleting(Artists $Artists)
    {
        //code...
    }

    /**
     * Listen to the Artists deleted event.
     *
     * @param  Artists  $Artists
     * @return void
     */
    public function deleted(Artists $Artists)
    {
        //code...
    }

    /**
     * Listen to the Artists restoring event.
     *
     * @param  Artists  $Artists
     * @return void
     */
    public function restoring(Artists $Artists)
    {
        //code...
    }

    /**
     * Listen to the Artists restored event.
     *
     * @param  Artists  $Artists
     * @return void
     */
    public function restored(Artists $Artists)
    {
        //code...
    }
}