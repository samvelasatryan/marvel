<?php 

namespace Awards\Http\Controllers;

use Awards\Http\Requests;
use Awards\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;
use Setting;

class SettingsController extends CrudController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all($entity)
    {
		$settings =Setting::all();

		return \View::make('panelViews::settings')->with('settings',(object)$settings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $settings =Setting::all();
        $input = $request->all();
        $logo = ($request->file('image')) ? 'logo'.'.'.$request
            ->file('image')->getClientOriginalExtension() : '';
        if($logo && $logo!=''){
            $request->file('image')->move(base_path() . '/public/images/', $logo);
            Setting::set('logo', $logo);
        }
        $lineup = ($request->file('line-up')) ? 'lineup'.'.'.$request
            ->file('line-up')->getClientOriginalExtension() : '';
        if($lineup && $lineup!=''){
            $request->file('line-up')->move(base_path() . '/public/images/', $lineup);
            Setting::set('lineup', $lineup);
        }
        $buy_ticket_first = ($request->file('buy_ticket_first')) ? 'ticket_first'.'.'.$request
            ->file('buy_ticket_first')->getClientOriginalExtension() : '';
        if($buy_ticket_first && $buy_ticket_first!=''){
            $request->file('buy_ticket_first')->move(base_path() . '/public/images/', $buy_ticket_first);
            Setting::set('buy_ticket_first', $buy_ticket_first);
        }
        $buy_ticket_second = ($request->file('buy_ticket_second')) ? 'ticket_second'.'.'.$request
            ->file('buy_ticket_second')->getClientOriginalExtension() : '';
        if($buy_ticket_second && $buy_ticket_second!=''){
            $request->file('buy_ticket_second')->move(base_path() . '/public/images/', $buy_ticket_second);
            Setting::set('buy_ticket_second', $buy_ticket_second);
        }
        unset($input['_token']);
        unset($input['image']);
        unset($input['line-up']);
        unset($input['buy_ticket_first']);
        unset($input['buy_ticket_second']);
        foreach ($input as $key => $value) {
            $value = (!$value)?'':$value;
            Setting::set($key, $value);
        }
        Setting::save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}