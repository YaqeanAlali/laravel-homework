@extends('admin.layout')
@section('content')
    <div class="d-flex justify-content-between mb-5">
        <h6>Course/Add</h6>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.courses.index') }}">Back </a>
    </div>
    @include('admin.include.errors')
    <form method="POST" action="{{ route('admin.courses.store') }}">
        @csrf
        <div class="form-group">
            <label>Name</label><br>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select name="cat_id" class="form-control">
                @foreach ($cats as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Trainer</label>
            <select name="trainer_id" class="form-control">
                @foreach ($trainers as $t)
                    <option value="{{ $t->id }}">{{ $t->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Small desc</label><br>
            <input type="text" name="small_desc" class="form-control">
        </div>
        <div class="form-group">
            <label>Desc</label><br>
            <textarea name="desc" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label>Price</label><br>
            <input type="number" name="price" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
