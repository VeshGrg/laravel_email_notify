@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <a href="{{ route('create-user') }}">Add a User</a></div>
        </div>
    </div>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3>Dashboard</h3>
                <ul>
                    <li>Share
                        <ul>
                            <li><a href="">List Shares</a></li>
                            <li><a href="{{ route('shares.create') }}">Add Shares Details</a></li>
                        </ul>
                    </li>
                </ul>

                <ul>
                    <li>User
                        <ul>
                            <li><a href="{{ route('home') }}">List Users</a></li>
                            <li><a href="{{ route('create-user') }}">Add a User</a></li>
                        </ul>
                    </li>
                </ul>

                <ul>
                    <li>Daily Transaction
                        <ul>
                            <li><a href="">Add Transaction</a></li>
                        </ul>
                    </li>
                </ul>

                <ul>
                    <li><a href="">Contact</a></li>
                </ul>

            </div>
            <div class="col-md-9">
                <h3 class="text-center">Users Details</h3>
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
