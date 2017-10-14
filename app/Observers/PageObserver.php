<?php
namespace App\Observers;

use App\Page;

class PageObserver
{
    
    /**
     * Listen to the Page creating event.
     *
     * @param  Page  $Page
     * @return void
     */
    public function creating(Page $Page)
    {
        //code...
    }

     /**
     * Listen to the Page created event.
     *
     * @param  Page  $Page
     * @return void
     */
    public function created(Page $Page)
    {
        //code...
    }

    /**
     * Listen to the Page updating event.
     *
     * @param  Page  $Page
     * @return void
     */
    public function updating(Page $Page)
    {
        //code...
    }

    /**
     * Listen to the Page updated event.
     *
     * @param  Page  $Page
     * @return void
     */
    public function updated(Page $Page)
    {
        //code...
    }

    /**
     * Listen to the Page saving event.
     *
     * @param  Page  $Page
     * @return void
     */
    public function saving(Page $Page)
    {
        //code...
    }

    /**
     * Listen to the Page saved event.
     *
     * @param  Page  $Page
     * @return void
     */
    public function saved(Page $Page)
    {
        //code...
    }

    /**
     * Listen to the Page deleting event.
     *
     * @param  Page  $Page
     * @return void
     */
    public function deleting(Page $Page)
    {
        //code...
    }

    /**
     * Listen to the Page deleted event.
     *
     * @param  Page  $Page
     * @return void
     */
    public function deleted(Page $Page)
    {
        //code...
    }

    /**
     * Listen to the Page restoring event.
     *
     * @param  Page  $Page
     * @return void
     */
    public function restoring(Page $Page)
    {
        //code...
    }

    /**
     * Listen to the Page restored event.
     *
     * @param  Page  $Page
     * @return void
     */
    public function restored(Page $Page)
    {
        //code...
    }
}