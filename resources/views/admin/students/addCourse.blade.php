@extends('admin.layout')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h6>Student/Edit/Add course</h6>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.students.index') }}">Back </a>
    </div>
    @include('admin.include.errors')
    <form method="POST" action="{{ route('admin.students.storeCourse',$student_id) }}">
        @csrf
        <input type="hidden" name="id" value="{{ $student_id }}">
        <div class="form-group">
            <select name="course_id" class="form-control">
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}" >{{ $course->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary" >Submit</button>
    </form>
        
@endsection 