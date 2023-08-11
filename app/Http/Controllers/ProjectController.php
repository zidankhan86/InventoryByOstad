<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function project(){
        return view('pages.project');
    }

    public function projectsData(Request $request){
        return DB::table('projects')->first();
    }
}
