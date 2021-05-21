@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>User Detail - {{  $user_detail->name}}</h2>
        <div class="row">
            <div class="col-md-2">Name : </div>
            <div class="col-md-6">{{ $user_detail->name }}</div>
        </div>

        <div class="row">
            <div class="col-md-2">Email : </div>
            <div class="col-md-6">{{ $user_detail->email }}</div>
        </div>

        <div class="row">
            <div class="col-md-2">Status : </div>
            <div class="col-md-6">{{ ucfirst($user_detail->status) }}</div>
        </div>

        <div class="row">
            <div class="col-md-2">Role : </div>
            <div class="col-md-6">{{ ucfirst($user_detail->role) }}</div>
        </div>
    </div>
@endsection
