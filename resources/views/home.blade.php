@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12">
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
                            <li><a href="{{ route('shares.index') }}">List Shares</a></li>
                            <li><a href="{{ route('shares.create') }}">Buy Shares</a></li>
                        </ul>
                    </li>
                </ul>

                <ul>
                    <li>User
                        <ul>
                            <li><a href="{{ route('users.index') }}">List Users</a></li>
                            <li><a href="{{ route('users.create') }}">Add a User</a></li>
                        </ul>
                    </li>
                </ul>

                <ul>
                    <li>Daily Transaction
                        <ul>
                            <li><a href="{{ route('dailytransactions.index') }}">Show Transaction</a></li>
                            <li><a href="{{ route('dailytransactions.create') }}">Add Transaction</a></li>
                        </ul>
                    </li>
                </ul>

                <ul>
                    <li><a href="">Contact</a></li>
                </ul>

            </div>

        </div>
    </div>


@endsection
