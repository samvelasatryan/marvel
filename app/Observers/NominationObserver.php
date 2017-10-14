<?php
namespace App\Observers;

use App\Nomination;

class NominationObserver
{
    
    /**
     * Listen to the Nomination creating event.
     *
     * @param  Nomination  $Nomination
     * @return void
     */
    public function creating(Nomination $Nomination)
    {
        //code...
    }

     /**
     * Listen to the Nomination created event.
     *
     * @param  Nomination  $Nomination
     * @return void
     */
    public function created(Nomination $Nomination)
    {
        //code...
    }

    /**
     * Listen to the Nomination updating event.
     *
     * @param  Nomination  $Nomination
     * @return void
     */
    public function updating(Nomination $Nomination)
    {
        //code...
    }

    /**
     * Listen to the Nomination updated event.
     *
     * @param  Nomination  $Nomination
     * @return void
     */
    public function updated(Nomination $Nomination)
    {
        //code...
    }

    /**
     * Listen to the Nomination saving event.
     *
     * @param  Nomination  $Nomination
     * @return void
     */
    public function saving(Nomination $Nomination)
    {
        //code...
    }

    /**
     * Listen to the Nomination saved event.
     *
     * @param  Nomination  $Nomination
     * @return void
     */
    public function saved(Nomination $Nomination)
    {
        //code...
    }

    /**
     * Listen to the Nomination deleting event.
     *
     * @param  Nomination  $Nomination
     * @return void
     */
    public function deleting(Nomination $Nomination)
    {
        //code...
    }

    /**
     * Listen to the Nomination deleted event.
     *
     * @param  Nomination  $Nomination
     * @return void
     */
    public function deleted(Nomination $Nomination)
    {
        //code...
    }

    /**
     * Listen to the Nomination restoring event.
     *
     * @param  Nomination  $Nomination
     * @return void
     */
    public function restoring(Nomination $Nomination)
    {
        //code...
    }

    /**
     * Listen to the Nomination restored event.
     *
     * @param  Nomination  $Nomination
     * @return void
     */
    public function restored(Nomination $Nomination)
    {
        //code...
    }
}