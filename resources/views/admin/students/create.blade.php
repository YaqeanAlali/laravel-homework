@extends('admin.layout')
@section('content')
    <div class="d-flex justify-content-between mb-5">
        <h6>Student/Add</h6>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.students.index') }}">Back </a>
    </div>
    @include('admin.include.errors')
    <form method="POST" action="{{ route('admin.students.store') }}">
        @csrf
        <div class="form-group">
            <label >Name</label><br>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label >Email</label><br>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label >Speciality</label><br>
            <input type="text" name="spec" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary" >Submit</button>
    </form>
        
@endsection