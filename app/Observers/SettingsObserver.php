<?php
namespace App\Observers;

use App\Settings;

class SettingsObserver
{
    
    /**
     * Listen to the Settings creating event.
     *
     * @param  Settings  $Settings
     * @return void
     */
    public function creating(Settings $Settings)
    {
        //code...
    }

     /**
     * Listen to the Settings created event.
     *
     * @param  Settings  $Settings
     * @return void
     */
    public function created(Settings $Settings)
    {
        //code...
    }

    /**
     * Listen to the Settings updating event.
     *
     * @param  Settings  $Settings
     * @return void
     */
    public function updating(Settings $Settings)
    {
        //code...
    }

    /**
     * Listen to the Settings updated event.
     *
     * @param  Settings  $Settings
     * @return void
     */
    public function updated(Settings $Settings)
    {
        //code...
    }

    /**
     * Listen to the Settings saving event.
     *
     * @param  Settings  $Settings
     * @return void
     */
    public function saving(Settings $Settings)
    {
        //code...
    }

    /**
     * Listen to the Settings saved event.
     *
     * @param  Settings  $Settings
     * @return void
     */
    public function saved(Settings $Settings)
    {
        //code...
    }

    /**
     * Listen to the Settings deleting event.
     *
     * @param  Settings  $Settings
     * @return void
     */
    public function deleting(Settings $Settings)
    {
        //code...
    }

    /**
     * Listen to the Settings deleted event.
     *
     * @param  Settings  $Settings
     * @return void
     */
    public function deleted(Settings $Settings)
    {
        //code...
    }

    /**
     * Listen to the Settings restoring event.
     *
     * @param  Settings  $Settings
     * @return void
     */
    public function restoring(Settings $Settings)
    {
        //code...
    }

    /**
     * Listen to the Settings restored event.
     *
     * @param  Settings  $Settings
     * @return void
     */
    public function restored(Settings $Settings)
    {
        //code...
    }
}