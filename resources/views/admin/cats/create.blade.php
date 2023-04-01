@extends('admin.layout')
@section('content')
    <div class="d-flex justify-content-between mb-5">
        <h6>Categories/Add</h6>
        <button class="btn btn-sm btn-primary" href="{{ route('admin.cats.index') }}">Back </button>
    </div>
    @include('admin.include.errors')
    <form method="POST" action="{{ route('admin.cats.store') }}">
        @csrf
        <div class="form-group">
            <label >Name</label><br>
            <input type="text" name="name" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary" >Submit</button>
    </form>
        
@endsection