@extends('admin.layout')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h6>Students</h6>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.students.create') }}">Add </a>
    </div>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            {{-- <th scope="col">Image</th> --}}
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Spec</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $std)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
             
              <td>{{ $std->name }}</td>
          
             
              <td>{{ $std->email }}</td>
              <td>{{ $std->spec }}</td>
              <td>
                <a class="btn btn-sm btn-info" href="{{ route('admin.students.edit',$std->id) }}">Edit</a>
                <a class="btn btn-sm btn-danger" href="{{ route('admin.students.destroy',$std->id) }}" >Delete</a>
                <a class="btn btn-sm btn-primary" href="{{ route('admin.students.showCourses',$std->id) }}" >Show Courses</a>
              </td>
            </tr>            
            @endforeach
          
        </tbody>
      </table>
      
    
@endsection