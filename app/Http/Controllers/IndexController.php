<?php

namespace Awards\Http\Controllers;

use Illuminate\Http\Request;

use Awards\Gallery as Gallery;
use Awards\Post as Post;
use Awards\Page as Page;
use Awards\Category as Category;
use Awards\Nomination as Nomination;
use Setting;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Nomination $nomination)
    {
        $obj = new \stdClass();
        $obj->galleries = Gallery::orderBy('ordering', 'asc')->limit(3)->get();
        $obj->pages = Page::where('public',1)->orderBy('ordering', 'asc')->get();
        $obj->nomination = ($nomination->getActivNomination())?$nomination->getActivNomination():$nomination->getLastNomination();
        $obj->posts = Post::where('public',1)->latest()->limit(6)->get();
        $obj->globalSettings = Setting::all();
        return view('index')->with('obj', $obj)->render();
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
        //
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
        //
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

    /**
     * Display all artists.
     *
     * @return object Artists
     */
    public function lineUp($artist=null, \Awards\Artists $artists)
    {
        $artistObj = new \stdClass();
        $artistObj->pages = Page::where('public',1)->orderBy('ordering', 'asc')->get();
        $artistObj->globalSettings = Setting::all();

        if($artist)
        {
            $artistObj->artist = $artists::where('id',$artist)->where('publish',1)->first();
        } else
        {
            $artistObj->artists = $artists::where('publish',1)->paginate(12);
        }
        return view('line-up.lineup')->with('obj', $artistObj)->render();
    }
    public function buyTickets(){
        $obj = new \stdClass();
        $obj->pages = Page::where('public',1)->orderBy('ordering', 'asc')->get();
        $obj->buyTicket = Page::where('slug','buy-tickets')->first();
        // preg_match_all('#<img.*src="(.*)".*>#isU', $obj->buyTicket[0]['content'], $match);
        // @$obj->buyTicketImage = $match[1][0];
        // $obj->buyTicket[0]['content'] = preg_replace('/<img[^>]+>/', '', $obj->buyTicket[0]['content'], 1);
        // $obj->buyTicket = strip_tags($obj->buyTicket[0]['content']);
        $obj->globalSettings = Setting::all();
        return view('buy.buyTickets')->with('obj', $obj)->render();
    }

    public function contact(){
        $obj = new \stdClass();
        $obj->pages = Page::where('public',1)->orderBy('ordering', 'asc')->get();
        $obj->globalSettings = Setting::all();
        return view('contact.contact')->with('obj', $obj)->render();
    }

    public function rules(){
        $obj = new \stdClass();
        $obj->pages = Page::where('public',1)->orderBy('ordering', 'asc')->get();
        $obj->rules = Page::where('slug','=', 'rules')->get();
        $obj->globalSettings = Setting::all();
        return view('rule.rule')->with('obj', $obj)->render();
    }
}
