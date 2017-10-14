<?php
namespace App\Observers;

use App\Gallery;

class GalleryObserver
{
    
    /**
     * Listen to the Gallery creating event.
     *
     * @param  Gallery  $Gallery
     * @return void
     */
    public function creating(Gallery $Gallery)
    {
        //code...
    }

     /**
     * Listen to the Gallery created event.
     *
     * @param  Gallery  $Gallery
     * @return void
     */
    public function created(Gallery $Gallery)
    {
        //code...
    }

    /**
     * Listen to the Gallery updating event.
     *
     * @param  Gallery  $Gallery
     * @return void
     */
    public function updating(Gallery $Gallery)
    {
        //code...
    }

    /**
     * Listen to the Gallery updated event.
     *
     * @param  Gallery  $Gallery
     * @return void
     */
    public function updated(Gallery $Gallery)
    {
        //code...
    }

    /**
     * Listen to the Gallery saving event.
     *
     * @param  Gallery  $Gallery
     * @return void
     */
    public function saving(Gallery $Gallery)
    {
        //code...
    }

    /**
     * Listen to the Gallery saved event.
     *
     * @param  Gallery  $Gallery
     * @return void
     */
    public function saved(Gallery $Gallery)
    {
        //code...
    }

    /**
     * Listen to the Gallery deleting event.
     *
     * @param  Gallery  $Gallery
     * @return void
     */
    public function deleting(Gallery $Gallery)
    {
        //code...
    }

    /**
     * Listen to the Gallery deleted event.
     *
     * @param  Gallery  $Gallery
     * @return void
     */
    public function deleted(Gallery $Gallery)
    {
        //code...
    }

    /**
     * Listen to the Gallery restoring event.
     *
     * @param  Gallery  $Gallery
     * @return void
     */
    public function restoring(Gallery $Gallery)
    {
        //code...
    }

    /**
     * Listen to the Gallery restored event.
     *
     * @param  Gallery  $Gallery
     * @return void
     */
    public function restored(Gallery $Gallery)
    {
        //code...
    }
}