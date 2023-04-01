@extends('admin.layout')
@section('content')
    <div class="d-flex justify-content-between mb-5">
        <h6>Student/Show courses</h6>
      <div>
        <a class="btn btn-sm btn-info" href="{{ route('admin.students.addCourse',$student_id) }}">Add to course </a>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.students.index') }}">Back </a>
      </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                {{-- <th scope="col">Image</th> --}}
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $c)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        {{ $c->name }}
                    </td>
                    <td>
                        {{-- @if ($c->pivot->status !== 'approve') --}}
                        @if ($c->pivot->status == 'pending'||$c->pivot->status == 'reject')
                            <a class="btn btn-sm btn-info" href="{{ route('admin.students.approveCourse', [$student_id, $c->id]) }}">Approve</a>
                        @endif
                        @if ($c->pivot->status !== 'reject' )
                            <a class="btn btn-sm btn-danger" href="{{ route('admin.students.rejectCourse', [$student_id, $c->id]) }}">Reject</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
