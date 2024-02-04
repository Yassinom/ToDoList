<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;
use Illuminate\Support\Facades\DB;

class TodolistContoller extends Controller
{
    public function index(){
        return view('welcome',['listItems'=>ListItem::all()]);
    }

    public function saveItem(Request $request) {
        $newListItem = new ListItem;
        $newListItem->name = $request->ListItem;
        $newListItem->completed = 0;
        $newListItem->save();
        // \Log:: info(json_encode($request->all()));
        return redirect('/');
    }   

    public function deleteItem($id) {
        // \Log:: info(json_encode($id));
        $variable = DB::select("delete from list_items where id=$id");
        return redirect('/');
    }   
}
