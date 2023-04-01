<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trainer;
use Image;

class TrainerController extends Controller
{
    public function index(){
        $data['trainers']= Trainer::select('id','name','phone','spec','img')
        ->orderBy('id','DESC')->get();


        return view('admin.trainers.index')->with($data);

    }
    public function create(){

        
        return view('admin.trainers.create');

    }
    public function store(Request $request){
        $data=$request->validate([
            'name'=>'required|string|max:20',
            'spec'=>'nullable|string|max:20',
            'phone'=>'nullable|string|max:20'
        ]);
        Trainer::create($data);
        return redirect(route('admin.trainers.index')); 
    }
    public function edit($id){

        $data['trainer']=Trainer::findOrFail($id);

        return view('admin.trainers.edit')->with($data);

    }
    public function update(Request $request){
        $data=$request->validate([
            'name'=>'required|string|max:20'
        ]);
        Trainer::findOrFail($request->id)->update($data);
        return back( ); 
    }
    public function destroy($id){
        Trainer::findOrFail($id)->delete();
        return back();
    }
    
}
