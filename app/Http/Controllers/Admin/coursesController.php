<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Cat;
use App\Models\Trainer;

class coursesController extends Controller
{
    public function index()
    {
        $data['courses'] = Course::select('id', 'name', 'price')
            ->orderBy('id', 'DESC')->get();


        return view('admin.courses.index')->with($data);
    }
    public function create()
    {
        $data['cats'] = Cat::select('id', 'name')->get();
        $data['trainers'] = Trainer::select('id', 'name')->get();
        return view('admin.courses.create')->with($data);
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:200',
            'cat_id' => 'required|exists:cats,id',
            'trainer_id' => 'required|exists:trainers,id',
            'small_desc' => 'required|string|max:20',
            'desc' => 'required|string',
            'price' => 'required|integer',
        ]);
        Course::create($data);
        return redirect(route('admin.courses.index'));
    }
    public function edit($id)
    {
        $data['cats'] = Cat::select('id', 'name')->get();
        $data['trainers'] = Trainer::select('id', 'name')->get();

        $data['course'] = Course::findOrFail($id);

        return view('admin.courses.edit')->with($data);
    }
    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:200',
            'cat_id' => 'required|exists:cats,id',
            'trainer_id' => 'required|exists:trainers,id',
            'small_desc' => 'required|string|max:20',
            'desc' => 'required|string',
            'price' => 'required|integer', 
        ]);
        Course::findOrFail($request->id)->update($data);
        return back();
    }
    public function destroy($id)
    {
        Course::findOrFail($id)->delete();
        return back();
    }
}
