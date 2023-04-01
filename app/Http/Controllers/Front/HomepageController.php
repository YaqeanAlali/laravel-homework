<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\SiteContent;
use App\Models\Trainer;
use App\Models\Student;
use App\Models\Test;


class HomepageController extends Controller
{
    public function index(){

        $data['banner']=SiteContent::select('content')->where('name','banner')->first();
        $data['courses_content']=SiteContent::select('content')->where('name','courses')->first();
        $data['courses']=Course::select("name","id","cat_id","trainer_id","small_desc","img","price")
        ->orderBy("id","desc")->take(3)->get();
        // dd($data["courses"]);
        $data['courses_count']=Course::count();
        $data['trainers_count']=Trainer::count();
        $data['students_count']=Student::count();
        $data["tests"] = Test::select("name", "spec", "desc", "img")->get();
        return view("front.index",)->with($data);
        
    }
}
