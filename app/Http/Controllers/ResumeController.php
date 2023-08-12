<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    public function resume(){
    $seo = DB::table('seoproperties')->where('pageName','resume')->first();

        return view('pages.resume',['seo'=>$seo]);
    }

    public function resumeLink(Request $request){
        return DB::table('resumes')->first();
    }

    public function experiencesData(Request $request){
        return DB::table('experienes')->get();
    }

    public function educationData(Request $request){
        return DB::table('educatons')->get();
    }

    public function skillsData(Request $request){
        return DB::table('skills')->get();
    }

   public function languageData(Request $request){
    return DB::table('languages')->get();
   }
}
