@extends('admin.layout')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h6>Student/Edit/{{ $students->name }}</h6>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.students.index') }}">Back </a>
    </div>
    @include('admin.include.errors')
    <form method="POST" action="{{ route('admin.students.update') }}">
        @csrf
        <input type="hidden" name="id" value="{{ $students->id }}">
        <div class="form-group">
            <label >Name</label>
            <input type="text" name="name" class="form-control" value="{{$students->name }}">
        </div>
        <div class="form-group">
            <label >Email</label>
            <input type="email" name="email" class="form-control" value="{{$students->email }}">
        </div>
        <div class="form-group">
            <label >spec</label>
            <input type="spec" name="spec" class="form-control" value="{{$students->spec }}">
        </div>
        <button type="submit" class="btn btn-primary" >Submit</button>
    </form>
        
@endsection 