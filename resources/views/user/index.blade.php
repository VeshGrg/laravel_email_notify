@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="text-right"><a href="{{route('landing')}}">Go back Dashboard</a></p>
                <h3 class="text-center">Users Details</h3>
                <p class="text-right"><a href="{{ route('users.create') }}">Add a User</a></p>
                <table class="table table-striped table-hover">
                    <thead>
                    <th>S.No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Action</th>
                    </thead>
                    @php
                        $i = 0;
                    @endphp
                    @foreach($users as $user_detail)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $user_detail->name }}</td>
                            <td>{{ $user_detail->email }}</td>
                            <td>{{ $user_detail->role }}</td>
                            <td>{{ $user_detail->status }}</td>
                            <td>{{ $user_detail->created_at->format('jS M Y') }}</td>
                            <td>
                                <a href="{{ route('show-user', $user_detail) }}">View</a>,
                                <a href="{{ route('edit-user', $user_detail) }}">Edit</a> ,
                                <form action="{{ route('delete-user', $user_detail) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
