<?php
namespace App\Observers;

use App\NominationAwards;

class NominationAwardsObserver
{
    
    /**
     * Listen to the NominationAwards creating event.
     *
     * @param  NominationAwards  $NominationAwards
     * @return void
     */
    public function creating(NominationAwards $NominationAwards)
    {
        //code...
    }

     /**
     * Listen to the NominationAwards created event.
     *
     * @param  NominationAwards  $NominationAwards
     * @return void
     */
    public function created(NominationAwards $NominationAwards)
    {
        //code...
    }

    /**
     * Listen to the NominationAwards updating event.
     *
     * @param  NominationAwards  $NominationAwards
     * @return void
     */
    public function updating(NominationAwards $NominationAwards)
    {
        //code...
    }

    /**
     * Listen to the NominationAwards updated event.
     *
     * @param  NominationAwards  $NominationAwards
     * @return void
     */
    public function updated(NominationAwards $NominationAwards)
    {
        //code...
    }

    /**
     * Listen to the NominationAwards saving event.
     *
     * @param  NominationAwards  $NominationAwards
     * @return void
     */
    public function saving(NominationAwards $NominationAwards)
    {
        //code...
    }

    /**
     * Listen to the NominationAwards saved event.
     *
     * @param  NominationAwards  $NominationAwards
     * @return void
     */
    public function saved(NominationAwards $NominationAwards)
    {
        //code...
    }

    /**
     * Listen to the NominationAwards deleting event.
     *
     * @param  NominationAwards  $NominationAwards
     * @return void
     */
    public function deleting(NominationAwards $NominationAwards)
    {
        //code...
    }

    /**
     * Listen to the NominationAwards deleted event.
     *
     * @param  NominationAwards  $NominationAwards
     * @return void
     */
    public function deleted(NominationAwards $NominationAwards)
    {
        //code...
    }

    /**
     * Listen to the NominationAwards restoring event.
     *
     * @param  NominationAwards  $NominationAwards
     * @return void
     */
    public function restoring(NominationAwards $NominationAwards)
    {
        //code...
    }

    /**
     * Listen to the NominationAwards restored event.
     *
     * @param  NominationAwards  $NominationAwards
     * @return void
     */
    public function restored(NominationAwards $NominationAwards)
    {
        //code...
    }
}