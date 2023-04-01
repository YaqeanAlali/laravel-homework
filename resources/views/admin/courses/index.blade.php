@extends('admin.layout')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h6>Courses</h6>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.courses.create') }}">Add </a>
    </div>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            {{-- <th scope="col">Image</th> --}}
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($courses as $c)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
             
              <td>{{ $c->name }}</td>
          
             
              <td>{{ $c->price }}</td>
              <td>
                <a class="btn btn-sm btn-info" href="{{ route('admin.courses.edit',$c->id) }}">Edit</a>
                <a class="btn btn-sm btn-danger" href="{{ route('admin.courses.destroy',$c->id) }}" >Delete</a>
              </td>
            </tr>            
            @endforeach
          
        </tbody>
      </table>
      
    
@endsection