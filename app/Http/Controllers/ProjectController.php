<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function project(){

        $seo = DB::table('seoproperties')
        ->where('pageName','projects')
        ->first();
        return view('pages.project',['seo'=>$seo]);
    }

    public function projectsData(Request $request){
        return DB::table('projects')->first();
    }
}
