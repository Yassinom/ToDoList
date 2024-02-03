<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;

class TodolistContoller extends Controller
{
    public function saveItem(Request $request) {
        $newListItem = new ListItem;
        $newListItem->name = $request->ListItem;
        $newListItem->completed = 0;
        $newListItem->save();
        // \Log:: info(json_encode($request->all()));
    }   
}
