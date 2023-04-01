@extends('admin.layout')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h6>Trainer/Edit/{{ $trainer->name }}</h6>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.trainers.index') }}">Back </a>
    </div>
    @include('admin.include.errors')
    <form method="POST" action="{{ route('admin.trainers.update') }}">
        @csrf
        <input type="hidden" name="id" value="{{ $trainer->id }}">
        <div class="form-group">
            <label >Name</label>
            <input type="text" name="name" class="form-control" value="{{$trainer->name }}">
        </div>
        <button type="submit" class="btn btn-primary" >Submit</button>
    </form>
        
@endsection 