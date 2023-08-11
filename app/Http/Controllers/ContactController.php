<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function contact(){
        return view('pages.contact');
    }

    public function contactStore(Request $request){

        return DB::table('contacts')->insert($request->input());

    }
}
