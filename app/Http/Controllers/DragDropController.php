<?php

namespace Awards\Http\Controllers;

use Illuminate\Http\Request;

use Awards\Http\Requests;
use Awards\Http\Controllers\Controller;

class DragDropController extends Controller
{
    public function drugDrop(Request $request) {
        $old_index = $request->input('old_index');
        $new_index = $request->input('new_index');
        $arr = $request->input('arr');
        $paginateCount = $request->input('paginateCount');
        $model = $request->input('model');
        $class = '\Awards\\'.$model;
        $items = $class::orderBy('ordering')->get();
        for ($i = 0; $i < count($arr); $i++) {
            $id = $items[$arr[$i]]->id;
            if($arr[$i] >= 10 && $paginateCount<=10){
                $class::where('id', $id)->update(['ordering'=> $i+11]);
            } else {
                $class::where('id', $id)->update(['ordering'=> $i+1]);
            }
        }
        return "success";
    }
}
